<?php

/* GestorGestoriaBundle:Form:resultat.html.twig */
class __TwigTemplate_46fbcc0cfbfa4c1a317df44416dd9e62ee1344171959061de7979d461ccacef8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        echo twig_escape_filter($this->env, ($context["status"] ?? null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "GestorGestoriaBundle:Form:resultat.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "GestorGestoriaBundle:Form:resultat.html.twig", "/opt/lampp/htdocs/M14_symfony_Pt8/src/Gestor/GestoriaBundle/Resources/views/Form/resultat.html.twig");
    }
}
