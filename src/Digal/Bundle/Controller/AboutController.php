<?php

namespace Digal\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Digal\Bundle\Form\Type\ConsultType;
use Digal\Bundle\Entity\Consult;

class AboutController extends Controller {

   public function aboutAction() {
      return $this->render('WebBundle:About:about.html.twig');
   }

}