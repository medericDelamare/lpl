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
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @var int
     * @ORM\Column(type="integer", nullable=true)
     */
    private $position;

    /**
     * @var double
     * @ORM\Column(type="float", nullable=true)
     */
    private $prix;

    /**
     * @var Choix
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Choix" ,inversedBy="plats")
     */
    private $choix;

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

    /**
     * @return Choix
     */
    public function getChoix()
    {
        return $this->choix;
    }

    /**
     * @param Choix $choix
     * @return Plat
     */
    public function setChoix($choix)
    {
        $this->choix = $choix;
        return $this;
    }

    public function __toString()
    {
        return $this->nom ?: 'Plat';
    }
}