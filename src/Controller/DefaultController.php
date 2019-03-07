<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name = "home_page")
     */
    public function homeAction()
    {
        return $this->render("home/index.html.twig");
    }
}