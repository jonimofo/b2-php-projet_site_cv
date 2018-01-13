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

class IntroAdmin extends AbstractAdmin {
    public function configureFormFields(\Sonata\AdminBundle\Form\FormMapper $form) {
        $form
            ->add('phraseIntro', TextType::class)
            ->add('aboutMe', TextType::class);
    }

    public function configureDatagridFilters(\Sonata\AdminBundle\Datagrid\DatagridMapper $filter) {

    }

    public function configureListFields(\Sonata\AdminBundle\Datagrid\ListMapper $list) {
        $list
            ->add('phraseIntro')
            ->add('aboutMe')
            ->add('_action', 'actions',
                [
                    'actions' => [
                        'edit' => [],
                        'delete' => []
                    ]
                ]);
    }
}