<?php
/**
 * Created by PhpStorm.
 * User: benji
 * Date: 09/01/18
 * Time: 15:26
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BlogController extends Controller{

    public function indexAction(Request $request) {
        return $this->render('AppBundle:blog:home.html.twig', [

        ]);
    }

    public function articleAction(Request $request) {
        return $this->render('AppBundle:blog:article.html.twig', [

        ]);
    }
}