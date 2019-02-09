<?php

namespace App\Controller;

use App\Repository\ActuRepository;
use App\Repository\AstuceRepository;
use App\Repository\CategorieRepository;
use App\Repository\ContactRepository;
use App\Repository\PartenaireRepository;
use App\Repository\VideoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index(AstuceRepository $astuceRepository, ActuRepository $actuRepository , CategorieRepository $categorieRepository , VideoRepository $videoRepository , ContactRepository $contactRepository , PartenaireRepository $partenaireRepository)
    {
        return $this->render('default/index.html.twig', [
            'astuces' => $astuceRepository->findAll() ,
            'actus' => $actuRepository->findAll() ,
            'categories' => $categorieRepository->findAll() ,
            'videos' => $videoRepository->findAll(),
             'contacts' => $contactRepository->findAll(),
             'partenaires' => $partenaireRepository->findAll(),
        ]);
    }
    /**
     * @Route("/admin", name="admin")
     */
public function admin(){
    return $this->render('default/admin.html.twig') ;
}
}

