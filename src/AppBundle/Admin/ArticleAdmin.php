<?php

namespace AppBundle\Admin;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ArticleAdmin extends AbstractAdmin {

    public function configureFormFields(\Sonata\AdminBundle\Form\FormMapper $form) {
        $form
            ->add('title', TextType::class)
            ->add('introduction', TextType::class)
            ->add('content', TextType::class)
            ->add("user", null, ["required" => true]);
    }

    public function configureDatagridFilters(\Sonata\AdminBundle\Datagrid\DatagridMapper $filter) {
        $filter
            ->add('title')
            ->add('content')
            ->add('introduction');
    }

    public function configureListFields(\Sonata\AdminBundle\Datagrid\ListMapper $list) {
        $list
            ->add('title')
            ->add('content')
            ->add('creationDate')
            ->add('modificationDate')
            ->add('_action', 'actions',
                [
                    'actions' => [
                        'edit' => [],
                        'delete' => []
                    ]
                ]);
    }
}