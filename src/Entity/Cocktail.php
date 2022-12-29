<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiProperty;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Post;
use App\Controller\CategoryCocktails;
use App\Controller\CocktailSearcher;
use App\Repository\CocktailRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: CocktailRepository::class)]
#[ApiResource(operations: [
    new GetCollection(security: "is_granted('ROLE_USER')"),
    new Get(security: "is_granted('ROLE_USER')"),
    new Post(security: "is_granted('ROLE_USER')"),
    new Get(
        uriTemplate: '/category_cocktails/{categoryId}',
        formats: ['json' => ['application/json']],
        defaults: ['_api_receive'=>false],
        controller: CategoryCocktails::class,
        normalizationContext: ['groups' => ['category_cocktail:read']],
        denormalizationContext: ['groups' => ['category_cocktail:write']],
        security: "is_granted('ROLE_USER')",
        name: 'category_cocktails'
    ),
    new Get(
        uriTemplate: '/find_cocktail/{text}',
        formats: ['json' => ['application/json']],
        defaults: ['_api_receive'=>false],
        controller: CocktailSearcher::class,
        security: "is_granted('ROLE_USER')",
        name: 'cocktail_searcher'
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
    #[Groups(['cocktail:read','user:write', 'cocktail:write', 'category:read', 'cocktail:read', 'category_cocktail:read'])]
    #[ApiProperty(identifier: true)]
    private int $id;

    #[ORM\Column(length: 255)]
    #[Groups(['cocktail:read', 'user:write', 'cocktail:write', 'category:read', 'cocktail:read', 'category_cocktail:read'])]
    private string $name;

    #[ORM\Column(type: Types::ARRAY)]
    #[Groups(['cocktail:read', 'user:write','cocktail:write', 'category:read', 'cocktail:read', 'category_cocktail:read'])]
    private array $ingredients = [];

    #[ORM\Column]
    #[Groups(['cocktail:read','user:write', 'cocktail:write', 'category:read', 'cocktail:read', 'category_cocktail:read'])]
    private int $stars;

    #[ORM\Column]
    #[Groups(['cocktail:read', 'user:write', 'cocktail:write', 'category:read', 'cocktail:read', 'category_cocktail:read'])]
    private int $prepareTime;

    #[ORM\Column(length: 255)]
    #[Groups(['cocktail:read', 'user:write', 'cocktail:write', 'category:read', 'cocktail:read', 'category_cocktail:read'])]
    private string $difficulty;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['cocktail:read', 'user:write', 'cocktail:write', 'category:read', 'cocktail:read', 'category_cocktail:read'])]
    private ?string $image = null;

    #[ORM\ManyToOne(inversedBy: 'cocktail')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(['cocktail:read', 'cocktail:write'])]
    private Category $category;

    #[ORM\Column(type: Types::TEXT)]
    #[Groups(['cocktail:read', 'user:write', 'cocktail:write', 'category:read', 'cocktail:read', 'category_cocktail:read'])]
    private ?string $instruction = null;

    #[ORM\ManyToMany(targetEntity: User::class, mappedBy: 'cocktails')]
    private Collection $users;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

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
        return $this->prepareTime;
    }

    public function setPrepareTime(int $prepareTime): self
    {
        $this->prepareTime = $prepareTime;

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

    /**
     * @return Collection<int, User>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users->add($user);
            $user->addCocktail($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            $user->removeCocktail($this);
        }

        return $this;
    }
}
