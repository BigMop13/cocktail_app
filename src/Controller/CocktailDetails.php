<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Cocktail;
use App\Exception\NoCocktailsFound;
use App\Repository\CocktailRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\PersistentCollection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Serializer\SerializerInterface;

#[AsController]
class CocktailDetails extends AbstractController
{
    public function __construct(private readonly CocktailRepository $cocktailRepository, private readonly SerializerInterface $serializer)
    {
    }

    /**
     * @throws NoCocktailsFound
     */
    public function __invoke(int $cocktailId): JsonResponse
    {
        try {
            $cocktail = $this->cocktailRepository->findCocktailById($cocktailId);

            if (!$cocktail)
            {
                throw new NoCocktailsFound('No cocktails found');
            }
        }
        catch (\Exception $exception)
        {
            return new JsonResponse([
                'statusCode' => 404,
                'message' => 'No cocktails found'
            ]);
        }
        $userFavourites = $this->getUser()->hasAddedCocktail($cocktail);



        return new JsonResponse([
            'id' => $cocktail->getId(),
            'name' =>$cocktail->getName(),
            'ingredients' => $cocktail->getIngredients(),
            'stars' => $cocktail->getStars(),
            'prepareTime' => $cocktail->getPrepareTime(),
            'difficulty' => $cocktail->getDifficulty(),
            'image' => $cocktail->getImage(),
            'category' => $cocktail->getCategory(),
            'instruction' => $cocktail->getInstruction(),
            'isFavourite' => $userFavourites
        ]);
    }
}