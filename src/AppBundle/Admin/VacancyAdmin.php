<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 28.02.18
 * Time: 15:27
 */

namespace AppBundle\Admin;


use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use AppBundle\Entity\Vacancy;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;



class VacancyAdmin extends Admin
{

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('title', 'text',  array('required' => false));
        $formMapper->add('urlKey', 'textarea',array('required' => false));
        $formMapper->add('locale', 'textarea',  array('required' => false));
        $formMapper->add('description','text',  array('required' => false));
        $formMapper->add('keywords','text',  array('required' => false));
        $formMapper->add('vacancy_short_text',CKEditorType::class,array('required' => false));
        $formMapper->add('vacancy_text','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('vacancy_title','textarea', array('attr' => ["class" => "ckeditor"],'required' => false));
        $formMapper->add('image',CKEditorType::class,array('required' => false));
        $formMapper->add('h1','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('h3','textarea', array('attr' => ["class" => "ckeditor"],'required' => false));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('title');
        $datagridMapper->add('urlKey');
        $datagridMapper->add('locale');
        $datagridMapper->add('description');
        $datagridMapper->add('keywords');
        $datagridMapper->add('vacancy_short_text');
        $datagridMapper->add('vacancy_text');
        $datagridMapper->add('vacancy_title');
        $datagridMapper->add('image');
        $datagridMapper->add('h1');
        $datagridMapper->add('h3');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('id');
        $listMapper->add('title');
        $listMapper->add('urlKey');
        $listMapper->add('locale');
        $listMapper->add('description');
        $listMapper->add('keywords');
        $listMapper->add('vacancy_short_text');
        $listMapper->add('vacancy_text');
        $listMapper->add('vacancy_title');
        $listMapper->add('image');
        $listMapper->add('h1');
        $listMapper->add('h3');
    }


}