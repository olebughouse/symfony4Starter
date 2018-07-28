<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class TilesController extends Controller
{
    /**
     * @Route("/tiles/{slug}", name="tiles")
     */
    public function index($slug)
    {

        $url = $this->generateUrl('tiles', array('slug' => $slug), UrlGeneratorInterface::ABSOLUTE_URL);

        return $this->render('tiles/index.html.twig', [
            'controller_name' => $url,
        ]);
    }
}
