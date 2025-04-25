<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $designation = null;

    /**
     * @var Collection<int, Peinture>
     */
    #[ORM\ManyToMany(targetEntity: Peinture::class, mappedBy: 'categories')]
    private Collection $peintures;

    public function __construct()
    {
        $this->peintures = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(string $designation): static
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * @return Collection<int, Peinture>
     */
    public function getPeintures(): Collection
    {
        return $this->peintures;
    }

    public function addPeinture(Peinture $peinture): static
    {
        if (!$this->peintures->contains($peinture)) {
            $this->peintures->add($peinture);
            $peinture->addCategory($this);
        }

        return $this;
    }

    public function removePeinture(Peinture $peinture): static
    {
        if ($this->peintures->removeElement($peinture)) {
            $peinture->removeCategory($this);
        }

        return $this;
    }
}
