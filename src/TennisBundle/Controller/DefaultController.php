<?php

namespace TennisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use TennisBundle\Entity\User;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="kjj")
     */
    public function indexAction()
    {
        return $this->render('TennisBundle:Default:index.html.twig');
    }
    /**
     * @Route("/gprofil", name="gprofil")
     */
    public function gprofilAction()
    {
        return $this->render('TennisBundle:Default:general_profil.html.twig');
    }
    /**
     * @Route("/matches", name="matches")
     */
    public function matchesAction()
    {
        return $this->render('TennisBundle:Default:matches.html.twig');
    }
}
