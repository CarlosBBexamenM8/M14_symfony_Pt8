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
        $__internal_2dcfa5b57b4a33b3009d2b4b428550456b2baf07ae4a15b5ab4074b9bf1c301d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dcfa5b57b4a33b3009d2b4b428550456b2baf07ae4a15b5ab4074b9bf1c301d->enter($__internal_2dcfa5b57b4a33b3009d2b4b428550456b2baf07ae4a15b5ab4074b9bf1c301d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_77656ee0ee9e7b0c3e6ab03f3608418d97399c970b9f65ede5381ab551d608a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77656ee0ee9e7b0c3e6ab03f3608418d97399c970b9f65ede5381ab551d608a6->enter($__internal_77656ee0ee9e7b0c3e6ab03f3608418d97399c970b9f65ede5381ab551d608a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2dcfa5b57b4a33b3009d2b4b428550456b2baf07ae4a15b5ab4074b9bf1c301d->leave($__internal_2dcfa5b57b4a33b3009d2b4b428550456b2baf07ae4a15b5ab4074b9bf1c301d_prof);

        
        $__internal_77656ee0ee9e7b0c3e6ab03f3608418d97399c970b9f65ede5381ab551d608a6->leave($__internal_77656ee0ee9e7b0c3e6ab03f3608418d97399c970b9f65ede5381ab551d608a6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_449a5614f4c3243021c80bee4d04b2f60c9e98105db39a9e59cb9a86dccf2c8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_449a5614f4c3243021c80bee4d04b2f60c9e98105db39a9e59cb9a86dccf2c8c->enter($__internal_449a5614f4c3243021c80bee4d04b2f60c9e98105db39a9e59cb9a86dccf2c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f8919610beed65b763d141d9de13b8067d90c3aa07fc62009724c17827ce657e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8919610beed65b763d141d9de13b8067d90c3aa07fc62009724c17827ce657e->enter($__internal_f8919610beed65b763d141d9de13b8067d90c3aa07fc62009724c17827ce657e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f8919610beed65b763d141d9de13b8067d90c3aa07fc62009724c17827ce657e->leave($__internal_f8919610beed65b763d141d9de13b8067d90c3aa07fc62009724c17827ce657e_prof);

        
        $__internal_449a5614f4c3243021c80bee4d04b2f60c9e98105db39a9e59cb9a86dccf2c8c->leave($__internal_449a5614f4c3243021c80bee4d04b2f60c9e98105db39a9e59cb9a86dccf2c8c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b3a8def19439e11123b5dee72080f129884ec1117edca9fd45fb590ff15533af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3a8def19439e11123b5dee72080f129884ec1117edca9fd45fb590ff15533af->enter($__internal_b3a8def19439e11123b5dee72080f129884ec1117edca9fd45fb590ff15533af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ea99290a7cb0dbd5ce29a94167b8bb9921cdc9bcfea007624e0f69b6867650b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea99290a7cb0dbd5ce29a94167b8bb9921cdc9bcfea007624e0f69b6867650b3->enter($__internal_ea99290a7cb0dbd5ce29a94167b8bb9921cdc9bcfea007624e0f69b6867650b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ea99290a7cb0dbd5ce29a94167b8bb9921cdc9bcfea007624e0f69b6867650b3->leave($__internal_ea99290a7cb0dbd5ce29a94167b8bb9921cdc9bcfea007624e0f69b6867650b3_prof);

        
        $__internal_b3a8def19439e11123b5dee72080f129884ec1117edca9fd45fb590ff15533af->leave($__internal_b3a8def19439e11123b5dee72080f129884ec1117edca9fd45fb590ff15533af_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_49fcb0dc535ce7a8e13747403a5f8b26aba1d7d9aabef5105eb827293fd7e124 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49fcb0dc535ce7a8e13747403a5f8b26aba1d7d9aabef5105eb827293fd7e124->enter($__internal_49fcb0dc535ce7a8e13747403a5f8b26aba1d7d9aabef5105eb827293fd7e124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_056307dcc678e0f2deac9d3c1a22180360688ef7e8133ce955469a0dc2bcd5cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_056307dcc678e0f2deac9d3c1a22180360688ef7e8133ce955469a0dc2bcd5cb->enter($__internal_056307dcc678e0f2deac9d3c1a22180360688ef7e8133ce955469a0dc2bcd5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_056307dcc678e0f2deac9d3c1a22180360688ef7e8133ce955469a0dc2bcd5cb->leave($__internal_056307dcc678e0f2deac9d3c1a22180360688ef7e8133ce955469a0dc2bcd5cb_prof);

        
        $__internal_49fcb0dc535ce7a8e13747403a5f8b26aba1d7d9aabef5105eb827293fd7e124->leave($__internal_49fcb0dc535ce7a8e13747403a5f8b26aba1d7d9aabef5105eb827293fd7e124_prof);

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
