<?php

namespace Gestor\GestoriaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MostrarController extends Controller {

    public function mostrarAction() {
        $em = $this->getDoctrine()->getManager();
        $em->findAll();
        return $this->render('GestorGestoriaBundle:Default:index.html.twig');
    }

}
