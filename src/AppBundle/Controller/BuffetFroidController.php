<?php
/**
 * Created by PhpStorm.
 * User: delamare
 * Date: 11/04/2018
 * Time: 21:31
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class BuffetFroidController extends Controller
{
    /**
     * @Route("/buffet-froid", name="buffet_froid")
     */
    public function showAction(){
        return $this->render('buffet_froid.html.twig');
    }
}