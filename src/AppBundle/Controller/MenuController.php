<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Categorie;
use AppBundle\Entity\Menu;
use AppBundle\Entity\Plat;
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
        $categories = $this->getDoctrine()->getRepository(Categorie::class)->findAll();
        $menus = $this->getDoctrine()->getRepository(Menu::class)->findAll();
        return $this->render('menu.html.twig', [
            'categories' => $categories,
            'menus' => $menus
        ]);
    }
}