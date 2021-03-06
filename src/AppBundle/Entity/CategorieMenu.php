<?php


namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Menu
 * @package AppBundle\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategorieMenuRepository")
 * @ORM\Table()
 */
class CategorieMenu
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
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Menu", mappedBy="categorie")
     * @ORM\OrderBy({"position" = "ASC"})
     */
    private $menus;
    /**
     * @var integer
     * @ORM\Column(type="integer", nullable=false)
     */
    private $position;

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
     * @return CategorieMenu
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
     * @return CategorieMenu
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getMenus()
    {
        return $this->menus;
    }

    /**
     * @param ArrayCollection $menus
     * @return CategorieMenu
     */
    public function setMenus($menus)
    {
        $this->menus = $menus;
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
     * @return CategorieMenu
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    public function __toString()
    {
        return $this->getNom() ?: 'Catégorie';
    }
}