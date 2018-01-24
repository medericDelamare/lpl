<?php

namespace AppBundle\Controller;

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
        return $this->render('menu.html.twig');
    }
}