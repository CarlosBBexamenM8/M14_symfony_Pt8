<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'gestor_gestoria_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gestor\\GestoriaBundle\\Controller\\GestorController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gestor_gestoria_form_tasca' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gestor\\GestoriaBundle\\Controller\\FormulariController::createTascaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/form/tasca',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gestor_gestoria_form_tasca_afegir' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gestor\\GestoriaBundle\\Controller\\CrudController::createTascaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/form/tasca/afegir',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gestor_gestoria_form_subtasca' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gestor\\GestoriaBundle\\Controller\\FormulariController::createSubtascaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/form/subtasca',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gestor_gestoria_form_subtasca_afegir' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gestor\\GestoriaBundle\\Controller\\CrudController::createSubtascaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/form/subtasca/afegir',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gestor_gestoria_form_usuari' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gestor\\GestoriaBundle\\Controller\\FormulariController::createUsuariAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/form/usuari',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gestor_gestoria_form_usuari_afegir' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gestor\\GestoriaBundle\\Controller\\CrudController::createUsuariAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/form/usuari/afegir',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gestor_gestoria_mostrar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gestor\\GestoriaBundle\\Controller\\MostrarController::mostrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mostrar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
