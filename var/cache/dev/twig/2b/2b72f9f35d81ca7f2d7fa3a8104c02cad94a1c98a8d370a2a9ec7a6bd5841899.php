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
        $__internal_5ec6428f8b5401a004bbf1fbd40f0ba42b7ec729cbd9488c2603d4bee1be1c78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ec6428f8b5401a004bbf1fbd40f0ba42b7ec729cbd9488c2603d4bee1be1c78->enter($__internal_5ec6428f8b5401a004bbf1fbd40f0ba42b7ec729cbd9488c2603d4bee1be1c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_36b9dfb3d8bd569fc51cf262143ae339ab9e4737f7e043ee38b32d4d4186e4e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36b9dfb3d8bd569fc51cf262143ae339ab9e4737f7e043ee38b32d4d4186e4e5->enter($__internal_36b9dfb3d8bd569fc51cf262143ae339ab9e4737f7e043ee38b32d4d4186e4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ec6428f8b5401a004bbf1fbd40f0ba42b7ec729cbd9488c2603d4bee1be1c78->leave($__internal_5ec6428f8b5401a004bbf1fbd40f0ba42b7ec729cbd9488c2603d4bee1be1c78_prof);

        
        $__internal_36b9dfb3d8bd569fc51cf262143ae339ab9e4737f7e043ee38b32d4d4186e4e5->leave($__internal_36b9dfb3d8bd569fc51cf262143ae339ab9e4737f7e043ee38b32d4d4186e4e5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b1be3fcefbc88334d779399b6fd2c63af9543d3b5fb74881e61dff8aa71503fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1be3fcefbc88334d779399b6fd2c63af9543d3b5fb74881e61dff8aa71503fb->enter($__internal_b1be3fcefbc88334d779399b6fd2c63af9543d3b5fb74881e61dff8aa71503fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_deda69df98077454d678b4a6814dbca506404e30c4dea0d0417614710fbfd49e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deda69df98077454d678b4a6814dbca506404e30c4dea0d0417614710fbfd49e->enter($__internal_deda69df98077454d678b4a6814dbca506404e30c4dea0d0417614710fbfd49e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_deda69df98077454d678b4a6814dbca506404e30c4dea0d0417614710fbfd49e->leave($__internal_deda69df98077454d678b4a6814dbca506404e30c4dea0d0417614710fbfd49e_prof);

        
        $__internal_b1be3fcefbc88334d779399b6fd2c63af9543d3b5fb74881e61dff8aa71503fb->leave($__internal_b1be3fcefbc88334d779399b6fd2c63af9543d3b5fb74881e61dff8aa71503fb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_65939dbf0bbd8377f86123944c39bf8ad70cb91aed735bdd8a7fdd5fa44e4663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65939dbf0bbd8377f86123944c39bf8ad70cb91aed735bdd8a7fdd5fa44e4663->enter($__internal_65939dbf0bbd8377f86123944c39bf8ad70cb91aed735bdd8a7fdd5fa44e4663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1a563cb1ad256253653184ecda64a88e4e7a2f576c084dc5a99d50aeed4dd374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a563cb1ad256253653184ecda64a88e4e7a2f576c084dc5a99d50aeed4dd374->enter($__internal_1a563cb1ad256253653184ecda64a88e4e7a2f576c084dc5a99d50aeed4dd374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1a563cb1ad256253653184ecda64a88e4e7a2f576c084dc5a99d50aeed4dd374->leave($__internal_1a563cb1ad256253653184ecda64a88e4e7a2f576c084dc5a99d50aeed4dd374_prof);

        
        $__internal_65939dbf0bbd8377f86123944c39bf8ad70cb91aed735bdd8a7fdd5fa44e4663->leave($__internal_65939dbf0bbd8377f86123944c39bf8ad70cb91aed735bdd8a7fdd5fa44e4663_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ef8321425e02166d4f8dda60e6154139049b53a7a85f870c9c4b3d8473e83891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef8321425e02166d4f8dda60e6154139049b53a7a85f870c9c4b3d8473e83891->enter($__internal_ef8321425e02166d4f8dda60e6154139049b53a7a85f870c9c4b3d8473e83891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f2b62d5ad4279dc30c81c9b74825b39d054d0af99af69768616e34d233e3ec5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2b62d5ad4279dc30c81c9b74825b39d054d0af99af69768616e34d233e3ec5d->enter($__internal_f2b62d5ad4279dc30c81c9b74825b39d054d0af99af69768616e34d233e3ec5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f2b62d5ad4279dc30c81c9b74825b39d054d0af99af69768616e34d233e3ec5d->leave($__internal_f2b62d5ad4279dc30c81c9b74825b39d054d0af99af69768616e34d233e3ec5d_prof);

        
        $__internal_ef8321425e02166d4f8dda60e6154139049b53a7a85f870c9c4b3d8473e83891->leave($__internal_ef8321425e02166d4f8dda60e6154139049b53a7a85f870c9c4b3d8473e83891_prof);

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
