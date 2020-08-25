<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\Post;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;


class PostController extends Controller
{

    /**
     * @Route("/{_locale}/blog", defaults={"_locale"="ru"}, requirements={
     *     "_locale"="ru|en|ua"
     * })
     */

        public function listAction(Request $request){


        $em = $this->getDoctrine()->getManager();
        $dataPage = $em->getRepository('AppBundle:Post')->findAll();

        /**
        *
        * @var $paginator \Knp\Component\Pager\Paginator
        *
        */
        $paginator = $this->get('knp_paginator');

        $result = $paginator->paginate(
                $dataPage,
                $request->query->getInt('page', 1)/*page number*/,
                3/*limit per page*/
        );

            return $this->render('blog.html.twig',array(
                'pagination' => $result
            ));
         }


        /**
         * @Route("/{_locale}/post/{id}")
         *
         *
         */
        public function showAction($id){

        $em = $this->getDoctrine()->getManager();
        $blog = $em->getRepository('AppBundle:Post')->find($id);


        if (!$blog) {
            throw $this->createNotFoundException('Пост не найден');
        }

            return $this->render('blog-single.html.twig', array(
                'blog' => $blog
            ));

        }

}

