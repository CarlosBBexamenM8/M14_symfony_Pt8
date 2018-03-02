<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_8142be88f30ddc2e15c390a592bfe4d1edcf12b006788748e7c1a989bb635821 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6aebc3aadec463ac1e6ea7b0600bd61806eb99b2e31323219b7189e5f33bff12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6aebc3aadec463ac1e6ea7b0600bd61806eb99b2e31323219b7189e5f33bff12->enter($__internal_6aebc3aadec463ac1e6ea7b0600bd61806eb99b2e31323219b7189e5f33bff12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_baf01d781c9636786e17765318d40bde6de85c3d228bda2e35379b2994a95c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baf01d781c9636786e17765318d40bde6de85c3d228bda2e35379b2994a95c33->enter($__internal_baf01d781c9636786e17765318d40bde6de85c3d228bda2e35379b2994a95c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_6aebc3aadec463ac1e6ea7b0600bd61806eb99b2e31323219b7189e5f33bff12->leave($__internal_6aebc3aadec463ac1e6ea7b0600bd61806eb99b2e31323219b7189e5f33bff12_prof);

        
        $__internal_baf01d781c9636786e17765318d40bde6de85c3d228bda2e35379b2994a95c33->leave($__internal_baf01d781c9636786e17765318d40bde6de85c3d228bda2e35379b2994a95c33_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_45ff99723cd77aecd9cef00568a8cc99b725921eaf4e068aefa7f615b871870f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45ff99723cd77aecd9cef00568a8cc99b725921eaf4e068aefa7f615b871870f->enter($__internal_45ff99723cd77aecd9cef00568a8cc99b725921eaf4e068aefa7f615b871870f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_99198a81e3929d1175f7481a93c14dcfbfb31119a9bec5b2e95011e7043e9326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99198a81e3929d1175f7481a93c14dcfbfb31119a9bec5b2e95011e7043e9326->enter($__internal_99198a81e3929d1175f7481a93c14dcfbfb31119a9bec5b2e95011e7043e9326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_99198a81e3929d1175f7481a93c14dcfbfb31119a9bec5b2e95011e7043e9326->leave($__internal_99198a81e3929d1175f7481a93c14dcfbfb31119a9bec5b2e95011e7043e9326_prof);

        
        $__internal_45ff99723cd77aecd9cef00568a8cc99b725921eaf4e068aefa7f615b871870f->leave($__internal_45ff99723cd77aecd9cef00568a8cc99b725921eaf4e068aefa7f615b871870f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_2917ce2161f8b1d6f5ebcf3d32d34c56784d6a229e4e5a6efd92b606fa39c74d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2917ce2161f8b1d6f5ebcf3d32d34c56784d6a229e4e5a6efd92b606fa39c74d->enter($__internal_2917ce2161f8b1d6f5ebcf3d32d34c56784d6a229e4e5a6efd92b606fa39c74d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c7fa8e9e5d75fc58b0ad63351f86d7828a69bc85501e893c97fa056924f894e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7fa8e9e5d75fc58b0ad63351f86d7828a69bc85501e893c97fa056924f894e6->enter($__internal_c7fa8e9e5d75fc58b0ad63351f86d7828a69bc85501e893c97fa056924f894e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_c7fa8e9e5d75fc58b0ad63351f86d7828a69bc85501e893c97fa056924f894e6->leave($__internal_c7fa8e9e5d75fc58b0ad63351f86d7828a69bc85501e893c97fa056924f894e6_prof);

        
        $__internal_2917ce2161f8b1d6f5ebcf3d32d34c56784d6a229e4e5a6efd92b606fa39c74d->leave($__internal_2917ce2161f8b1d6f5ebcf3d32d34c56784d6a229e4e5a6efd92b606fa39c74d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_196088cd4d688b5196360a3950409c0047cd89420d100d4c19f75c8706a7e607 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_196088cd4d688b5196360a3950409c0047cd89420d100d4c19f75c8706a7e607->enter($__internal_196088cd4d688b5196360a3950409c0047cd89420d100d4c19f75c8706a7e607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4a65219bcf92d52864d158ffedf74da3a6cc31611e3c4f770deb6cf88b10d9ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a65219bcf92d52864d158ffedf74da3a6cc31611e3c4f770deb6cf88b10d9ff->enter($__internal_4a65219bcf92d52864d158ffedf74da3a6cc31611e3c4f770deb6cf88b10d9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4a65219bcf92d52864d158ffedf74da3a6cc31611e3c4f770deb6cf88b10d9ff->leave($__internal_4a65219bcf92d52864d158ffedf74da3a6cc31611e3c4f770deb6cf88b10d9ff_prof);

        
        $__internal_196088cd4d688b5196360a3950409c0047cd89420d100d4c19f75c8706a7e607->leave($__internal_196088cd4d688b5196360a3950409c0047cd89420d100d4c19f75c8706a7e607_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/opt/lampp/htdocs/M14_symfony_Pt8/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
