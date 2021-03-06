<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class LuckyController extends Controller
{
    /**
    * @Route("/lucky/number")
    */
    public function numberAction()
    {
        $number = rand(0, 100);
        
        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
    
    /**
    * @Route("/api/lucky/number")
    */
    public function apiNumberAction()
    {
        $data = array(
            'lucky_number' => rand(0, 100),
        );
        
        return new JsonResponse($data);
    }
}