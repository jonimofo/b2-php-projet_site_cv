<?php
/**
 * Created by PhpStorm.
 * User: benji
 * Date: 09/01/18
 * Time: 15:26
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Comment;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Article;

class BlogController extends Controller{

    public function indexAction(Request $request) {
        $doctrine = $this->getDoctrine();
        $articles_list = $doctrine->getRepository(Article::class);
        $articles = $articles_list->sortByNewestFirst();
        return $this->render('AppBundle:blog:home.html.twig', [
            "articles" => $articles
        ]);
    }

    public function articleAction(Request $request, $id) {
        $doctrine = $this->getDoctrine();
        $article_repo = $doctrine->getRepository(Article::class);
        $article = $article_repo->find($id);

        $comment_repo = $doctrine->getRepository(Comment::class);
        $commentaires = $comment_repo->getValidComments($article);

        $token=$this->get('security.token_storage')->getToken();
        $user=$token->getUser();

        $commentaire = new Comment();
        $form = $this->createFormBuilder()
            ->add('content', TextareaType::class, ['required'=>true,
                'attr'=> ['placeholder' => 'Ajoutez un commentaire', 'rows' => 3, 'cols' => 130]])->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $commentaire->setContent($form->getData()['content']);
            $commentaire->setArticle($article);
            $commentaire->setAuteur($user);
            $em=$doctrine->getManager();
            $em->persist($commentaire);
            $em->flush();
            $this->addFlash('success', 'Votre commentaire a bien été envoyé et doit être soumis à validation
            avant d\'être posté');
            return $this->redirect($request->getUri());
        }

        return $this->render('AppBundle:blog:article.html.twig', [
            "article" => $article,
            "commentaires" => $commentaires,
            "form" => $form->createView()
        ]);
    }
}

