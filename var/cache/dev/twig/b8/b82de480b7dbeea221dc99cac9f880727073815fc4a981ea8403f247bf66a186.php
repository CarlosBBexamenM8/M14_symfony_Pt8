<?php

/* GestorGestoriaBundle:Form:form.html.twig */
class __TwigTemplate_a9210d46aa955ea187060f32d2fd17f8dd046d6f2acbf650a4c6445f0a7ff1b5 extends Twig_Template
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
        $__internal_7df9d38c95e24a6d06fd05e41c40b58a52552181f40cc244bd1116c9b71a1f82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7df9d38c95e24a6d06fd05e41c40b58a52552181f40cc244bd1116c9b71a1f82->enter($__internal_7df9d38c95e24a6d06fd05e41c40b58a52552181f40cc244bd1116c9b71a1f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorGestoriaBundle:Form:form.html.twig"));

        $__internal_d37fd034d87fd8fd456db4f12382b1a3984d0538c985c6de8a5d4b031c600854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d37fd034d87fd8fd456db4f12382b1a3984d0538c985c6de8a5d4b031c600854->enter($__internal_d37fd034d87fd8fd456db4f12382b1a3984d0538c985c6de8a5d4b031c600854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorGestoriaBundle:Form:form.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_7df9d38c95e24a6d06fd05e41c40b58a52552181f40cc244bd1116c9b71a1f82->leave($__internal_7df9d38c95e24a6d06fd05e41c40b58a52552181f40cc244bd1116c9b71a1f82_prof);

        
        $__internal_d37fd034d87fd8fd456db4f12382b1a3984d0538c985c6de8a5d4b031c600854->leave($__internal_d37fd034d87fd8fd456db4f12382b1a3984d0538c985c6de8a5d4b031c600854_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_f70c8b0f235ba0907c9a833d62ea50704f466ac71f5c7cb6e7361d7fe16ec40a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f70c8b0f235ba0907c9a833d62ea50704f466ac71f5c7cb6e7361d7fe16ec40a->enter($__internal_f70c8b0f235ba0907c9a833d62ea50704f466ac71f5c7cb6e7361d7fe16ec40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3435e7d41e63e535d615be5a1eb4a893e2f0a8c8836f65e4e56bd986f24a4c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3435e7d41e63e535d615be5a1eb4a893e2f0a8c8836f65e4e56bd986f24a4c8c->enter($__internal_3435e7d41e63e535d615be5a1eb4a893e2f0a8c8836f65e4e56bd986f24a4c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => "tasca/afegir", "method" => "POST"));
        echo " ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_3435e7d41e63e535d615be5a1eb4a893e2f0a8c8836f65e4e56bd986f24a4c8c->leave($__internal_3435e7d41e63e535d615be5a1eb4a893e2f0a8c8836f65e4e56bd986f24a4c8c_prof);

        
        $__internal_f70c8b0f235ba0907c9a833d62ea50704f466ac71f5c7cb6e7361d7fe16ec40a->leave($__internal_f70c8b0f235ba0907c9a833d62ea50704f466ac71f5c7cb6e7361d7fe16ec40a_prof);

    }

    public function getTemplateName()
    {
        return "GestorGestoriaBundle:Form:form.html.twig";
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
{{form_start(form, {'action':'tasca/afegir', 'method':'POST'})}} {{form_end(form)}}
{% endblock %}
", "GestorGestoriaBundle:Form:form.html.twig", "/opt/lampp/htdocs/M14_symfony_Pt8/src/Gestor/GestoriaBundle/Resources/views/Form/form.html.twig");
    }
}
