<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Menu;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class MenuController extends Controller
{

    public function viewMenuAction(Request $request)
    {
        $locale = $request->get('_locale');

        $em = $this->getDoctrine()->getManager();

        $menu = $em->getRepository('AppBundle:Menu')->findBy(['locale'=> $locale],['sortOrder' => 'ASC']);

        return $this->render('menu.html.twig', array(
            'menus' => $menu,
        ));
    }
}
