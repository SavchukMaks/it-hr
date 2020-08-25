<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 28.02.18
 * Time: 15:51
 */

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\Vacancy;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;


class VacancyController extends Controller
{
    /**
     * @Route("/{_locale}/vacancies", defaults={"_locale"="ru"}, requirements={
     *     "_locale"="ru|en|ua"
     * })
     */

    public function listAction(Request $request){


        $em = $this->getDoctrine()->getManager();
        $dataPage = $em->getRepository('AppBundle:Vacancy')->findAll();

        /**
         *
         * @var $paginator \Knp\Component\Pager\Paginator
         *
         */
        $paginator = $this->get('knp_paginator');

        $result = $paginator->paginate(
            $dataPage,
            $request->query->getInt('page', 1)/*page number*/,
            5/*limit per page*/
        );

        return $this->render('page-careers.html.twig',array(
            'pagination' => $result
        ));
    }


    /**
     * @Route("/{_locale}/vacancy/{id}")
     *
     *
     */
    public function showAction($id){

        $em = $this->getDoctrine()->getManager();
        $vacancy = $em->getRepository('AppBundle:Vacancy')->find($id);


        if (!$vacancy) {
            throw $this->createNotFoundException('Вакансия не найдена');
        }

        return $this->render('vacancy-single.html.twig', array(
            'vacancy' => $vacancy
        ));

    }

}