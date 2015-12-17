<?php

namespace Erick\WorkoutBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Erick\WorkoutBundle\Entity\Workout;

   /**
     *@Route("/workout") 
   */

class DefaultController extends Controller
{   
    /**
     * @Route("/" , name ="workout_index")
     * @Template("")
     */
    public function indexAction()
    {
       $workout = new Workout();
       $workout->setActivity('yoga');
       $workout->setHours(1);
       $workout->setOcurrenceDate(new \DateTime());

       $em = $this->getDoctrine()->getEntityManager();
       $em->persist($workout);
       $em->flush(); 



       return array();
       
    }

}

