<?php


namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;


/**
 * Class Plat
 * @package AppBundle\Entity
 * @ORM\Entity
 * @ORM\Table()
 */
class Categorie
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
     * @var int
     * @ORM\Column(type="integer")
     */
    private $position;

    /**
     * @var Plat[]
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Plat", mappedBy="categorie")
     */
    private $plats;

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
     * @return Categorie
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
     * @return Categorie
     */
    public function setCode($code)
    {
        $this->code = $code;
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
     * @return Categorie
     */
    public function setPosition($position)
    {
        $this->position = $position;
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
     * @return Categorie
     */
    public function setPlats($plats)
    {
        $this->plats = $plats;
        return $this;
    }
}