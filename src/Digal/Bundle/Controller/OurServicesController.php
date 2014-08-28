<?php

namespace Digal\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OurServicesController extends Controller {

   public function ourServicesAction() {
      return $this->render('WebBundle:OurServices:our_services.html.twig');
   }

   public function tshirtAction() {
      return $this->render('WebBundle:OurServices:tshirt.html.twig');
   }

   public function keychainRibbonAction() {
      return $this->render('WebBundle:OurServices:keychain_ribbon.html.twig');
   }

   public function keychainPoliAction() {
      return $this->render('WebBundle:OurServices:keychain_poli.html.twig');
   }

   public function cushionAction() {
      return $this->render('WebBundle:OurServices:cushion.html.twig');
   }

   public function coverAction() {
      return $this->render('WebBundle:OurServices:cover.html.twig');
   }

   public function bagAction() {
      return $this->render('WebBundle:OurServices:bag.html.twig');
   }

   public function sweatshirtAction() {
      return $this->render('WebBundle:OurServices:sweatshirt.html.twig');
   }

   public function domeAction() {
      return $this->render('WebBundle:OurServices:dome.html.twig');
   }

   public function stickerAction() {
      return $this->render('WebBundle:OurServices:sticker.html.twig');
   }

   public function padAction() {
      return $this->render('WebBundle:OurServices:pad.html.twig');
   }

}