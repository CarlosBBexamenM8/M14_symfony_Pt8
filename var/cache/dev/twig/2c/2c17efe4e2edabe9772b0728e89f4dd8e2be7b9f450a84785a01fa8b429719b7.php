<?php

/* GestorGestoriaBundle:Default:index.html.twig */
class __TwigTemplate_f428cc2a069d29cc38ca415650b5a0bd075c8f615a56775b7b9336f441c62a1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "GestorGestoriaBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_144ac8ed231a2e37d3262be0415639fff113232eb2567df4e9174e670d5fc9a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_144ac8ed231a2e37d3262be0415639fff113232eb2567df4e9174e670d5fc9a8->enter($__internal_144ac8ed231a2e37d3262be0415639fff113232eb2567df4e9174e670d5fc9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorGestoriaBundle:Default:index.html.twig"));

        $__internal_c14a82799678dfa50271f9108db8a7ad9d8039ec592e27fc8c737973fe129a8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c14a82799678dfa50271f9108db8a7ad9d8039ec592e27fc8c737973fe129a8d->enter($__internal_c14a82799678dfa50271f9108db8a7ad9d8039ec592e27fc8c737973fe129a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorGestoriaBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_144ac8ed231a2e37d3262be0415639fff113232eb2567df4e9174e670d5fc9a8->leave($__internal_144ac8ed231a2e37d3262be0415639fff113232eb2567df4e9174e670d5fc9a8_prof);

        
        $__internal_c14a82799678dfa50271f9108db8a7ad9d8039ec592e27fc8c737973fe129a8d->leave($__internal_c14a82799678dfa50271f9108db8a7ad9d8039ec592e27fc8c737973fe129a8d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2672cafc88d7925c5ecbfdcd06f6a9686dcb728b306d514f0823be233591466e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2672cafc88d7925c5ecbfdcd06f6a9686dcb728b306d514f0823be233591466e->enter($__internal_2672cafc88d7925c5ecbfdcd06f6a9686dcb728b306d514f0823be233591466e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2913fea6199deb212646f086db7393fa8d9a6726b78dfb0b425f32453973f2d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2913fea6199deb212646f086db7393fa8d9a6726b78dfb0b425f32453973f2d3->enter($__internal_2913fea6199deb212646f086db7393fa8d9a6726b78dfb0b425f32453973f2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>
        <table>
            <tr>
                <td><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestor_gestoria_form_tasca");
        echo "\">Form Tasca</a></td>
            </tr>
            <tr>
                <td><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestor_gestoria_form_subtasca");
        echo "\">Form Subtasca</a></td>
            </tr>
            <tr>
                <td><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestor_gestoria_form_usuari");
        echo "\">Form Usuari</a></td>
            </tr>
            <tr>
                <td><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestor_gestoria_mostrar");
        echo "\">Mostrar</a></td>
            </tr>
        </table>
    </div>
";
        
        $__internal_2913fea6199deb212646f086db7393fa8d9a6726b78dfb0b425f32453973f2d3->leave($__internal_2913fea6199deb212646f086db7393fa8d9a6726b78dfb0b425f32453973f2d3_prof);

        
        $__internal_2672cafc88d7925c5ecbfdcd06f6a9686dcb728b306d514f0823be233591466e->leave($__internal_2672cafc88d7925c5ecbfdcd06f6a9686dcb728b306d514f0823be233591466e_prof);

    }

    public function getTemplateName()
    {
        return "GestorGestoriaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 16,  66 => 13,  60 => 10,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div>
        <table>
            <tr>
                <td><a href=\"{{ path('gestor_gestoria_form_tasca')}}\">Form Tasca</a></td>
            </tr>
            <tr>
                <td><a href=\"{{ path('gestor_gestoria_form_subtasca')}}\">Form Subtasca</a></td>
            </tr>
            <tr>
                <td><a href=\"{{ path('gestor_gestoria_form_usuari')}}\">Form Usuari</a></td>
            </tr>
            <tr>
                <td><a href=\"{{ path('gestor_gestoria_mostrar')}}\">Mostrar</a></td>
            </tr>
        </table>
    </div>
{% endblock %}

", "GestorGestoriaBundle:Default:index.html.twig", "/opt/lampp/htdocs/M14_symfony_Pt8/src/Gestor/GestoriaBundle/Resources/views/Default/index.html.twig");
    }
}
