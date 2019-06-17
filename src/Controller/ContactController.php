<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index()
    {
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }
    /**
     * @Route("/pay", name="pay")
     */
    public function index2()
    {
        return $this->render('contact/index2.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }
    /**
     * @Route("/inscrire", name="register")
     */
    public function index3()
    {
        return $this->render('contact/index3.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }
    /**
     * @Route("/connect", name="connect")
     */
    public function index4()
    {
        return $this->render('contact/index4.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }
}
