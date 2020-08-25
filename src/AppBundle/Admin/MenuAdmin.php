<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 18.01.18
 * Time: 12:33
 */

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class MenuAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('title', 'text',  array('required' => false));
        $formMapper->add('urlKey', 'textarea');
        $formMapper->add('locale', 'textarea',  array('required' => false));
        $formMapper->add('altTag', 'textarea',  array('required' => false));
        $formMapper->add('sortOrder', 'textarea',  array('required' => false));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('title');
        $datagridMapper->add('urlKey');
        $datagridMapper->add('locale');
        $datagridMapper->add('altTag');
        $datagridMapper->add('sortOrder');
    }


    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('id');
        $listMapper->add('title');
        $listMapper->add('urlKey');
        $listMapper->add('locale');
        $listMapper->add('altTag');
        $listMapper->add('sortOrder');
    }


}