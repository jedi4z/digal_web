<?php

namespace Digal\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PortfolioController extends Controller {

    public function portfolioAction() {
        return $this->render('WebBundle:Portfolio:portfolio.html.twig');
    }

}

?>

