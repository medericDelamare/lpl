<?php

namespace AppBundle\Controller;

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
        $plats = $this->getDoctrine()->getRepository(Plat::class)->findAll();
        return $this->render('menu.html.twig');
    }
}