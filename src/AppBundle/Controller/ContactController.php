<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends Controller
{
    /**
     * Matches /blog exactly
     *
     * @Route("/contact", name="contact")
     */
    public function show()
    {
        return $this->render('contact.html.twig');
    }
}
