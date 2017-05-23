<?php

namespace AppBundle\Controller\Frontend;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CarController extends Controller
{
    /**
     * @Route("/car", name="car")
     */
    public function showAction()
    {
        return $this->render('frontend/car/show.html.twig');
    }


    /**
     * @Route("/detail", name="details")
     */
    public function detailAction()
    {
        return $this->render('frontend/car/details.html.twig');
    }

}
