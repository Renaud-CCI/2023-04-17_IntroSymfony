<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_821dfb006c0f708a776ac3e3e28b1568 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Cagnot'potes";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

<div class=\"parallax-container hero-banner valign-wrapper\">
\t<div class=\"section no-pad-bot\">
\t\t<div class=\"container\">
\t\t\t<div class=\"hide-on-med-and-down\">
\t\t\t\t<h1 class=\"header center white-text light\">Un cadeau commun à organiser?</h1>
\t\t\t\t<div class=\"row center\">
\t\t\t\t\t<h5 class=\"header col s12 light\">Anniversaire, pot de départ, crémaillère... N'avancez plus les frais !</h5>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"hide-on-large-only\">
\t\t\t\t<div class=\"row center\">
\t\t\t\t\t<h5 class=\"header col s12 light\">Un cadeau commun à organiser ?</h5>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"card col s12 m12 l8 offset-l2\">
\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t<div class=\"input-field col s12 l8\">
\t\t\t\t\t\t\t<input id=\"cag_name\" type=\"text\" class=\"validate\">
\t\t\t\t\t\t\t<label for=\"cag_name\">Nommez votre nouvelle campagne</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"create.html\" class=\"btn-large waves-effect waves-light pink lighten-1 col s12 l4\">Valider</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<br><br>

\t\t</div>
\t</div>

\t<div class=\"parallax\"><img src=\"assets/images/11.jpg\" alt=\"Anniversaire, pot de départ, crémaillère... N'avancez plus les frais !\">
\t</div>
</div>

<div class=\"container\">
\t<div class=\"section\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col s12 center\">
\t\t\t\t<h4>Comment ça marche ?</h4>
\t\t\t</div>
\t\t</div>
\t\t<!--   Icon Section   -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col s12 m4\">
\t\t\t\t<div class=\"icon-block center\">
\t\t\t\t\t<div class=\"btn-large btn-floating white\"><i class=\"material-icons teal-text\">create</i>
\t\t\t\t\t</div>
\t\t\t\t\t<h5 class=\"center\">Créez</h5>
\t\t\t\t\t<p class=\"light\">et personnalisez votre campagne commune en 30 secondes !</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col s12 m4\">
\t\t\t\t<div class=\"icon-block center\">
\t\t\t\t\t<div class=\"btn-large btn-floating white\"><i class=\"material-icons teal-text\">wc</i>
\t\t\t\t\t</div>
\t\t\t\t\t<h5 class=\"center\">Invitez</h5>
\t\t\t\t\t<p class=\"light\">vos amis en utilisant les réseaux sociaux, mail, etc.</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col s12 m4\">
\t\t\t\t<div class=\"icon-block center\">
\t\t\t\t\t<div class=\"btn-large btn-floating white\"><i class=\"material-icons teal-text\">shopping_cart</i>
\t\t\t\t\t</div>
\t\t\t\t\t<h5 class=\"center\">Collectez</h5>
\t\t\t\t\t<p class=\"light\">et utilisez l'argent comme bon vous semble avec vos amis.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</div>
</div>

<div class=\"parallax-container valign-wrapper\">
\t<div class=\"section no-pad-bot\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row center\">
\t\t\t\t<h4 class=\"header col s12 light\">Une campagne pensée pour vous<br>et pour toutes les occasions</h4>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"parallax\"><img src=\"assets/images/10.jpg\" alt=\"Une campagne pensée pour vous\">
\t</div>
</div>

<div class=\"container\">
\t<div class=\"section\">

\t\t<div class=\"row\">
\t\t\t<div class=\"col s12 center\">
\t\t\t\t<h4>les campagnes du moment</h4>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col s12\">
\t\t\t\t<div class=\"carousel\">
\t\t\t\t\t<a class=\"carousel-item\" href=\"#one!\">
\t\t\t\t\t\t<div class=\"card center\">
\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t<span class=\"card-title teal-text\">Titre campagne</span>
\t\t\t\t\t\t\t\t<p class=\"black-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-action\">
\t\t\t\t\t\t\t\t<div class=\"row black-text\">
\t\t\t\t\t\t\t\t\t<div class=\"col s6\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons teal-text\">account_circle</i> <b>12</b>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col s6\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons teal-text\">euro_symbol</i> <b>350</b>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t<div class=\"determinate\" style=\"width: 70%\">

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"carousel-item\" href=\"#two!\">
\t\t\t\t\t\t<div class=\"card center\">
\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t<span class=\"card-title teal-text\">Titre campagne</span>
\t\t\t\t\t\t\t\t<p class=\"black-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-action\">
\t\t\t\t\t\t\t\t<div class=\"row black-text\">
\t\t\t\t\t\t\t\t\t<div class=\"col s6\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons teal-text\">account_circle</i> <b>12</b>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col s6\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons teal-text\">euro_symbol</i> <b>350</b>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t<div class=\"determinate\" style=\"width: 70%\">

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>

