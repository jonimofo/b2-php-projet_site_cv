<?php
/**
 * Created by PhpStorm.
 * User: benji
 * Date: 09/01/18
 * Time: 16:44
 */
namespace AppBundle\Admin;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CompetenceAdmin extends AbstractAdmin {

    public function configureFormFields(\Sonata\AdminBundle\Form\FormMapper $form) {
        $form
            ->add('title', TextType::class)
            ->add('imageFile', 'file');
    }

    public function configureDatagridFilters(\Sonata\AdminBundle\Datagrid\DatagridMapper $filter) {

    }

    public function configureListFields(\Sonata\AdminBundle\Datagrid\ListMapper $list) {
        $list
            ->add('title');
    }
}