<?php


namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class MenuSaintValentinController extends Controller
{
    /**
     * @Route("/menu-saint-valentin", name="menu_saint_valentin")
     */
    public function showAction(){
        return $this->render('menu_st_valentin.html.twig');
    }
}