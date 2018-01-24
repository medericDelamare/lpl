<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class AProposController extends Controller
{
    /**
     * Matches /blog exactly
     *
     * @Route("/propos", name="a-propos")
     */
    public function show()
    {
        return $this->render('');
    }
}