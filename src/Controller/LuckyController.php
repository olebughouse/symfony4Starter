<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Exceptions\CustomException;
use App\Gearman\GearmanClient;


class LuckyController extends Controller
{
    /**
    * @Route("/lucky/number")
    */
    public function number()
    {
        $number = random_int(0, 100);

        $result = GearmanClient::connectClient();

        return $this->render('lucky/number.html.twig', array(
            'number' => $number . ' msg: ' . $result,
        ));
    }
}