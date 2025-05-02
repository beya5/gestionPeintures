<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(fields: ['eamillogin'], message: 'There is already an account with this emaillogin')]
#[ORM\InheritanceType("JOINED")]
#[ORM\DiscriminatorColumn(name: "type", type: "string")]
#[ORM\DiscriminatorMap(["user" => "User", "personne" => "Personne"])]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    protected ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[ORM\Column(type: 'json')]
    private array $roles = [];

    #[ORM\Column(length: 50)]
    private ?string $eamillogin = null;

    public function __construct()
    {
        
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

 
    public function setPassword(string $password): self
    {
    $this->password = $password;
    return $this;
    }

    public function getRoles(): array
    {
        $roles = $this->roles;
        $roles[] = 'ROLE_USER';
        
        return array_unique($roles);
    }

public function setRoles(array $roles): self
{
    $this->roles = $roles;

    return $this;
}

    public function getEamillogin(): ?string
    {
        return $this->eamillogin;
    }

    public function setEamillogin(string $eamillogin): static
    {
        $this->eamillogin = $eamillogin;

        return $this;
    }

    public function getUserIdentifier(): string
    {
        return (string) $this->eamillogin;
    }

    public function eraseCredentials(): void
    {
    }

}
