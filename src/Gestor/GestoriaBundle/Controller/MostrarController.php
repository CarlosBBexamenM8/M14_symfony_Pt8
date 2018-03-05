<?php

namespace Gestor\GestoriaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Gestor\GestoriaBundle\Entity\Usuari;
use Gestor\GestoriaBundle\Form\UsuariType;
use Gestor\GestoriaBundle\Form\TascaType;
use Gestor\GestoriaBundle\Entity\Tasca;
use Gestor\GestoriaBundle\Entity\Subtasca;
use Gestor\GestoriaBundle\Form\SubtascaType;

class MostrarController extends Controller {

    public function mostrarAction() {
        $repositoryTasca = $this->getDoctrine()->getRepository(Tasca::class);
        $tasques = $repositoryTasca->findAll();
        $repositorySubtasca = $this->getDoctrine()->getRepository(Subtasca::class);
        $subtasques = $repositorySubtasca->findAll();
        $repositoryUsuari = $this->getDoctrine()->getRepository(Usuari::class);
        $usuaris = $repositoryUsuari->findAll();
        return $this->render('GestorGestoriaBundle:Default:mostrar.html.twig', array(
                    'tasca' => $tasques,
                    'subtasca' => $subtasques,
                    'usuari' => $usuaris));
    }

}
