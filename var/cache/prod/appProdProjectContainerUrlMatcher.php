<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // gestor_gestoria_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'Gestor\\GestoriaBundle\\Controller\\GestorController::indexAction',  '_route' => 'gestor_gestoria_homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'gestor_gestoria_homepage'));
            }

            return $ret;
        }

        if (0 === strpos($pathinfo, '/form')) {
            if (0 === strpos($pathinfo, '/form/tasca')) {
                // gestor_gestoria_form_tasca
                if ('/form/tasca' === $pathinfo) {
                    return array (  '_controller' => 'Gestor\\GestoriaBundle\\Controller\\FormulariController::createTascaAction',  '_route' => 'gestor_gestoria_form_tasca',);
                }

                // gestor_gestoria_form_tasca_afegir
                if ('/form/tasca/afegir' === $pathinfo) {
                    return array (  '_controller' => 'Gestor\\GestoriaBundle\\Controller\\CrudController::createTascaAction',  '_route' => 'gestor_gestoria_form_tasca_afegir',);
                }

            }

            elseif (0 === strpos($pathinfo, '/form/subtasca')) {
                // gestor_gestoria_form_subtasca
                if ('/form/subtasca' === $pathinfo) {
                    return array (  '_controller' => 'Gestor\\GestoriaBundle\\Controller\\FormulariController::createSubtascaAction',  '_route' => 'gestor_gestoria_form_subtasca',);
                }

                // gestor_gestoria_form_subtasca_afegir
                if ('/form/subtasca/afegir' === $pathinfo) {
                    return array (  '_controller' => 'Gestor\\GestoriaBundle\\Controller\\CrudController::createSubtascaAction',  '_route' => 'gestor_gestoria_form_subtasca_afegir',);
                }

            }

            elseif (0 === strpos($pathinfo, '/form/usuari')) {
                // gestor_gestoria_form_usuari
                if ('/form/usuari' === $pathinfo) {
                    return array (  '_controller' => 'Gestor\\GestoriaBundle\\Controller\\FormulariController::createUsuariAction',  '_route' => 'gestor_gestoria_form_usuari',);
                }

                // gestor_gestoria_form_usuari_afegir
                if ('/form/usuari/afegir' === $pathinfo) {
                    return array (  '_controller' => 'Gestor\\GestoriaBundle\\Controller\\CrudController::createUsuariAction',  '_route' => 'gestor_gestoria_form_usuari_afegir',);
                }

            }

        }

        // gestor_gestoria_mostrar
        if ('/mostrar' === $pathinfo) {
            return array (  '_controller' => 'Gestor\\GestoriaBundle\\Controller\\MostrarController::mostrarAction',  '_route' => 'gestor_gestoria_mostrar',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