\t\t\t\t\t<a class=\"carousel-item\" href=\"#three!\">
\t\t\t\t\t\t<div class=\"card center\">
\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t<span class=\"card-title teal-text\">Titre campagne</span>
\t\t\t\t\t\t\t\t<p class=\"black-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-action\">
\t\t\t\t\t\t\t\t<div class=\"row black-text\">
\t\t\t\t\t\t\t\t\t<div class=\"col s6\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons teal-text\">account_circle</i> <b>12</b>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col s6\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons teal-text\">euro_symbol</i> <b>350</b>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t<div class=\"determinate\" style=\"width: 70%\">

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"carousel-item\" href=\"#four!\">
\t\t\t\t\t\t<div class=\"card center\">
\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t<span class=\"card-title teal-text\">Titre campagne</span>
\t\t\t\t\t\t\t\t<p class=\"black-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-action\">
\t\t\t\t\t\t\t\t<div class=\"row black-text\">
\t\t\t\t\t\t\t\t\t<div class=\"col s6\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons teal-text\">account_circle</i> <b>12</b>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col s6\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons teal-text\">euro_symbol</i> <b>350</b>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t<div class=\"determinate\" style=\"width: 70%\">

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"carousel-item\" href=\"#five!\">
\t\t\t\t\t\t<div class=\"card center\">
\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t<span class=\"card-title teal-text\">Titre campagne</span>
\t\t\t\t\t\t\t\t<p class=\"black-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-action\">
\t\t\t\t\t\t\t\t<div class=\"row black-text\">
\t\t\t\t\t\t\t\t\t<div class=\"col s6\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons teal-text\">account_circle</i> <b>12</b>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col s6\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons teal-text\">euro_symbol</i> <b>350</b>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t<div class=\"determinate\" style=\"width: 70%\">

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Cagnot'potes{% endblock %}

{% block body %}


<div class=\"parallax-container hero-banner valign-wrapper\">
\t<div class=\"section no-pad-bot\">
\t\t<div class=\"container\">
\t\t\t<div class=\"hide-on-med-and-down\">
\t\t\t\t<h1 class=\"header center white-text light\">Un cadeau commun à organiser?</h1>
\t\t\t\t<div class=\"row center\">
\t\t\t\t\t<h5 class=\"header col s12 light\">Anniversaire, pot de départ, crémaillère... N'avancez plus les frais !</h5>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"hide-on-large-only\">
\t\t\t\t<div class=\"row center\">
\t\t\t\t\t<h5 class=\"header col s12 light\">Un cadeau commun à organiser ?</h5>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"card col s12 m12 l8 offset-l2\">
\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t<div class=\"input-field col s12 l8\">
\t\t\t\t\t\t\t<input id=\"cag_name\" type=\"text\" class=\"validate\">
\t\t\t\t\t\t\t<label for=\"cag_name\">Nommez votre nouvelle campagne</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"create.html\" class=\"btn-large waves-effect waves-light pink lighten-1 col s12 l4\">Valider</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<br><br>

\t\t</div>
\t</div>

\t<div class=\"parallax\"><img src=\"assets/images/11.jpg\" alt=\"Anniversaire, pot de départ, crémaillère... N'avancez plus les frais !\">
\t</div>
</div>

<div class=\"container\">
\t<div class=\"section\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col s12 center\">
\t\t\t\t<h4>Comment ça marche ?</h4>
\t\t\t</div>
\t\t</div>
\t\t<!--   Icon Section   -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col s12 m4\">
\t\t\t\t<div class=\"icon-block center\">
\t\t\t\t\t<div class=\"btn-large btn-floating white\"><i class=\"material-icons teal-text\">create</i>
\t\t\t\t\t</div>
\t\t\t\t\t<h5 class=\"center\">Créez</h5>
\t\t\t\t\t<p class=\"light\">et personnalisez votre campagne commune en 30 secondes !</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col s12 m4\">
\t\t\t\t<div class=\"icon-block center\">
\t\t\t\t\t<div class=\"btn-large btn-floating white\"><i class=\"material-icons teal-text\">wc</i>
\t\t\t\t\t</div>
\t\t\t\t\t<h5 class=\"center\">Invitez</h5>
\t\t\t\t\t<p class=\"light\">vos amis en utilisant les réseaux sociaux, mail, etc.</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col s12 m4\">
\t\t\t\t<div class=\"icon-block center\">
\t\t\t\t\t<div class=\"btn-large btn-floating white\"><i class=\"material-icons teal-text\">shopping_cart</i>
\t\t\t\t\t</div>
\t\t\t\t\t<h5 class=\"center\">Collectez</h5>
\t\t\t\t\t<p class=\"light\">et utilisez l'argent comme bon vous semble avec vos amis.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</div>
</div>

