<?php
namespace Gestor\GestoriaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GestorController extends Controller
{
    public function indexAction()
    {
        return $this->render('GestorGestoriaBundle:Default:index.html.twig');
    }
    public function formAction(){
        return $this->render('GestorGestoriaBundle:Default:form.html.twig');
    }
    
}