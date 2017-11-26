<?php

namespace CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SmsController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('CoreBundle:Sms:index.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/send")
     */
    public function sendAction()
    {
        return $this->render('CoreBundle:Sms:send.html.twig', array(
            // ...
        ));
    }

}
