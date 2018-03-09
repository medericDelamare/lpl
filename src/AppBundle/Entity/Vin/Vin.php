<?php


namespace AppBundle\Entity\Vin;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class TypeVin
 * @package AppBundle\Entity\Vin
 * @ORM\Entity
 * @ORM\Table()
 */
class Vin
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=false)
     */
    private $nom;

    /**
     * @var int
     * @ORM\Column(type="integer", nullable=false)
     */
    private $position;

    /**
     * @var float
     * @ORM\Column(type="float",nullable=true)
     */
    private $prix1;

    /**
     * @var float
     * @ORM\Column(type="float", nullable=true)
     */
    private $prix2;

    /**
     * @var TypeVin
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Vin\TypeVin", inversedBy="vins")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id", nullable=true)
     */
    private $type;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $affiche;

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
     * @return Vin
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
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
     * @return Vin
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrix1()
    {
        return $this->prix1;
    }

    /**
     * @param float $prix1
     * @return Vin
     */
    public function setPrix1($prix1)
    {
        $this->prix1 = $prix1;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrix2()
    {
        return $this->prix2;
    }

    /**
     * @param float $prix2
     * @return Vin
     */
    public function setPrix2($prix2)
    {
        $this->prix2 = $prix2;
        return $this;
    }

    /**
     * @return TypeVin
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param TypeVin $type
     * @return Vin
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAffiche()
    {
        return $this->affiche;
    }

    /**
     * @param bool $affiche
     * @return Vin
     */
    public function setAffiche($affiche)
    {
        $this->affiche = $affiche;
        return $this;
    }
}