<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Intro;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Formation;
use AppBundle\Entity\Competence;
use AppBundle\Entity\Experience;

class CvController extends Controller
{

    public function indexAction(Request $request) {
        $doctrine = $this->getDoctrine();
        $personnal_infos = $doctrine->getRepository(Intro::class);
        $infos = $personnal_infos->findOneBy([]);
        return $this->render('AppBundle:cv:home.html.twig', [
            "infos" => $infos
        ]);
    }

    public function competencesAction(Request $request) {
        $doctrine = $this->getDoctrine();
        $competences_infos = $doctrine->getRepository(Competence::class);
        $competences = $competences_infos->findAll();
        return $this->render('AppBundle:cv:competences.html.twig', [
            "competences" => $competences
        ]);
    }

    public function experiencesAction(Request $request) {
        $doctrine = $this->getDoctrine();
        $experiences_infos = $doctrine->getRepository(Experience::class);
        $experiences = $experiences_infos->findAll();
        return $this->render('AppBundle:cv:experiences.html.twig', [
            "experiences" => $experiences
        ]);
    }

    public function formationAction(Request $request) {
        $doctrine = $this->getDoctrine();
        $formation_infos = $doctrine->getRepository(Formation::class);
        $formations = $formation_infos->findAll();
        return $this->render('AppBundle:cv:formation.html.twig', [
            "formations" => $formations
        ]);
    }

    public function realisationsAction(Request $request) {
        return $this->render('AppBundle:cv:realisations.html.twig', [

        ]);
    }

}
