<?php

namespace Digal\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Digal\Bundle\Form\Type\ConsultType;
use Digal\Bundle\Entity\Consult;

class ContactController extends Controller {

   public function contactAction() {
   	$consult = new Consult();
    $form = $this->createForm(new ConsultType(), $consult);
    return $this->render('WebBundle:Contact:contact.html.twig', array('form' => $form->createView()));
   }

}