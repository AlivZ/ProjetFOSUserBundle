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
        ->setSubject('DONT LET BE DREAMS, BE DREAMS')
        ->setFrom('a@a.a')
        ->setTo('hugodwiutinfo@gmail.com')
        ->setBody('JUST DO IT !');

    $this->get('mailer')->send($message);

    return $this->render('TOPMainBundle:Main:sent.html.twig');
    }

    /*public function testAction()
    {
        $cassandra = $this->get('m6web_cassandra.client.myclient');

        $prepared = $cassandra->prepare("INSERT INTO test (id, title) VALUES(?, ?)");

        $batch     = new Cassandra\BatchStatement(Cassandra::BATCH_LOGGED);
        $batch->add($prepared, ['id' => 1, 'title' => 'my title']);
        $batch->add($prepared, ['id' => 2, 'title' => 'my title 2']);

        $cassandra->execute($batch);

        $statement = new Cassandra\SimpleStatement('SELECT * FROM test');
        $result = $cassandra->execute($statement);

        foreach ($result as $row) {
            // do something with $row
        }

        $statement = new Cassandra\SimpleStatement('SELECT * FROM test');
        $result = $cassandra->executeAsync($statement);

        return $this->render('TOPMainBundle:Main:test.html.twig');
    }*/
}
