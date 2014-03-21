<?php

namespace Digal\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AboutController extends Controller {

   public function aboutAction() {
      return $this->render('WebBundle:About:about.html.twig');
   }

}