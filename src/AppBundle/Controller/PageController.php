<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Page;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class PageController extends Controller
{
    /**
     *
     *
     * @Route("/{_locale}/{urlKey}", defaults={"_locale"="ru","urlKey"="home"}, requirements={
     *     "_locale"="%app.locales%"
     * })
     */

    public function viewAction(Request $request, EntityManagerInterface $em)
    {
        $locale = $request->get('_locale');
        $urlKey = $request->get('urlKey');

        $dataPage = $em->getRepository('AppBundle:Page')->findOneBy(['locale'=> $locale,'urlKey'=> $urlKey ]);

        $template = ($dataPage) ? $dataPage->getTemplatePath() : 'page-404.html.twig';

        return $this->render($template,[
            'page' => $dataPage,
        ]);
    }


}
