<?php

namespace Digal\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Digal\Bundle\Form\Type\ConsultType;
use Digal\Bundle\Entity\Consult;

class IndexController extends Controller {

        public function indexAction(Request $request) {
                $consult = new Consult();
                $form = $this->createForm(new ConsultType(), $consult);
                $form->handleRequest($request);

                if ($form->isValid()) {
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($consult);
                        $em->flush();


                        $message = \Swift_Message::newInstance()
                                ->setSubject('Consulta *** Digal Web ***')
                                ->setFrom($consult->getEmail())
                                ->setTo('info@digal.com.ar')
                                ->setBody($consult->getDescription());
                        $this->get('mailer')->send($message);
                }

                return $this->render('WebBundle:Index:index.html.twig', array('form' => $form->createView()));
        }

}
