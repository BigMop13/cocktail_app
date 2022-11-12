<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiProperty;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Post;
use App\Controller\CategoryCocktailsController;
use App\Repository\CocktailRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: CocktailRepository::class)]
#[ApiResource(operations: [
    new GetCollection(),
    new Get(),
    new Post(),
    new Get(
        uriTemplate: '/category_cocktails/{categoryId}',
        formats: ['json' => ['application/json']],
        defaults: ['_api_receive'=>false],
        controller: CategoryCocktailsController::class,
        normalizationContext: ['groups' => ['cocktail:read']],
        denormalizationContext: ['groups' => ['cocktail:write']],
        name: 'category_cocktails',
    )
],
    formats: ['json' => ['application/json']],
    normalizationContext: ['groups' => ['cocktail:read']],
    denormalizationContext: ['groups' => ['cocktail:write']],
)]
class Cocktail
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['cocktail:read', 'cocktail:write', 'category:read', 'cocktail:read'])]
    #[ApiProperty(identifier: true)]
    private int $id;

    #[ORM\Column(length: 255)]
    #[Groups(['cocktail:read', 'cocktail:write', 'category:read', 'cocktail:read'])]
    private string $name;

    #[ORM\Column(type: Types::ARRAY)]
    #[Groups(['cocktail:read', 'cocktail:write', 'category:read', 'cocktail:read'])]
    private array $ingredients = [];

    #[ORM\Column]
    #[Groups(['cocktail:read', 'cocktail:write', 'category:read', 'cocktail:read'])]
    private int $stars;

    #[ORM\Column]
    #[Groups(['cocktail:read', 'cocktail:write', 'category:read', 'cocktail:read'])]
    private int $prepare_time;

    #[ORM\Column(length: 255)]
    #[Groups(['cocktail:read', 'cocktail:write', 'category:read', 'cocktail:read'])]
    private string $difficulty;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['cocktail:read', 'cocktail:write', 'category:read', 'cocktail:read'])]
    private ?string $image = null;

    #[ORM\ManyToOne(inversedBy: 'cocktail')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(['cocktail:read', 'cocktail:write', 'category:read', 'cocktail:read'])]
    private Category $category;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $instruction = null;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getIngredients(): array
    {
        return $this->ingredients;
    }

    public function setIngredients(array $ingredients): self
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    public function getStars(): ?int
    {
        return $this->stars;
    }

    public function setStars(int $stars): self
    {
        $this->stars = $stars;

        return $this;
    }

    public function getPrepareTime(): ?int
    {
        return $this->prepare_time;
    }

    public function setPrepareTime(int $prepare_time): self
    {
        $this->prepare_time = $prepare_time;

        return $this;
    }

    public function getDifficulty(): ?string
    {
        return $this->difficulty;
    }

    public function setDifficulty(string $difficulty): self
    {
        $this->difficulty = $difficulty;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getInstruction(): string
    {
        return $this->instruction;
    }

    public function setInstruction(string $instruction): self
    {
        $this->instruction = $instruction;

        return $this;
    }
}
