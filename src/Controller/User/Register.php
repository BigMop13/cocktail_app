<?php

declare(strict_types=1);

namespace App\Controller\User;

use App\Dto\RegistrationInput;
use App\Entity\User;
use App\Exception\CannotCreateUser;
use App\Persister\UserPersister;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Serializer\SerializerInterface;

#[AsController]
class Register
{
    public function __construct(private readonly SerializerInterface $serializer, private readonly UserPersister $userPersister)
    {

    }

    public function __invoke(Request $request): JsonResponse
    {
        $registrationInfo = $this->serializer->deserialize($request->getContent(), RegistrationInput::class, 'json');
        try {

            $user = new User();
            $user->setUsername($registrationInfo->getUsername())
                ->setEmail($registrationInfo->getEmail())
                ->setPassword($registrationInfo->getPassword())
                ->setNumber($registrationInfo->getNumber());

            $this->userPersister->persist($user);
            return new JsonResponse([
                'status' => 'success',
                'statusCode' => Response::HTTP_CREATED,
                'message' => 'User created successfully'
                ]);
        }
        catch (\Exception $exception)
        {
            return new JsonResponse([
                'status' => 'fail',
                'statusCode' => Response::HTTP_BAD_REQUEST,
                'message' => 'Cannot create user, incorrect registration details provided'
            ]);
        }
    }
}