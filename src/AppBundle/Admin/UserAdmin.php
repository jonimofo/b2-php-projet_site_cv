<?php
/**
 * Created by PhpStorm.
 * User: benji
 * Date: 09/01/18
 * Time: 16:44
 */
namespace AppBundle\Admin;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Symfony\Component\Validator\Constraints as Assert;
use FOS\UserBundle\Model\UserManagerInterface;



class UserAdmin extends AbstractAdmin {
    public function configureFormFields(\Sonata\AdminBundle\Form\FormMapper $form) {
        $passwordoptions = array('type' => 'password',
            'required' => true,
            'invalid_message' => 'The password fields must match.',
            'options' => array('attr' => array('class' => 'password-field')),
            'first_options' => array('label' => 'Password'),
            'second_options' => array('label' => 'Confirm password'),
            'translation_domain' => 'FOSUserBundle'
        );
        $form
            ->add('prenom', TextType::class, ['label' => 'Prénom'])
            ->add('nom', TextType::class, ['label' => 'Nom'])
            ->add('username', TextType::class, ['label' => 'Pseudo'])
            ->add('email', EmailType::class, ['label' => 'Email'])
            ->add('password', 'repeated', $passwordoptions);
    }

    public function preUpdate($object) {
        $Password = $object->getPassword();
        if (!empty($Password)) {
            $salt = md5(time());
            $encoderservice = $this->getConfigurationPool()->getContainer()->get('security.encoder_factory');
            $encoder = $encoderservice->getEncoder($object);
            $encoded_pass = $encoder->encodePassword($object->getPassword(), $salt);
            $object->setSalt($salt);
            $object->setPassword($encoded_pass);
        }
    }

    public function prePersist($object) {
        $object->setEnabled(1);


        $Password = $object->getPassword();
        if (!empty($Password)) {
            $salt = md5(time());
            $encoderservice = $this->getConfigurationPool()->getContainer()->get('security.encoder_factory');
            $encoder = $encoderservice->getEncoder($object);
            $encoded_pass = $encoder->encodePassword($object->getPassword(), $salt);
            $object->setSalt($salt);
            $object->setPassword($encoded_pass);
        }
    }

    public function configureDatagridFilters(\Sonata\AdminBundle\Datagrid\DatagridMapper $filter) {
        $filter
            ->add('username')
            ->add('email');
    }

    public function configureListFields(\Sonata\AdminBundle\Datagrid\ListMapper $list) {
        $list
            ->add('username')
            ->add('email')
            ->add('role')
            ->add('_action', 'actions',
                [
                    'actions' => [
                        'edit' => [],
                        'delete' => []
                    ]
                ]);
    }
}