<?php

/* GestorGestoriaBundle:Default:mostrar.html.twig */
class __TwigTemplate_4fdab9e72378da330d9557f6f7245ad3cd60f9026f3b07182b9062b432011f0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tasca"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "    <div>
        <p>";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nom", array()), "html", null, true);
            echo "</p>
        <p>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "descripcio", array()), "html", null, true);
            echo "</p>
        <p>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "dataInici", array()), "html", null, true);
            echo "</p>
        <p>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "dataFi", array()), "html", null, true);
            echo "</p>

    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "GestorGestoriaBundle:Default:mostrar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  34 => 5,  30 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "GestorGestoriaBundle:Default:mostrar.html.twig", "/opt/lampp/htdocs/M14_symfony_Pt8/src/Gestor/GestoriaBundle/Resources/views/Default/mostrar.html.twig");
    }
}
