<?php

namespace Digal\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClientsController extends Controller {

    public function clientsAction() {
        return $this->render('WebBundle:Clients:clients.html.twig');
    }

}

?>
