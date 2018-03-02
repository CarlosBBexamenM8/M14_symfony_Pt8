<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_a05233c31873a2c7a602c8c33937db8c6f18d1c7b22a7be75fecd8e7140fb33f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_078b372d7d271b15572e399035cc6d6336af4b0c038a48a804364f4389745d33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_078b372d7d271b15572e399035cc6d6336af4b0c038a48a804364f4389745d33->enter($__internal_078b372d7d271b15572e399035cc6d6336af4b0c038a48a804364f4389745d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_a9b6fb7a8f453aacdd6015dcc1855ddf8b47708987b6a45c4e5b9d9d2a3c548b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b6fb7a8f453aacdd6015dcc1855ddf8b47708987b6a45c4e5b9d9d2a3c548b->enter($__internal_a9b6fb7a8f453aacdd6015dcc1855ddf8b47708987b6a45c4e5b9d9d2a3c548b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_078b372d7d271b15572e399035cc6d6336af4b0c038a48a804364f4389745d33->leave($__internal_078b372d7d271b15572e399035cc6d6336af4b0c038a48a804364f4389745d33_prof);

        
        $__internal_a9b6fb7a8f453aacdd6015dcc1855ddf8b47708987b6a45c4e5b9d9d2a3c548b->leave($__internal_a9b6fb7a8f453aacdd6015dcc1855ddf8b47708987b6a45c4e5b9d9d2a3c548b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_be914ed0d3300b22f678c5dca4d0f0f9e89ca89b6b795fa7e8cbcde851e6cfe9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be914ed0d3300b22f678c5dca4d0f0f9e89ca89b6b795fa7e8cbcde851e6cfe9->enter($__internal_be914ed0d3300b22f678c5dca4d0f0f9e89ca89b6b795fa7e8cbcde851e6cfe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9020c1ff6319e4a6fff340ff7194468efac2874e7b22fbfda1d31b88f63faba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9020c1ff6319e4a6fff340ff7194468efac2874e7b22fbfda1d31b88f63faba8->enter($__internal_9020c1ff6319e4a6fff340ff7194468efac2874e7b22fbfda1d31b88f63faba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_9020c1ff6319e4a6fff340ff7194468efac2874e7b22fbfda1d31b88f63faba8->leave($__internal_9020c1ff6319e4a6fff340ff7194468efac2874e7b22fbfda1d31b88f63faba8_prof);

        
        $__internal_be914ed0d3300b22f678c5dca4d0f0f9e89ca89b6b795fa7e8cbcde851e6cfe9->leave($__internal_be914ed0d3300b22f678c5dca4d0f0f9e89ca89b6b795fa7e8cbcde851e6cfe9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/opt/lampp/htdocs/M14_symfony_Pt8/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
