<?php

namespace AppBundle\Controller;

use AppBundle\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends Controller
{
    /**
     * Matches /blog exactly
     *
     * @Route("/contact", name="contact")
     */
    public function show(Request $request, \Swift_Mailer $mailer)
    {
        // Create the form according to the FormType created previously.
        // And give the proper parameters
        $form = $this->createForm(ContactType::class,null,array(
            // To set the action use $this->generateUrl('route_identifier')
            'action' => $this->generateUrl('contact'),
            'method' => 'POST'
        ));

        if ($request->isMethod('POST')) {
            // Refill the fields in case the form is not valid.
            $form->handleRequest($request);

            if($form->isValid()){
                // Send mail
                if($this->sendEmail($form->getData(), $mailer)){
                    // Everything OK, redirect to wherever you want ! :

                    return $this->redirectToRoute('index');
                }else{
                    // An error ocurred, handle
                    var_dump("Errooooor :(");
                }
            }
        }

        return $this->render('contact.html.twig', array(
            'form' => $form->createView()
        ));
    }

    private function sendEmail($data, \Swift_Mailer $mailer){
        $myappContactMail = 'mederic.delamare@trsb.net';
        $myappContactPassword = null;
        $transport = \Swift_SmtpTransport::newInstance('localhost', 1025,null);

        $mailer = \Swift_Mailer::newInstance($transport);

        $message = \Swift_Message::newInstance($data["subject"])
            ->setFrom($data['email'])
            ->setTo(array(
                $myappContactMail => $myappContactMail
            ))
            ->setBody($data['message']);

        return $mailer->send($message);
    }
}
