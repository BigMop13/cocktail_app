<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Attribute\AsController;

#[AsController]
class CategoryCocktailsController extends AbstractController
{
    public function __construct(private readonly CategoryRepository $categoryRepository
    ){
    }

    public function __invoke(int $categoryId): JsonResponse
    {
        return $this->json($this->categoryRepository->getCategoryCocktails($categoryId));
    }
}
