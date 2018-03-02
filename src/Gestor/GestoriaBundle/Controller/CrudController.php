<?php

namespace Gestor\GestoriaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Gestor\GestoriaBundle\Entity\Usuari;
use Gestor\GestoriaBundle\Form\UsuariType;
use Symfony\Component\HttpFoundation\Request;
use Gestor\GestoriaBundle\Form\TascaType;
use Gestor\GestoriaBundle\Entity\Tasca;
use Gestor\GestoriaBundle\Entity\Subtasca;
use Gestor\GestoriaBundle\Form\SubtascaType;

class CrudController extends Controller {

    public function createTascaAction(Request $request) {
        $tasca = new Tasca();
        $form = $this->createForm(TascaType::class, $tasca);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $tasca->setNom($form->get('nom')->getData());
            $tasca->setDescripcio($form->get("descripcio")->getData());
            $tasca->setDataInici($form->get('dataInici')->getData());
            $tasca->setDataFi($form->get('dataFi')->getData());//cridem a l'entity manager
            $em = $this->getDoctrine()->getManager();
            $em->persist($tasca);
            $flush = $em->flush();
            if ($flush != null) {
                $status = "Tasca no inserida";
            } else {
                $status = "Tasca inserida";
            }
        } 
        $titol = "create";
        return $this->render('GestorGestoriaBundle:Form:resultat.html.twig', array('titol' => $titol, 'status'=>$status));
    }
      
    public function createSubtascaAction(Request $request) {
        $subtasca = new Subtasca();
        $form = $this->createForm(SubtascaType::class, $subtasca);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $subtasca->setNom($form->get('nom')->getData());
            $em = $this->getDoctrine()->getManager();
            $em->persist($subtasca);
            $flush = $em->flush();
            if ($flush != null) {
                $status = "Usuari inserit";
            } else {
                $status = "Usuari no inserit";
            }
        } else {
            $status = "usuari no inserit";
        }
        $titol = "create";
        return $this->render('GestorGestoriaBundle:Form:resultat.html.twig', array('titol' => $titol, 'status'=>$status));
    }
    public function createUsuariAction(Request $request) {
        $usuari = new Usuari();
        $form = $this->createForm(UsuariType::class, $usuari);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $usuari->setNom($form->get('nom')->getData());
            $em = $this->getDoctrine()->getManager();
            $em->persist($usuari);
            $flush = $em->flush();
            if ($flush != null) {
                $status = "Usuari inserit";
            } else {
                $status = "Usuari no inserit";
            }
        } else {
            $status = "usuari no inserit";
        }
        $titol = "create";
        return $this->render('GestorGestoriaBundle:Form:resultat.html.twig', array('titol' => $titol, 'status'=>$status));
    }

}
