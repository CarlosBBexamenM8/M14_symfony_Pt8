<?php

/* GestorGestoriaBundle:Form:resultat.html.twig */
class __TwigTemplate_a288eef412b2ae26744781ddac1a36eb7be8f8175272b8654987c84f7febfacc extends Twig_Template
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
        $__internal_8aa45f0aebe180ac1efc9b9784cd7f4415a27ff86199b4a38b6e675c351efe23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aa45f0aebe180ac1efc9b9784cd7f4415a27ff86199b4a38b6e675c351efe23->enter($__internal_8aa45f0aebe180ac1efc9b9784cd7f4415a27ff86199b4a38b6e675c351efe23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorGestoriaBundle:Form:resultat.html.twig"));

        $__internal_da2c829795029ac3443d1e80716b43d34c2b0e88d4ec01326bd80bd85a60d649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da2c829795029ac3443d1e80716b43d34c2b0e88d4ec01326bd80bd85a60d649->enter($__internal_da2c829795029ac3443d1e80716b43d34c2b0e88d4ec01326bd80bd85a60d649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorGestoriaBundle:Form:resultat.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_8aa45f0aebe180ac1efc9b9784cd7f4415a27ff86199b4a38b6e675c351efe23->leave($__internal_8aa45f0aebe180ac1efc9b9784cd7f4415a27ff86199b4a38b6e675c351efe23_prof);

        
        $__internal_da2c829795029ac3443d1e80716b43d34c2b0e88d4ec01326bd80bd85a60d649->leave($__internal_da2c829795029ac3443d1e80716b43d34c2b0e88d4ec01326bd80bd85a60d649_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_24fc80ae98031017092ad66edb091947995842bb19c895f7db0791a19ddd98f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24fc80ae98031017092ad66edb091947995842bb19c895f7db0791a19ddd98f8->enter($__internal_24fc80ae98031017092ad66edb091947995842bb19c895f7db0791a19ddd98f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_65e60c95f2e87f4b35c4d6b98062d42dd76e86052ce253b015ee819ef26aab36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65e60c95f2e87f4b35c4d6b98062d42dd76e86052ce253b015ee819ef26aab36->enter($__internal_65e60c95f2e87f4b35c4d6b98062d42dd76e86052ce253b015ee819ef26aab36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "    ";
        echo twig_escape_filter($this->env, ($context["status"] ?? $this->getContext($context, "status")), "html", null, true);
        echo "
";
        
        $__internal_65e60c95f2e87f4b35c4d6b98062d42dd76e86052ce253b015ee819ef26aab36->leave($__internal_65e60c95f2e87f4b35c4d6b98062d42dd76e86052ce253b015ee819ef26aab36_prof);

        
        $__internal_24fc80ae98031017092ad66edb091947995842bb19c895f7db0791a19ddd98f8->leave($__internal_24fc80ae98031017092ad66edb091947995842bb19c895f7db0791a19ddd98f8_prof);

    }

    public function getTemplateName()
    {
        return "GestorGestoriaBundle:Form:resultat.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block body %}
    {{status}}
{% endblock %}", "GestorGestoriaBundle:Form:resultat.html.twig", "/opt/lampp/htdocs/M14_symfony_Pt8/src/Gestor/GestoriaBundle/Resources/views/Form/resultat.html.twig");
    }
}
