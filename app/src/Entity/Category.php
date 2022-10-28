<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
#[ApiResource(
    normalizationContext: ['groups' => ['category:read']],
    denormalizationContext: ['groups' => ['category:write']],
)]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['category:read', 'category:write'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['category:read', 'category:write'])]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['category:read', 'category:write'])]
    private ?string $image = null;

    #[ORM\OneToMany(mappedBy: 'category', targetEntity: Cocktail::class, orphanRemoval: true)]
    #[Groups(['category:read', 'cocktail:read'])]
    private Collection $cocktail;

    public function __construct()
    {
        $this->cocktail = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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

    /**
     * @return Collection<int, cocktail>
     */
    public function getCocktail(): Collection
    {
        return $this->cocktail;
    }

    public function addCocktailId(cocktail $cocktailId): self
    {
        if (!$this->cocktail->contains($cocktailId)) {
            $this->cocktail->add($cocktailId);
            $cocktailId->setCategory($this);
        }

        return $this;
    }

    public function removeCocktailId(cocktail $cocktailId): self
    {
        if ($this->cocktail->removeElement($cocktailId)) {
            // set the owning side to null (unless already changed)
            if ($cocktailId->getCategory() === $this) {
                $cocktailId->setCategory(null);
            }
        }

        return $this;
    }
}
