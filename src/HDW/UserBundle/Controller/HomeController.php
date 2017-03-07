<?php

namespace HDW\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
  public function indexAction()
  {
    $content = $this
      ->get('templating')
      ->render('HDWUserBundle:Home:index.html.twig', array('nom' => 'Hugo'))
    ;
    return new Response($content);
  }
}