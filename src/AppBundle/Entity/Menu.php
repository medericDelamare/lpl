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
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Choix", mappedBy="menu", cascade={"remove"})
     */
    private $choix;

    /**
     * @var CategorieMenu
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\CategorieMenu", inversedBy="menus")
     * @ORM\JoinColumn(name="categorie_menu_id", referencedColumnName="id", nullable=true)
     */
    private $categorie;

    /**
     * @var integer
     * @ORM\Column(type="integer", nullable=false)
     */
    private $position;

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

    /**
     * @param Choix $choix
     * @return Menu
     */
    public function addChoix(Choix $choix){
        $this->choix[] = $choix;
        $choix->setMenu($this);
        return $this;
    }

    /**
     * @param Choix $choix
     * @return $this
     */
    public function removeChoix(Choix $choix){
        $this->choix->removeElement($choix);
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
     * @return Menu
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @return CategorieMenu
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param CategorieMenu $categorie
     * @return Menu
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
        return $this;
    }


}