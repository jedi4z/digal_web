<?php

namespace Digal\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Digal\Bundle\Form\Type\ConsultType;
use Digal\Bundle\Entity\Consult;

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

}