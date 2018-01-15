<?php
/**
 * Created by PhpStorm.
 * User: benji
 * Date: 09/01/18
 * Time: 16:44
 */

namespace AppBundle\Admin;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\CoreBundle\Form\Type\BooleanType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CommentAdmin extends AbstractAdmin {

    public function configureFormFields(\Sonata\AdminBundle\Form\FormMapper $form) {
        $form
            ->add('content', TextType::class)
            ->add("auteur", null, ["required" => true])
            ->add("article", null, ["required" => true])
            ->add('isValid', BooleanType::class);
    }

    public function configureDatagridFilters(\Sonata\AdminBundle\Datagrid\DatagridMapper $filter) {
        $filter
            ->add('auteur')
            ->add('content')
            ->add('creationDate');
    }

    public function configureListFields(\Sonata\AdminBundle\Datagrid\ListMapper $list) {
        $list

            ->add('content')
            ->add('auteur')
            ->add('article')
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