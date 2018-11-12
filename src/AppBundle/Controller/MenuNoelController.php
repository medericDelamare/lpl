<?php


namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class MenuNoelController extends Controller
{
    /**
     * @Route("/menus-noel", name="menus_noel")
     */
    public function showAction(){
        return $this->render('menu_noel_traiteur.html.twig');
    }
}