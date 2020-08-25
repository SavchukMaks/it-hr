<?php
/**
 * Created by PhpStorm.
 * User: leonid
 * Date: 26.12.2017
 * Time: 17:39
 */

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use AppBundle\Entity\Page;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;


class PageAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('title', 'text',  array('required' => false));
        $formMapper->add('urlKey', 'textarea');
        $formMapper->add('locale', 'textarea',  array('required' => false));
        $formMapper->add('templateId', 'choice', array( 'choices' => array_flip(Page::getTemplates())));
        $formMapper->add('description','text',  array('required' => false));
        $formMapper->add('keywords','text',  array('required' => false));
        $formMapper->add('block1',CKEditorType::class,array('required' => false));
        $formMapper->add('block2','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block3','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block4','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block5','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block6','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block7','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block8','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block9','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block10','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block11','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block12','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block13','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block14','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block15','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block16','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block17','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block18','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block19','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block20','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block21','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block22','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block23','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block24','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block25','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block26','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block27','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block28','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block29','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block30','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block31','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block32','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block33','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block34','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block35','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block36','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block37','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block38','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block39','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block40','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block41','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block42','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block43','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block44','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
        $formMapper->add('block45','textarea', array('attr' => array('class' => 'ckeditor'),'required' => false));
    }


    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('title');
        $datagridMapper->add('urlKey');
        $datagridMapper->add('locale');
        $datagridMapper->add('templateId');
        $datagridMapper->add('description');
        $datagridMapper->add('keywords');
        $datagridMapper->add('block1');
        $datagridMapper->add('block2');
        $datagridMapper->add('block3');
        $datagridMapper->add('block4');
        $datagridMapper->add('block5');
        $datagridMapper->add('block6');
        $datagridMapper->add('block7');
        $datagridMapper->add('block8');
        $datagridMapper->add('block9');
        $datagridMapper->add('block10');
        $datagridMapper->add('block11');
        $datagridMapper->add('block12');
        $datagridMapper->add('block13');
        $datagridMapper->add('block14');
        $datagridMapper->add('block15');
        $datagridMapper->add('block16');
        $datagridMapper->add('block17');
        $datagridMapper->add('block18');
        $datagridMapper->add('block19');
        $datagridMapper->add('block20');
        $datagridMapper->add('block21');
        $datagridMapper->add('block22');
        $datagridMapper->add('block23');
        $datagridMapper->add('block24');
        $datagridMapper->add('block25');
        $datagridMapper->add('block26');
        $datagridMapper->add('block27');
        $datagridMapper->add('block28');
        $datagridMapper->add('block29');
        $datagridMapper->add('block30');
        $datagridMapper->add('block31');
        $datagridMapper->add('block32');
        $datagridMapper->add('block33');
        $datagridMapper->add('block34');
        $datagridMapper->add('block35');
        $datagridMapper->add('block36');
        $datagridMapper->add('block37');
        $datagridMapper->add('block38');
        $datagridMapper->add('block39');
        $datagridMapper->add('block40');
        $datagridMapper->add('block41');
        $datagridMapper->add('block42');
        $datagridMapper->add('block43');
        $datagridMapper->add('block44');
        $datagridMapper->add('block45');
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
        $listMapper->add('block1');
        $listMapper->add('block2');
        $listMapper->add('block3');
        $listMapper->add('block4');
        $listMapper->add('block5');
        $listMapper->add('block6');
        $listMapper->add('block7');
        $listMapper->add('block8');
        $listMapper->add('block9');
        $listMapper->add('block10');
        $listMapper->add('block11');
        $listMapper->add('block12');
        $listMapper->add('block13');
        $listMapper->add('block14');
        $listMapper->add('block15');
        $listMapper->add('block16');
        $listMapper->add('block17');
        $listMapper->add('block18');
        $listMapper->add('block19');
        $listMapper->add('block20');
        $listMapper->add('block21');
        $listMapper->add('block22');
        $listMapper->add('block23');
        $listMapper->add('block24');
        $listMapper->add('block25');
        $listMapper->add('block26');
        $listMapper->add('block27');
        $listMapper->add('block28');
        $listMapper->add('block29');
        $listMapper->add('block30');
        $listMapper->add('block31');
        $listMapper->add('block32');
        $listMapper->add('block33');
        $listMapper->add('block34');
        $listMapper->add('block35');
        $listMapper->add('block36');
        $listMapper->add('block37');
        $listMapper->add('block38');
        $listMapper->add('block39');
        $listMapper->add('block40');
        $listMapper->add('block41');
        $listMapper->add('block42');
        $listMapper->add('block43');
        $listMapper->add('block44');
        $listMapper->add('block45');

    }


}