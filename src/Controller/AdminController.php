<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    
    /**
     * @Route("/admin/addpost", name="addpost")
     */
    public function addpost(): Response
    {
        return $this->render('admin/addpost.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    
}
