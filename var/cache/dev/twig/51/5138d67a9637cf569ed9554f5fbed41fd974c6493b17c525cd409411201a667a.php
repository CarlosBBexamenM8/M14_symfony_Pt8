<?php

/* GestorGestoriaBundle:Form:formUsuari.html.twig */
class __TwigTemplate_ef1d0f468fe4f5410ef328442caa1992bcf6317fd55fc416258a1940b7119969 extends Twig_Template
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
        $__internal_389779df60c18cf2fae8c844cea8b5f62732f61a1a7be77ba6c415e62c7da91b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_389779df60c18cf2fae8c844cea8b5f62732f61a1a7be77ba6c415e62c7da91b->enter($__internal_389779df60c18cf2fae8c844cea8b5f62732f61a1a7be77ba6c415e62c7da91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorGestoriaBundle:Form:formUsuari.html.twig"));

        $__internal_5dce2e3b8ddfcd1a2da411755a246b4ccced3a53b1302ac07ed28a86bafff4cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dce2e3b8ddfcd1a2da411755a246b4ccced3a53b1302ac07ed28a86bafff4cb->enter($__internal_5dce2e3b8ddfcd1a2da411755a246b4ccced3a53b1302ac07ed28a86bafff4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorGestoriaBundle:Form:formUsuari.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_389779df60c18cf2fae8c844cea8b5f62732f61a1a7be77ba6c415e62c7da91b->leave($__internal_389779df60c18cf2fae8c844cea8b5f62732f61a1a7be77ba6c415e62c7da91b_prof);

        
        $__internal_5dce2e3b8ddfcd1a2da411755a246b4ccced3a53b1302ac07ed28a86bafff4cb->leave($__internal_5dce2e3b8ddfcd1a2da411755a246b4ccced3a53b1302ac07ed28a86bafff4cb_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_227ddec4522fe99022e720d1ce1aa5b924980aa66f100bc6b4133d26ca028afe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_227ddec4522fe99022e720d1ce1aa5b924980aa66f100bc6b4133d26ca028afe->enter($__internal_227ddec4522fe99022e720d1ce1aa5b924980aa66f100bc6b4133d26ca028afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_79b010bbc6f94feff39d2230b5b029982200ace67ef06ebdf2a42b9d018e51b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79b010bbc6f94feff39d2230b5b029982200ace67ef06ebdf2a42b9d018e51b1->enter($__internal_79b010bbc6f94feff39d2230b5b029982200ace67ef06ebdf2a42b9d018e51b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => "usuari/afegir", "method" => "POST"));
        echo " ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_79b010bbc6f94feff39d2230b5b029982200ace67ef06ebdf2a42b9d018e51b1->leave($__internal_79b010bbc6f94feff39d2230b5b029982200ace67ef06ebdf2a42b9d018e51b1_prof);

        
        $__internal_227ddec4522fe99022e720d1ce1aa5b924980aa66f100bc6b4133d26ca028afe->leave($__internal_227ddec4522fe99022e720d1ce1aa5b924980aa66f100bc6b4133d26ca028afe_prof);

    }

    public function getTemplateName()
    {
        return "GestorGestoriaBundle:Form:formUsuari.html.twig";
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
{{form_start(form, {'action':'usuari/afegir', 'method':'POST'})}} {{form_end(form)}}
{% endblock %}
", "GestorGestoriaBundle:Form:formUsuari.html.twig", "/opt/lampp/htdocs/M14_symfony_Pt8/src/Gestor/GestoriaBundle/Resources/views/Form/formUsuari.html.twig");
    }
}
