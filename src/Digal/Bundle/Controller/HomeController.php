<?php

namespace Digal\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Digal\Bundle\Form\Type\ConsultType;
use Digal\Bundle\Entity\Consult;

class HomeController extends Controller {

   public function homeAction() {
   		$consult = new Consult();
        $form = $this->createForm(new ConsultType(), $consult);
      	return $this->render('WebBundle:Home:home.html.twig', array('form' => $form->createView()));
   }

}