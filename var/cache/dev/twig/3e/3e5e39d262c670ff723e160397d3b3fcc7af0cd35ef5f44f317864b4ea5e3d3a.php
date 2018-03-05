<?php

/* base.html.twig */
class __TwigTemplate_70f2ea4d9ba6befff2419e33e81e4263a6a39804101f8049eb9b3bfd1f26a548 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0532d5ea58252d1ce2ccfed568123f007d2d78487b028f927e1d8bd2416613a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0532d5ea58252d1ce2ccfed568123f007d2d78487b028f927e1d8bd2416613a9->enter($__internal_0532d5ea58252d1ce2ccfed568123f007d2d78487b028f927e1d8bd2416613a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7ed01b65ae0e30cbc76a8658c1742a6f0c3ce7841982d479d8f42fe1ac93ba7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ed01b65ae0e30cbc76a8658c1742a6f0c3ce7841982d479d8f42fe1ac93ba7e->enter($__internal_7ed01b65ae0e30cbc76a8658c1742a6f0c3ce7841982d479d8f42fe1ac93ba7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_0532d5ea58252d1ce2ccfed568123f007d2d78487b028f927e1d8bd2416613a9->leave($__internal_0532d5ea58252d1ce2ccfed568123f007d2d78487b028f927e1d8bd2416613a9_prof);

        
        $__internal_7ed01b65ae0e30cbc76a8658c1742a6f0c3ce7841982d479d8f42fe1ac93ba7e->leave($__internal_7ed01b65ae0e30cbc76a8658c1742a6f0c3ce7841982d479d8f42fe1ac93ba7e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_391322aa539267adc1a14e56d31efc67e9e81179f7439729df0ed55f08e28f95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_391322aa539267adc1a14e56d31efc67e9e81179f7439729df0ed55f08e28f95->enter($__internal_391322aa539267adc1a14e56d31efc67e9e81179f7439729df0ed55f08e28f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c2779f7b1461628b0b9b13d69c2c6e2e60d735cc7e4aa83b62fe2e0160e0d27e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2779f7b1461628b0b9b13d69c2c6e2e60d735cc7e4aa83b62fe2e0160e0d27e->enter($__internal_c2779f7b1461628b0b9b13d69c2c6e2e60d735cc7e4aa83b62fe2e0160e0d27e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c2779f7b1461628b0b9b13d69c2c6e2e60d735cc7e4aa83b62fe2e0160e0d27e->leave($__internal_c2779f7b1461628b0b9b13d69c2c6e2e60d735cc7e4aa83b62fe2e0160e0d27e_prof);

        
        $__internal_391322aa539267adc1a14e56d31efc67e9e81179f7439729df0ed55f08e28f95->leave($__internal_391322aa539267adc1a14e56d31efc67e9e81179f7439729df0ed55f08e28f95_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d6db055531290a93a4d1374fb095266e3a494100a628eb6bf34c81c5a61cdc43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6db055531290a93a4d1374fb095266e3a494100a628eb6bf34c81c5a61cdc43->enter($__internal_d6db055531290a93a4d1374fb095266e3a494100a628eb6bf34c81c5a61cdc43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2a6c105df3bb11bd8a24418391b17977a10dd7dabdffca6ee71fb9a20f64397f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a6c105df3bb11bd8a24418391b17977a10dd7dabdffca6ee71fb9a20f64397f->enter($__internal_2a6c105df3bb11bd8a24418391b17977a10dd7dabdffca6ee71fb9a20f64397f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2a6c105df3bb11bd8a24418391b17977a10dd7dabdffca6ee71fb9a20f64397f->leave($__internal_2a6c105df3bb11bd8a24418391b17977a10dd7dabdffca6ee71fb9a20f64397f_prof);

        
        $__internal_d6db055531290a93a4d1374fb095266e3a494100a628eb6bf34c81c5a61cdc43->leave($__internal_d6db055531290a93a4d1374fb095266e3a494100a628eb6bf34c81c5a61cdc43_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_738e593f490f02eaf3b6feda5b9d408522b3bd5561d491ef244bfe3808bf7504 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_738e593f490f02eaf3b6feda5b9d408522b3bd5561d491ef244bfe3808bf7504->enter($__internal_738e593f490f02eaf3b6feda5b9d408522b3bd5561d491ef244bfe3808bf7504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_161c54d777f52b00258eceddbb2790605b8369052cc149b69311b7ef57e42c70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_161c54d777f52b00258eceddbb2790605b8369052cc149b69311b7ef57e42c70->enter($__internal_161c54d777f52b00258eceddbb2790605b8369052cc149b69311b7ef57e42c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_161c54d777f52b00258eceddbb2790605b8369052cc149b69311b7ef57e42c70->leave($__internal_161c54d777f52b00258eceddbb2790605b8369052cc149b69311b7ef57e42c70_prof);

        
        $__internal_738e593f490f02eaf3b6feda5b9d408522b3bd5561d491ef244bfe3808bf7504->leave($__internal_738e593f490f02eaf3b6feda5b9d408522b3bd5561d491ef244bfe3808bf7504_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5a34f9fb04d087df6389fc78a2106ed56e714af526263f3c220ce9b49be16a65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a34f9fb04d087df6389fc78a2106ed56e714af526263f3c220ce9b49be16a65->enter($__internal_5a34f9fb04d087df6389fc78a2106ed56e714af526263f3c220ce9b49be16a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b201d9b6b154ff8df32451d58c4e362b7a361a1b2d3c588dcf0608debdc8002d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b201d9b6b154ff8df32451d58c4e362b7a361a1b2d3c588dcf0608debdc8002d->enter($__internal_b201d9b6b154ff8df32451d58c4e362b7a361a1b2d3c588dcf0608debdc8002d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b201d9b6b154ff8df32451d58c4e362b7a361a1b2d3c588dcf0608debdc8002d->leave($__internal_b201d9b6b154ff8df32451d58c4e362b7a361a1b2d3c588dcf0608debdc8002d_prof);

        
        $__internal_5a34f9fb04d087df6389fc78a2106ed56e714af526263f3c220ce9b49be16a65->leave($__internal_5a34f9fb04d087df6389fc78a2106ed56e714af526263f3c220ce9b49be16a65_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/opt/lampp/htdocs/M14_symfony_Pt8/app/Resources/views/base.html.twig");
    }
}
