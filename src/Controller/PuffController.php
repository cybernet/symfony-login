<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PuffController extends Controller
{
    /**
     * @Route("/", name="puff")
     */
    public function index()
    {
        return $this->render('puff/index.html.twig', [
            'controller_name' => 'PuffController',
        ]);
    }
}