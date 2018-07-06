<?php
/**
 * Created by cybernet
 * Date: 7/6/2018
 * Time: 9:48 AM
 * xDNS.ro & PoSTLiST.ro & SAiLoRPub.co.uk & Sailor.pub
 * puff
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PuffController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * https://getbootstrap.com/docs/4.1/components/card/
     */
    public function Home()
    {
        return $this->render('home.html.twig');
    }
}