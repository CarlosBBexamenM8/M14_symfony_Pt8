<?php

namespace Gestor\GestoriaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Gestor\GestoriaBundle\Entity\Usuari;
use Gestor\GestoriaBundle\Form\UsuariType;
use Symfony\Component\HttpFoundation\Request;
use Gestor\GestoriaBundle\Form\TascaType;
use Gestor\GestoriaBundle\Entity\Tasca;
use Gestor\GestoriaBundle\Form\SubtascaType;
use Gestor\GestoriaBundle\Entity\Subtasca;
class FormulariController extends Controller {
public function createTascaAction(Request $request) {
        $tasca = new Tasca();
        $form = $this->createForm(TascaType::class, $tasca);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $status = "Formulari vàlid";
            $data = array(
                'nom' => $form->get('nom')->getData(),
                'descripcio' => $form->get('descripcio')->getData(),
                'dataInici' => $form->get('dataInici')->getData(),
                'dataFi' => $form->get('dataFi')->getData(),
            );
        } else {
            $status = null;
            $data = null;
        }
        $titol = "create";
        return $this->render('GestorGestoriaBundle:Form:form.html.twig', array('titol' => $titol, 'form' => $form->createView(), $status, $data));
    }
    public function createSubtascaAction(Request $request) {
        $subtasca = new Subtasca();
        $form = $this->createForm(SubtascaType::class, $subtasca);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $status = "Formulari vàlid";
            $data = array(
                'nom' => $form->get('nom')->getData(),
                'tasca' => $form->get('tasca')->getData(),
            );
        } else {
            $status = null;
            $data = null;
        }
        $titol = "create";
        return $this->render('GestorGestoriaBundle:Form:formSubtasca.html.twig', array('titol' => $titol, 'form' => $form->createView()), $status, $data);
    }
    public function createUsuariAction(Request $request) {
        $usuari = new Usuari();
        $form = $this->createForm(UsuariType::class, $usuari);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $status = "Formulari vàlid";
            $data = array(
                'dni' => $form->get('dni')->getData(),
                'nom' => $form->get('nom')->getData(),
                'cognoms' => $form->get('cognoms')->getData(),
                'subtasca' => $form->get('subtasca')->getData(),
            );
        } else {
            $status = null;
            $data = null;
        }
        $titol = "create";
        return $this->render('GestorGestoriaBundle:Form:formUsuari.html.twig', array('titol' => $titol, 'form' => $form->createView()), $status, $data);
    }
    

}
