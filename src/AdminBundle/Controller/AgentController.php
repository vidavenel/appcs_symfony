<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AgentController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('AdminBundle:Agent:index.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/add")
     */
    public function addAction()
    {
        return $this->render('AdminBundle:Agent:add.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/edit")
     */
    public function editAction()
    {
        return $this->render('AdminBundle:Agent:edit.html.twig', array(
            // ...
        ));
    }

}
