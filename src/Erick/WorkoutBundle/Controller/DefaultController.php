<?php

namespace Erick\WorkoutBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/")
     * @Template("ErickWorkoutBundle:Default:index.html.twig")
     */
    public function indexAction()
    {
        
        $response  =  new Response(json_encode(array('result' => 1, 'message' => 'ok' )));
        $response->headers->set('Content-type', 'application/json');
        return $response;
    }

}

