<?php


namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Plat
 * @package AppBundle\Entity
 * @ORM\Entity
 * @ORM\Table()
 */
class Plat
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $nom;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $code;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @var Categorie
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Categorie", inversedBy="plats")
     * @ORM\JoinColumn(nullable=false)
     */
    private $categorie;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    private $position;

    /**
     * @var double
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     * @return Plat
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return Plat
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Plat
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param Categorie $categorie
     * @return Plat
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
        return $this;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param int $position
     * @return Plat
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param float $prix
     * @return Plat
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
        return $this;
    }
}