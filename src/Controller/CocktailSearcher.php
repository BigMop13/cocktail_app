<?php

namespace App\Controller;

use App\Repository\CocktailRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Attribute\AsController;

#[AsController]
class CocktailSearcher
{
    public function __construct(private readonly CocktailRepository $cocktailRepository)
    {
    }

    public function __invoke(string $text): array
    {
        return $this->cocktailRepository->findCocktailByString($text);
    }
}