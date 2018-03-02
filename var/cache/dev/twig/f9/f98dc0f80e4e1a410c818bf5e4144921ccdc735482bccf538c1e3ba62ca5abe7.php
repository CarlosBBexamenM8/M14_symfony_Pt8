<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c87710f357776402c9631da4bda3850b78ef8adca6273d8bd36cbe5e2fe827f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1ce809d73b8aea99163a31995230505f02f844b34efa0be39dfedf46f7372bb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ce809d73b8aea99163a31995230505f02f844b34efa0be39dfedf46f7372bb7->enter($__internal_1ce809d73b8aea99163a31995230505f02f844b34efa0be39dfedf46f7372bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9ee6090e64d3f01bca5815167e41d43adcd000cd7854ee9eedfca1886c67120c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ee6090e64d3f01bca5815167e41d43adcd000cd7854ee9eedfca1886c67120c->enter($__internal_9ee6090e64d3f01bca5815167e41d43adcd000cd7854ee9eedfca1886c67120c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ce809d73b8aea99163a31995230505f02f844b34efa0be39dfedf46f7372bb7->leave($__internal_1ce809d73b8aea99163a31995230505f02f844b34efa0be39dfedf46f7372bb7_prof);

        
        $__internal_9ee6090e64d3f01bca5815167e41d43adcd000cd7854ee9eedfca1886c67120c->leave($__internal_9ee6090e64d3f01bca5815167e41d43adcd000cd7854ee9eedfca1886c67120c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5736e27c9fb95bf27ef43f727bf619839e7f97eade1393e9d847d47a2cb58ab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5736e27c9fb95bf27ef43f727bf619839e7f97eade1393e9d847d47a2cb58ab2->enter($__internal_5736e27c9fb95bf27ef43f727bf619839e7f97eade1393e9d847d47a2cb58ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c945993a64631962ec4d1dae75e66490dd00b4a68b83efc64c36dac7b56c8f9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c945993a64631962ec4d1dae75e66490dd00b4a68b83efc64c36dac7b56c8f9c->enter($__internal_c945993a64631962ec4d1dae75e66490dd00b4a68b83efc64c36dac7b56c8f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c945993a64631962ec4d1dae75e66490dd00b4a68b83efc64c36dac7b56c8f9c->leave($__internal_c945993a64631962ec4d1dae75e66490dd00b4a68b83efc64c36dac7b56c8f9c_prof);

        
        $__internal_5736e27c9fb95bf27ef43f727bf619839e7f97eade1393e9d847d47a2cb58ab2->leave($__internal_5736e27c9fb95bf27ef43f727bf619839e7f97eade1393e9d847d47a2cb58ab2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c9dc8901a5e775cbac6cbe3331d4523ca02f27c45ade476c288e719f5b6e9c8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9dc8901a5e775cbac6cbe3331d4523ca02f27c45ade476c288e719f5b6e9c8b->enter($__internal_c9dc8901a5e775cbac6cbe3331d4523ca02f27c45ade476c288e719f5b6e9c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9a164a042cace8226d72f1757ce8fd4f954b4e5f338cfe8233ddc05626b9c0f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a164a042cace8226d72f1757ce8fd4f954b4e5f338cfe8233ddc05626b9c0f5->enter($__internal_9a164a042cace8226d72f1757ce8fd4f954b4e5f338cfe8233ddc05626b9c0f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9a164a042cace8226d72f1757ce8fd4f954b4e5f338cfe8233ddc05626b9c0f5->leave($__internal_9a164a042cace8226d72f1757ce8fd4f954b4e5f338cfe8233ddc05626b9c0f5_prof);

        
        $__internal_c9dc8901a5e775cbac6cbe3331d4523ca02f27c45ade476c288e719f5b6e9c8b->leave($__internal_c9dc8901a5e775cbac6cbe3331d4523ca02f27c45ade476c288e719f5b6e9c8b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_42e2aeb5451cdf7602abdc823451b8c24abb67034c779e9ffbe4528202284120 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42e2aeb5451cdf7602abdc823451b8c24abb67034c779e9ffbe4528202284120->enter($__internal_42e2aeb5451cdf7602abdc823451b8c24abb67034c779e9ffbe4528202284120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_412d3e22d1b99a99d8705038999f9363efe8ff97761f8a71a238570e17646e86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_412d3e22d1b99a99d8705038999f9363efe8ff97761f8a71a238570e17646e86->enter($__internal_412d3e22d1b99a99d8705038999f9363efe8ff97761f8a71a238570e17646e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_412d3e22d1b99a99d8705038999f9363efe8ff97761f8a71a238570e17646e86->leave($__internal_412d3e22d1b99a99d8705038999f9363efe8ff97761f8a71a238570e17646e86_prof);

        
        $__internal_42e2aeb5451cdf7602abdc823451b8c24abb67034c779e9ffbe4528202284120->leave($__internal_42e2aeb5451cdf7602abdc823451b8c24abb67034c779e9ffbe4528202284120_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/opt/lampp/htdocs/M14_symfony_Pt8/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
