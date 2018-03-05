<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6bdc415026468751b0fd3b8ea4bb5b8b9e992dbfca85e1c86f20068b91fbe660 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de343550018354b4f1d708893d5c7c2ad58000462ef89d358108b9c295457f5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de343550018354b4f1d708893d5c7c2ad58000462ef89d358108b9c295457f5d->enter($__internal_de343550018354b4f1d708893d5c7c2ad58000462ef89d358108b9c295457f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5992689bc11929a01a57b1246d51353feda8381aa654da4b9e2cb8dd93de94c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5992689bc11929a01a57b1246d51353feda8381aa654da4b9e2cb8dd93de94c4->enter($__internal_5992689bc11929a01a57b1246d51353feda8381aa654da4b9e2cb8dd93de94c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de343550018354b4f1d708893d5c7c2ad58000462ef89d358108b9c295457f5d->leave($__internal_de343550018354b4f1d708893d5c7c2ad58000462ef89d358108b9c295457f5d_prof);

        
        $__internal_5992689bc11929a01a57b1246d51353feda8381aa654da4b9e2cb8dd93de94c4->leave($__internal_5992689bc11929a01a57b1246d51353feda8381aa654da4b9e2cb8dd93de94c4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a8dd2a001f1b9cff800247c459bc56074919759946caf46cc27e310d274c80e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8dd2a001f1b9cff800247c459bc56074919759946caf46cc27e310d274c80e7->enter($__internal_a8dd2a001f1b9cff800247c459bc56074919759946caf46cc27e310d274c80e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ff677b7a507eb2eed51b4099a3f04fd132db7cb4b300f76c90a585f7e4f20f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff677b7a507eb2eed51b4099a3f04fd132db7cb4b300f76c90a585f7e4f20f5d->enter($__internal_ff677b7a507eb2eed51b4099a3f04fd132db7cb4b300f76c90a585f7e4f20f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ff677b7a507eb2eed51b4099a3f04fd132db7cb4b300f76c90a585f7e4f20f5d->leave($__internal_ff677b7a507eb2eed51b4099a3f04fd132db7cb4b300f76c90a585f7e4f20f5d_prof);

        
        $__internal_a8dd2a001f1b9cff800247c459bc56074919759946caf46cc27e310d274c80e7->leave($__internal_a8dd2a001f1b9cff800247c459bc56074919759946caf46cc27e310d274c80e7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3cec38876c546d3de8746f140d05ec9f87fa228658b802cdd487ceef88b577a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cec38876c546d3de8746f140d05ec9f87fa228658b802cdd487ceef88b577a0->enter($__internal_3cec38876c546d3de8746f140d05ec9f87fa228658b802cdd487ceef88b577a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3a8d368d8d31140c3d4653192cefc4e2e0e55b245e787d50427592d8500ed62a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a8d368d8d31140c3d4653192cefc4e2e0e55b245e787d50427592d8500ed62a->enter($__internal_3a8d368d8d31140c3d4653192cefc4e2e0e55b245e787d50427592d8500ed62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3a8d368d8d31140c3d4653192cefc4e2e0e55b245e787d50427592d8500ed62a->leave($__internal_3a8d368d8d31140c3d4653192cefc4e2e0e55b245e787d50427592d8500ed62a_prof);

        
        $__internal_3cec38876c546d3de8746f140d05ec9f87fa228658b802cdd487ceef88b577a0->leave($__internal_3cec38876c546d3de8746f140d05ec9f87fa228658b802cdd487ceef88b577a0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_43acc9f46a7f2950201249f309ff4e7b3a3b3995d2a7ada82dd2e9e811c7b0c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43acc9f46a7f2950201249f309ff4e7b3a3b3995d2a7ada82dd2e9e811c7b0c4->enter($__internal_43acc9f46a7f2950201249f309ff4e7b3a3b3995d2a7ada82dd2e9e811c7b0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_280d3f7eea84d5b966be549d07576896d1a0f49b95a67f6b430edcbe4b3390ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_280d3f7eea84d5b966be549d07576896d1a0f49b95a67f6b430edcbe4b3390ed->enter($__internal_280d3f7eea84d5b966be549d07576896d1a0f49b95a67f6b430edcbe4b3390ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_280d3f7eea84d5b966be549d07576896d1a0f49b95a67f6b430edcbe4b3390ed->leave($__internal_280d3f7eea84d5b966be549d07576896d1a0f49b95a67f6b430edcbe4b3390ed_prof);

        
        $__internal_43acc9f46a7f2950201249f309ff4e7b3a3b3995d2a7ada82dd2e9e811c7b0c4->leave($__internal_43acc9f46a7f2950201249f309ff4e7b3a3b3995d2a7ada82dd2e9e811c7b0c4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/opt/lampp/htdocs/M14_symfony_Pt8/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
