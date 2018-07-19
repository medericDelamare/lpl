<?php


namespace AppBundle\Controller;


use AppBundle\Entity\Vin\TypeVin;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CarteVinsController extends Controller
{
    /**
     *
     * @Route("/carte-vins", name="carte-vins")
     */
    public function show()
    {
        $typesVins = $this->getDoctrine()->getRepository(TypeVin::class)->findAll();
        return $this->render('carte-vins.html.twig', [
            'typesVins' => $typesVins
        ]);
    }
}