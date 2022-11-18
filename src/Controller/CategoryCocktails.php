<?php

namespace App\Controller;

use App\Exception\NoCocktailsFound;
use App\Repository\CategoryRepository;
use App\Repository\CocktailRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Attribute\AsController;

#[AsController]
class CategoryCocktails extends AbstractController
{
    public function __construct(private readonly CategoryRepository $categoryRepository, private readonly CocktailRepository $cocktailRepository
    ){
    }

    /**
     * @throws NoCocktailsFound
     */
    public function __invoke(Request $request): JsonResponse
    {
        $categoryId = (int) $request->query->get('categoryId', 1);
        try {
            return $this->json($this->categoryRepository->find($categoryId)->getCocktail()->toArray());
        }
        catch (\Exception $exception)
        {
            throw new NoCocktailsFound('No cocktails for this category found');
        }
    }
}
