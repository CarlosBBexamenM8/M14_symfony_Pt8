<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ccf06df31639b7c9b2857bbf3c5e82ca65ad8846bad8b03705b504d691c84a56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b80963e44a9f5a170c47405fa712c550f9ee006dfa431b10737fc21631d21a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b80963e44a9f5a170c47405fa712c550f9ee006dfa431b10737fc21631d21a5->enter($__internal_2b80963e44a9f5a170c47405fa712c550f9ee006dfa431b10737fc21631d21a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_2c3d910e56e0e8d8129cd22555cb25a608574da3fd360fbcfa832f1553052cca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c3d910e56e0e8d8129cd22555cb25a608574da3fd360fbcfa832f1553052cca->enter($__internal_2c3d910e56e0e8d8129cd22555cb25a608574da3fd360fbcfa832f1553052cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b80963e44a9f5a170c47405fa712c550f9ee006dfa431b10737fc21631d21a5->leave($__internal_2b80963e44a9f5a170c47405fa712c550f9ee006dfa431b10737fc21631d21a5_prof);

        
        $__internal_2c3d910e56e0e8d8129cd22555cb25a608574da3fd360fbcfa832f1553052cca->leave($__internal_2c3d910e56e0e8d8129cd22555cb25a608574da3fd360fbcfa832f1553052cca_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e3b7e696bac9746e53794866bc4937bc45b123b53bff4f4bd2fcb65ad3b49396 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3b7e696bac9746e53794866bc4937bc45b123b53bff4f4bd2fcb65ad3b49396->enter($__internal_e3b7e696bac9746e53794866bc4937bc45b123b53bff4f4bd2fcb65ad3b49396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c6d4f532940abef7d5b8fc401f3429f4582a74ebeaad2ebea4b129fe8612c241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6d4f532940abef7d5b8fc401f3429f4582a74ebeaad2ebea4b129fe8612c241->enter($__internal_c6d4f532940abef7d5b8fc401f3429f4582a74ebeaad2ebea4b129fe8612c241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_c6d4f532940abef7d5b8fc401f3429f4582a74ebeaad2ebea4b129fe8612c241->leave($__internal_c6d4f532940abef7d5b8fc401f3429f4582a74ebeaad2ebea4b129fe8612c241_prof);

        
        $__internal_e3b7e696bac9746e53794866bc4937bc45b123b53bff4f4bd2fcb65ad3b49396->leave($__internal_e3b7e696bac9746e53794866bc4937bc45b123b53bff4f4bd2fcb65ad3b49396_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_0338aca7d787db1a716ca34229d4b0e6b349b9c456b6dc1d94a13161c7ac070b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0338aca7d787db1a716ca34229d4b0e6b349b9c456b6dc1d94a13161c7ac070b->enter($__internal_0338aca7d787db1a716ca34229d4b0e6b349b9c456b6dc1d94a13161c7ac070b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bb16b4e27f29d4e7fdf556f1390f6a1e5a61a4af081e04657793582a2fb87dda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb16b4e27f29d4e7fdf556f1390f6a1e5a61a4af081e04657793582a2fb87dda->enter($__internal_bb16b4e27f29d4e7fdf556f1390f6a1e5a61a4af081e04657793582a2fb87dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bb16b4e27f29d4e7fdf556f1390f6a1e5a61a4af081e04657793582a2fb87dda->leave($__internal_bb16b4e27f29d4e7fdf556f1390f6a1e5a61a4af081e04657793582a2fb87dda_prof);

        
        $__internal_0338aca7d787db1a716ca34229d4b0e6b349b9c456b6dc1d94a13161c7ac070b->leave($__internal_0338aca7d787db1a716ca34229d4b0e6b349b9c456b6dc1d94a13161c7ac070b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f60e1f5904341e1ec4adf635196b9f35e63b33e3e6ddabcadfece0e88a8ff742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f60e1f5904341e1ec4adf635196b9f35e63b33e3e6ddabcadfece0e88a8ff742->enter($__internal_f60e1f5904341e1ec4adf635196b9f35e63b33e3e6ddabcadfece0e88a8ff742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_20be9f5184e6d1d68e2b383ad053d46c6ac480288edee434e1a370eded58f0f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20be9f5184e6d1d68e2b383ad053d46c6ac480288edee434e1a370eded58f0f0->enter($__internal_20be9f5184e6d1d68e2b383ad053d46c6ac480288edee434e1a370eded58f0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_20be9f5184e6d1d68e2b383ad053d46c6ac480288edee434e1a370eded58f0f0->leave($__internal_20be9f5184e6d1d68e2b383ad053d46c6ac480288edee434e1a370eded58f0f0_prof);

        
        $__internal_f60e1f5904341e1ec4adf635196b9f35e63b33e3e6ddabcadfece0e88a8ff742->leave($__internal_f60e1f5904341e1ec4adf635196b9f35e63b33e3e6ddabcadfece0e88a8ff742_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/opt/lampp/htdocs/M14_symfony_Pt8/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
