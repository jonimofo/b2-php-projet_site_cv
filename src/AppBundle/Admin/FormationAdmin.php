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

class FormationAdmin extends AbstractAdmin {

    public function configureFormFields(\Sonata\AdminBundle\Form\FormMapper $form) {
        $form
            ->add('title', TextType::class)
            ->add('content', TextType::class)
            ->add('yearStart', TextType::class)
            ->add('yearEnd', TextType::class);
    }

    public function configureDatagridFilters(\Sonata\AdminBundle\Datagrid\DatagridMapper $filter) {
        $filter
            ->add('title')
            ->add('content');
    }

    public function configureListFields(\Sonata\AdminBundle\Datagrid\ListMapper $list) {
        $list
            ->add('title')
            ->add('content')
            ->add('yearStart')
            ->add('yearEnd')
            ->add('_action', 'actions',
                [
                    'actions' => [
                        'edit' => [],
                        'delete' => []
                    ]
                ]);
    }
}