<div class=\"parallax-container valign-wrapper\">
\t<div class=\"section no-pad-bot\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row center\">
\t\t\t\t<h4 class=\"header col s12 light\">Une campagne pensée pour vous<br>et pour toutes les occasions</h4>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"parallax\"><img src=\"assets/images/10.jpg\" alt=\"Une campagne pensée pour vous\">
\t</div>
</div>

<div class=\"container\">
\t<div class=\"section\">

\t\t<div class=\"row\">
\t\t\t<div class=\"col s12 center\">
\t\t\t\t<h4>les campagnes du moment</h4>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col s12\">
\t\t\t\t<div class=\"carousel\">
\t\t\t\t\t<a class=\"carousel-item\" href=\"#one!\">
\t\t\t\t\t\t<div class=\"card center\">
\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t<span class=\"card-title teal-text\">Titre campagne</span>
\t\t\t\t\t\t\t\t<p class=\"black-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-action\">
\t\t\t\t\t\t\t\t<div class=\"row black-text\">
\t\t\t\t\t\t\t\t\t<div class=\"col s6\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons teal-text\">account_circle</i> <b>12</b>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col s6\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons teal-text\">euro_symbol</i> <b>350</b>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t<div class=\"determinate\" style=\"width: 70%\">

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"carousel-item\" href=\"#two!\">
\t\t\t\t\t\t<div class=\"card center\">
\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t<span class=\"card-title teal-text\">Titre campagne</span>
\t\t\t\t\t\t\t\t<p class=\"black-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-action\">
\t\t\t\t\t\t\t\t<div class=\"row black-text\">
\t\t\t\t\t\t\t\t\t<div class=\"col s6\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons teal-text\">account_circle</i> <b>12</b>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col s6\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons teal-text\">euro_symbol</i> <b>350</b>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t<div class=\"determinate\" style=\"width: 70%\">

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>

\t\t\t\t\t<a class=\"carousel-item\" href=\"#three!\">
\t\t\t\t\t\t<div class=\"card center\">
\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t<span class=\"card-title teal-text\">Titre campagne</span>
\t\t\t\t\t\t\t\t<p class=\"black-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-action\">
\t\t\t\t\t\t\t\t<div class=\"row black-text\">
\t\t\t\t\t\t\t\t\t<div class=\"col s6\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons teal-text\">account_circle</i> <b>12</b>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col s6\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons teal-text\">euro_symbol</i> <b>350</b>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t<div class=\"determinate\" style=\"width: 70%\">

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"carousel-item\" href=\"#four!\">
\t\t\t\t\t\t<div class=\"card center\">
\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t<span class=\"card-title teal-text\">Titre campagne</span>
\t\t\t\t\t\t\t\t<p class=\"black-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-action\">
\t\t\t\t\t\t\t\t<div class=\"row black-text\">
\t\t\t\t\t\t\t\t\t<div class=\"col s6\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons teal-text\">account_circle</i> <b>12</b>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col s6\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons teal-text\">euro_symbol</i> <b>350</b>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t<div class=\"determinate\" style=\"width: 70%\">

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"carousel-item\" href=\"#five!\">
\t\t\t\t\t\t<div class=\"card center\">
\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t<span class=\"card-title teal-text\">Titre campagne</span>
\t\t\t\t\t\t\t\t<p class=\"black-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-action\">
\t\t\t\t\t\t\t\t<div class=\"row black-text\">
\t\t\t\t\t\t\t\t\t<div class=\"col s6\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons teal-text\">account_circle</i> <b>12</b>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col s6\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons teal-text\">euro_symbol</i> <b>350</b>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t<div class=\"determinate\" style=\"width: 70%\">

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</div>
</div>
{% endblock %}
", "home/index.html.twig", "/shared/httpd/my_project_directory/templates/home/index.html.twig");
    }
}
