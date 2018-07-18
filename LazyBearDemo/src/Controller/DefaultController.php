<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use App\Entity\Films;
use App\Repository\FilmsRepository;

use App\Entity\Marathons;
use App\Repository\MarathonsRepository;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="default")
     * @Template()
     */
    public function index(FilmsRepository $FilmsRepository, MarathonsRepository $MarathonsRepository)
    {
        $listeFilms = $FilmsRepository->findAll();
        $listeMarathons = $MarathonsRepository->findAll();
        
        return $this->render('index.html.twig', array(
            'listeFilms' => $listeFilms,
            'listeMarathons' => $listeMarathons
        ));
    }

    /**
     * @Route("/testStep1", name="testStep1")
     * @Template()
     */
    public function testStep1(FilmsRepository $FilmsRepository)
    {
        $listeFilms = $FilmsRepository->findAll();
        
        return $this->render('profil/testStep1.html.twig', array(
            'listeFilms' => $listeFilms
        ));
    }

    /**
     * @Route("/testStep2", name="testStep2")
     * @Template()
     */
    public function testStep2(FilmsRepository $FilmsRepository)
    {
        $listeFilms = $FilmsRepository->findAll();
        
        return $this->render('profil/testStep2.html.twig', array(
            'listeFilms' => $listeFilms
        ));
    }

    /**
     * @Route("/profil", name="profil")
     * @Template()
     * @Method({"GET", "POST"})
     */
    public function profil(FilmsRepository $FilmsRepository)
    {
        $listeFilms = $FilmsRepository->findAll();
        
        return $this->render('profil/profil.html.twig', array(
            'listeFilms' => $listeFilms
        ));
    }

    /**
     * @Route("/modificationFicheMarathon", name="modificationFicheMarathon")
     * @Template()
     */
    public function modificationFicheMarathon(FilmsRepository $FilmsRepository)
    {
        $listeFilms = $FilmsRepository->findAll();
        
        return $this->render('marathons/modificationFicheMarathon.html.twig', array(
            'listeFilms' => $listeFilms
        ));
    }

    /**
     * @Route("/searchMarathonNoRes", name="searchMarathonNoRes")
     * @Template()
     */
    public function searchMarathonNoRes(FilmsRepository $FilmsRepository)
    {
        $listeFilms = $FilmsRepository->findAll();
        
        return $this->render('marathons/searchMaraNoResult.html.twig', array(
            'listeFilms' => $listeFilms
        ));
    }

    /**
     * @Route("/searchMarathon", name="searchMarathon")
     * @Template()
     */
    public function searchMarathon(FilmsRepository $FilmsRepository)
    {
        $listeFilms = $FilmsRepository->findAll();
        
        return $this->render('marathons/searchMarathon.html.twig', array(
            'listeFilms' => $listeFilms
        ));
    }

    /**
     * @Route("/mesMarathons", name="mesMarathons")
     * @Template()
     */
    public function mesMarathons(FilmsRepository $FilmsRepository)
    {
        $listeFilms = $FilmsRepository->findAll();
        
        return $this->render('marathons/mesMarathons.html.twig', array(
            'listeFilms' => $listeFilms
        ));
    }

    /**
     * @Route("/marathons", name="marathons")
     * @Template()
     */
    public function marathons(FilmsRepository $FilmsRepository)
    {
        $listeFilms = $FilmsRepository->findAll();
        
        return $this->render('marathons/marathons.html.twig', array(
            'listeFilms' => $listeFilms
        ));
    }

    /**
     * @Route("/ficheMarathon", name="ficheMarathon")
     * @Template()
     */
    public function ficheMarathon(FilmsRepository $FilmsRepository)
    {
        $listeFilms = $FilmsRepository->findAll();
        
        return $this->render('marathons/ficheMarathon.html.twig', array(
            'listeFilms' => $listeFilms
        ));
    }

    /**
     * @Route("/createMarathon", name="createMarathon")
     * @Template()
     */
    public function createMarathon(FilmsRepository $FilmsRepository)
    {
        $listeFilms = $FilmsRepository->findAll();
        
        return $this->render('marathons/creationMarathon.html.twig', array(
            'listeFilms' => $listeFilms
        ));
    }

    /**
     * @Route("/marathonParameters", name="marathonParam")
     * @Template()
     */
    public function marathonParam(FilmsRepository $FilmsRepository)
    {
        $listeFilms = $FilmsRepository->findAll();
        
        return $this->render('marathons/marathonParameters.html.twig', array(
            'listeFilms' => $listeFilms
        ));
    }

    /**
     * @Route("/profilParameters", name="profilParam")
     * @Template()
     */
    public function profilParam(FilmsRepository $FilmsRepository)
    {
        $listeFilms = $FilmsRepository->findAll();
        
        return $this->render('profil/profilParameters.html.twig', array(
            'listeFilms' => $listeFilms
        ));
    }

    /**
     * @Route("/createMarathonStep1", name="createMarathonStep1")
     * @Template()
     */
    public function createMarathonStep1(FilmsRepository $FilmsRepository)
    {
        $listeFilms = $FilmsRepository->findAll();
        
        return $this->render('marathons/creationMarathonStep1.html.twig', array(
            'listeFilms' => $listeFilms
        ));
    }

    /**
     * @Route("/createMarathonStep2", name="createMarathonStep2")
     * @Template()
     */
    public function createMarathonStep2(FilmsRepository $FilmsRepository)
    {
        $listeFilms = $FilmsRepository->findAll();
        
        return $this->render('marathons/creationMarathonStep2.html.twig', array(
            'listeFilms' => $listeFilms
        ));
    }

    /**
     * @Route("/createMarathonStep3", name="createMarathonStep3")
     * @Template()
     */
    public function createMarathonStep3(FilmsRepository $FilmsRepository)
    {
        $listeFilms = $FilmsRepository->findAll();
        
        return $this->render('marathons/creationMarathonStep3.html.twig', array(
            'listeFilms' => $listeFilms
        ));
    }

    /**
     * @Route("/createMarathonStep4", name="createMarathonStep4")
     * @Template()
     */
    public function createMarathonStep4(FilmsRepository $FilmsRepository)
    {
        $listeFilms = $FilmsRepository->findAll();
        
        return $this->render('marathons/creationMarathonStep4.html.twig', array(
            'listeFilms' => $listeFilms
        ));
    }

    /**
     * @Route("/menu", name="menu")
     * @Template()
     */
    public function menu()
    {     
        return $this->render('menu.html.twig', array());
    }
}
