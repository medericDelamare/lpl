<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Menu
 * @package AppBundle\Entity
 * @ORM\Entity
 * @ORM\Table()
 */
class Menu
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
     * @var double
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @var Choix[]
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Choix", mappedBy="menu")
     */
    private $choix;

    public function __construct()
    {
        $this->choix = new ArrayCollection();
    }

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
     * @return Menu
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
     * @return Menu
     */
    public function setCode($code)
    {
        $this->code = $code;
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
     * @return Menu
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
        return $this;
    }

    /**
     * @return Choix[]
     */
    public function getChoix()
    {
        return $this->choix;
    }

    /**
     * @param Choix[] $choix
     * @return Menu
     */
    public function setChoix($choix)
    {
        $this->choix = $choix;
        return $this;
    }
}