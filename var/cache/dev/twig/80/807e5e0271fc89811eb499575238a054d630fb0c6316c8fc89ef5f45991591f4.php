<?php

/* GestorGestoriaBundle:Default:mostrar.html.twig */
class __TwigTemplate_4edbe73c15d042c37fdd4b5d161b2e6e20c2360b6f7ebf01bf85edbc0afe94f8 extends Twig_Template
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
        $__internal_6e120e350d80334d74d88a23657d4c2df1e5a7c430e9d5b8d9a962cc4226497a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e120e350d80334d74d88a23657d4c2df1e5a7c430e9d5b8d9a962cc4226497a->enter($__internal_6e120e350d80334d74d88a23657d4c2df1e5a7c430e9d5b8d9a962cc4226497a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorGestoriaBundle:Default:mostrar.html.twig"));

        $__internal_5624ef75d929d6f62deb037f46842a7ecd3a50cc0ec8a1ab9eb6b75ece482d67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5624ef75d929d6f62deb037f46842a7ecd3a50cc0ec8a1ab9eb6b75ece482d67->enter($__internal_5624ef75d929d6f62deb037f46842a7ecd3a50cc0ec8a1ab9eb6b75ece482d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorGestoriaBundle:Default:mostrar.html.twig"));

        // line 1
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<div class=\"container\">
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tasca"] ?? $this->getContext($context, "tasca")));
        foreach ($context['_seq'] as $context["_key"] => $context["itemT"]) {
            // line 4
            echo "    <div>
        <p>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["itemT"], "nom", array()), "html", null, true);
            echo "</p>
        <p>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["itemT"], "descripcio", array()), "html", null, true);
            echo "</p>
        <p>";
            // line 7
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["itemT"], "dataInici", array()), "d/m/Y"), "html", null, true);
            echo "</p>
        <p>";
            // line 8
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["itemT"], "dataFi", array()), "d/m/Y"), "html", null, true);
            echo "</p>

    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemT'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subtasca"] ?? $this->getContext($context, "subtasca")));
        foreach ($context['_seq'] as $context["_key"] => $context["itemS"]) {
            // line 14
            echo "    <div>
        <p>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["itemS"], "nom", array()), "html", null, true);
            echo "</p>
        <p>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["itemS"], "tasca", array()), "nom", array()), "html", null, true);
            echo "</p>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemS'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["usuari"] ?? $this->getContext($context, "usuari")));
        foreach ($context['_seq'] as $context["_key"] => $context["itemU"]) {
            // line 21
            echo "    <div>
        <p>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["itemU"], "dni", array()), "html", null, true);
            echo "</p>
        <p>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["itemU"], "nom", array()), "html", null, true);
            echo "</p>
        <p>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["itemU"], "cognoms", array()), "html", null, true);
            echo "</p>
        <p>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["itemU"], "subtasca", array()), "nom", array()), "html", null, true);
            echo "</p>

    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemU'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "</div>";
        
        $__internal_6e120e350d80334d74d88a23657d4c2df1e5a7c430e9d5b8d9a962cc4226497a->leave($__internal_6e120e350d80334d74d88a23657d4c2df1e5a7c430e9d5b8d9a962cc4226497a_prof);

        
        $__internal_5624ef75d929d6f62deb037f46842a7ecd3a50cc0ec8a1ab9eb6b75ece482d67->leave($__internal_5624ef75d929d6f62deb037f46842a7ecd3a50cc0ec8a1ab9eb6b75ece482d67_prof);

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
        return array (  115 => 29,  105 => 25,  101 => 24,  97 => 23,  93 => 22,  90 => 21,  86 => 20,  83 => 19,  74 => 16,  70 => 15,  67 => 14,  63 => 13,  60 => 12,  50 => 8,  46 => 7,  42 => 6,  38 => 5,  35 => 4,  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<link href=\"{{ asset(\"css/bootstrap.min.css\")}}\" rel=\"stylesheet\">
<div class=\"container\">
{%for itemT in tasca%}
    <div>
        <p>{{itemT.nom}}</p>
        <p>{{itemT.descripcio}}</p>
        <p>{{itemT.dataInici|date(\"d/m/Y\")}}</p>
        <p>{{itemT.dataFi|date(\"d/m/Y\")}}</p>

    </div>
{%endfor%}

{%for itemS in subtasca%}
    <div>
        <p>{{itemS.nom}}</p>
        <p>{{itemS.tasca.nom}}</p>
    </div>
{%endfor%}

{%for itemU in usuari%}
    <div>
        <p>{{itemU.dni}}</p>
        <p>{{itemU.nom}}</p>
        <p>{{itemU.cognoms}}</p>
        <p>{{itemU.subtasca.nom}}</p>

    </div>
{%endfor%}
</div>", "GestorGestoriaBundle:Default:mostrar.html.twig", "/opt/lampp/htdocs/M14_symfony_Pt8/src/Gestor/GestoriaBundle/Resources/views/Default/mostrar.html.twig");
    }
}
