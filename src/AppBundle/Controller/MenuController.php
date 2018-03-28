<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Categorie;
use AppBundle\Entity\CategorieMenu;
use AppBundle\Entity\Menu;
use AppBundle\Entity\Plat;
use AppBundle\Entity\Vin\TypeVin;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MenuController extends Controller
{
    /**
     *
     * @Route("/menu", name="menu")
     */
    public function show()
    {
        /** @var Categorie[] $categories */
        $categories = $this->getDoctrine()->getRepository(CategorieMenu::class)->findAll();
        $typesVins = $this->getDoctrine()->getRepository(TypeVin::class)->findAll();
        return $this->render('menu.html.twig', [
            'categories' => $categories,
            'typesVins' => $typesVins
        ]);
    }
}