<?php

namespace TennisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use TennisBundle\Entity\User;
use TennisBundle\Repository\UserRepository;


class DefaultController extends Controller
{
    /**
     * @Route("/profile", name="kjj")
     */
    public function indexAction()
    {
        return $this->render('@FOSUser/Profile/show_content.html.twig');
    }
    /**
     * @Route("/gprofil", name="gprofil")
     */
    public function gprofilAction()
    {
        return $this->render('@FOSUser/Group/show_content.html.twig');
    }
    /**
     * @Route("/", name="matches")
     */
    public function matchesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $fosuser = $em->getRepository('TennisBundle:User')->findAll();
        return $this->render('@FOSUser/Profile/list_users.html.twig', array(
            'listuser' => $fosuser
        ));
    }
    /**
     * @Route("/matches/{id}/user", name="showuser")
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('TennisBundle:User')->findOneById($id);
        return $this->render('@FOSUser/Profile/users.html.twig', array(
            'user' => $user
        ));
    }
    /**
     * @Route("/register", name="register")
     */
    public function registerAction()
    {
        return $this->render('@FOSUser/Registration/register_content.html.twig');
    }

    /**
     * @Route("/review", name="review")
     */
    public function reviewAction()
    {
        return $this->render('@Tennis/Default/review.html.twig');
    }

}
