<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Choix
 * @package AppBundle\Entity
 * @ORM\Entity
 * @ORM\Table()
 */
class Choix
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
     * @var Plat[]
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Plat", mappedBy="choix", cascade={"remove"})
     */
    private $plats;

    /**
     * @var Menu
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Menu", inversedBy="choix")
     */
    private $menu;

    public function __construct()
    {
        $this->plats = new ArrayCollection();
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
     * @return Choix
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
     * @return Choix
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return Plat[]
     */
    public function getPlats()
    {
        return $this->plats;
    }

    /**
     * @param Plat[] $plats
     * @return Choix
     */
    public function setPlats($plats)
    {
        $this->plats = $plats;
        return $this;
    }

    public function addPlat(Plat $plat){
        if (!$this->plats->contains($plat)){
            $this->plats->add($plat);
            $plat->setChoix($this);
        }
        return $this;
    }

    public function removePlat(Plat $plat){
        if ($this->plats->contains($plat)){
            $this->plats->remove($plat);
        }
        return $this;
    }

    /**
     * @return Menu
     */
    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * @param Menu $menu
     * @return Choix
     */
    public function setMenu($menu)
    {
        $this->menu = $menu;
        return $this;
    }

    public function __toString()
    {
        return $this->getNom()?: 'Choix';
    }
}