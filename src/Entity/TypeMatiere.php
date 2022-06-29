<?php

namespace App\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\TypeMatiereRepository;
use Doctrine\ORM\Mapping as ORM;
#[ApiResource]
#[ORM\Entity(repositoryClass: TypeMatiereRepository::class)]
class TypeMatiere
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nom_typeMatiere;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomTypeMatiere(): ?string
    {
        return $this->nom_typeMatiere;
    }

    public function setNomTypeMatiere(string $nom_typeMatiere): self
    {
        $this->nom_typeMatiere = $nom_typeMatiere;

        return $this;
    }
}
