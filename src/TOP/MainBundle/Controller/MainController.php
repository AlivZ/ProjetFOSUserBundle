<?php

// src/TOP/MainBundle/Controller/MainController.php - Test Controller

namespace TOP\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('TOPMainBundle:Main:index.html.twig');
    }

    public function rightAction()
    {	
    	if (!$this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
      		throw new AccessDeniedException('Accès Administrateur.');
    	}
        return $this->render('TOPMainBundle:Main:right.html.twig');
    }

    /**
    * @Security("has_role('ROLE_ADMIN')")
    */
    public function leftAction()
    {
        return $this->render('TOPMainBundle:Main:left.html.twig');
    }

    public function sendEmailAction()
    {
    	$message = \Swift_Message::newInstance()
        ->setSubject('Hello Email')
        ->setFrom('send@example.com')
        ->setTo('recipient@example.com')
        ->setBody('Hi Joe !');

    $this->get('mailer')->send($message);

    return $this->render('TOPMainBundle:Main:sent.html.twig');
    }
}
