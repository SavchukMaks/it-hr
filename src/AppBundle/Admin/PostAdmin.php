<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 01.02.18
 * Time: 11:38
 */

namespace AppBundle\Admin;


use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use AppBundle\Entity\Post;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;



class PostAdmin extends Admin
{

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('title', 'text',  array('required' => false));
        $formMapper->add('urlKey', 'textarea',array('required' => false));
        $formMapper->add('locale', 'textarea',  array('required' => false));
        $formMapper->add('templateId', 'choice', array( 'choices' => array_flip(Post::getTemplates())));
        $formMapper->add('description','text',  array('required' => false));
        $formMapper->add('keywords','text',  array('required' => false));
        $formMapper->add('post_short_text',CKEditorType::class,array('required' => false));
        $formMapper->add('post_text','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('post_title','textarea', array('attr' => ["class" => "ckeditor"],'required' => false));
        $formMapper->add('image','textarea',array('attr' => array('class' => 'ckeditor')));
        $formMapper->add('h1','textarea',array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('h2','textarea',array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('h3','textarea',array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('h4','textarea',array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('h5','textarea',array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('h6','textarea',array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('singleImage','textarea',array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('tags','textarea',array('attr' => array('class' => 'ckeditor'),'required' => false));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('title');
        $datagridMapper->add('urlKey');
        $datagridMapper->add('locale');
        $datagridMapper->add('templateId');
        $datagridMapper->add('description');
        $datagridMapper->add('keywords');
        $datagridMapper->add('post_short_text');
        $datagridMapper->add('post_text');
        $datagridMapper->add('post_title');
        $datagridMapper->add('image');
        $datagridMapper->add('h1');
        $datagridMapper->add('h2');
        $datagridMapper->add('h3');
        $datagridMapper->add('h4');
        $datagridMapper->add('h5');
        $datagridMapper->add('h6');
        $datagridMapper->add('singleImage');
        $datagridMapper->add('tags');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('id');
        $listMapper->add('title');
        $listMapper->add('urlKey');
        $listMapper->add('locale');
        $listMapper->add('templateId');
        $listMapper->add('description');
        $listMapper->add('keywords');
        $listMapper->add('post_short_text');
        $listMapper->add('post_text');
        $listMapper->add('post_title');
        $listMapper->add('image');
        $listMapper->add('h1');
        $listMapper->add('h2');
        $listMapper->add('h3');
        $listMapper->add('h4');
        $listMapper->add('h5');
        $listMapper->add('h6');
        $listMapper->add('singleImage');
        $listMapper->add('tags');
    }


}