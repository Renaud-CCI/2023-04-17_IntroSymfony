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
            'style' => [$this, 'block_style'],
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
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        
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
        echo "\t<div class=\"parallax-container hero-banner valign-wrapper\">
\t\t<div class=\"section no-pad-bot\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"hide-on-med-and-down\">
\t\t\t\t\t<h1 class=\"header center white-text light\">Un cadeau commun à organiser?</h1>
\t\t\t\t\t<div class=\"row center\">
\t\t\t\t\t\t<h5 class=\"header col s12 light\">Anniversaire, pot de départ, crémaillère... N'avancez plus les frais !</h5>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"hide-on-large-only\">
\t\t\t\t\t<div class=\"row center\">
\t\t\t\t\t\t<h5 class=\"header col s12 light\">Un cadeau commun à organiser ?</h5>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"card col s12 m12 l8 offset-l2\">
\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t<div class=\"input-field col s12 l8\">
\t\t\t\t\t\t\t\t<input id=\"cag_name\" type=\"text\" class=\"validate\">
\t\t\t\t\t\t\t\t<label for=\"cag_name\">Nommez votre nouvelle campagne</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_campaign");
        echo "\" class=\"btn-large waves-effect waves-light pink lighten-1 col s12 l4\">Valider</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<br><br>

\t\t\t</div>
\t\t</div>
\t\t<div class=\"parallax\"><img src=\"/assets/images/11.jpg\" alt=\"Anniversaire, pot de départ, crémaillère... N'avancez plus les frais !\"></div>
\t</div>

\t<div class=\"container\">
\t\t<div class=\"section\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col s12 center\">
\t\t\t\t\t<h4>Comment ça marche ?</h4>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--   Icon Section   -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col s12 m4\">
\t\t\t\t\t<div class=\"icon-block center\">
\t\t\t\t\t\t<div class=\"btn-large btn-floating white\">
\t\t\t\t\t\t\t<i class=\"material-icons teal-text\">create</i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h5 class=\"center\">Créez</h5>
\t\t\t\t\t\t<p class=\"light\">et personnalisez votre campagne commune en 30 secondes !</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col s12 m4\">
\t\t\t\t\t<div class=\"icon-block center\">
\t\t\t\t\t\t<div class=\"btn-large btn-floating white\">
\t\t\t\t\t\t\t<i class=\"material-icons teal-text\">wc</i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h5 class=\"center\">Invitez</h5>
\t\t\t\t\t\t<p class=\"light\">vos amis en utilisant les réseaux sociaux, mail, etc.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col s12 m4\">
\t\t\t\t\t<div class=\"icon-block center\">
\t\t\t\t\t\t<div class=\"btn-large btn-floating white\">
\t\t\t\t\t\t\t<i class=\"material-icons teal-text\">shopping_cart</i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h5 class=\"center\">Collectez</h5>
\t\t\t\t\t\t<p class=\"light\">et utilisez l'argent comme bon vous semble avec vos amis.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>

\t<div class=\"parallax-container valign-wrapper\">
\t\t<div class=\"section no-pad-bot\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row center\">
\t\t\t\t\t<h4 class=\"header col s12 light\">Une campagne pensée pour vous<br>et pour toutes les occasions</h4>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"parallax\"><img src=\"/assets/images/10.jpg\" alt=\"Une campagne pensée pour vous\"></div>
\t</div>

\t<div class=\"container\">
\t\t<div class=\"section\">

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col s12 center\">
\t\t\t\t\t<h4>les campagnes du moment</h4>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col s12\">
\t\t\t\t\t<div class=\"carousel\">
\t\t\t\t\t\t";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["campaigns"]) || array_key_exists("campaigns", $context) ? $context["campaigns"] : (function () { throw new RuntimeError('Variable "campaigns" does not exist.', 103, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["campaign"]) {
            // line 104
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t<a class=\"carousel-item\" href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_campaign_show", ["id" => twig_get_attribute($this->env, $this->source, $context["campaign"], "id", [], "any", false, false, false, 105)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<div class=\"card center\">
\t\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t\t<span class=\"card-title teal-text\">";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["campaign"], "title", [], "any", false, false, false, 108), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t<p class=\"black-text\">";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["campaign"], "content", [], "any", false, false, false, 109), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-action\">
\t\t\t\t\t\t\t\t\t<div class=\"row black-text\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col s6\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons teal-text\">account_circle</i>
\t\t\t\t\t\t\t\t\t\t\t<b>??</b>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col s6\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons teal-text\">euro_symbol</i>
\t\t\t\t\t\t\t\t\t\t\t<b>??</b>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 127
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 130
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"8\">no records found</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['campaign'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>
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
        return array (  241 => 134,  232 => 130,  225 => 127,  207 => 109,  203 => 108,  197 => 105,  194 => 104,  189 => 103,  110 => 27,  87 => 6,  77 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block style %}{% endblock %}

{% block body %}
\t<div class=\"parallax-container hero-banner valign-wrapper\">
\t\t<div class=\"section no-pad-bot\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"hide-on-med-and-down\">
\t\t\t\t\t<h1 class=\"header center white-text light\">Un cadeau commun à organiser?</h1>
\t\t\t\t\t<div class=\"row center\">
\t\t\t\t\t\t<h5 class=\"header col s12 light\">Anniversaire, pot de départ, crémaillère... N'avancez plus les frais !</h5>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"hide-on-large-only\">
\t\t\t\t\t<div class=\"row center\">
\t\t\t\t\t\t<h5 class=\"header col s12 light\">Un cadeau commun à organiser ?</h5>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"card col s12 m12 l8 offset-l2\">
\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t<div class=\"input-field col s12 l8\">
\t\t\t\t\t\t\t\t<input id=\"cag_name\" type=\"text\" class=\"validate\">
\t\t\t\t\t\t\t\t<label for=\"cag_name\">Nommez votre nouvelle campagne</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"{{ path('create_campaign')}}\" class=\"btn-large waves-effect waves-light pink lighten-1 col s12 l4\">Valider</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<br><br>

\t\t\t</div>
\t\t</div>
\t\t<div class=\"parallax\"><img src=\"/assets/images/11.jpg\" alt=\"Anniversaire, pot de départ, crémaillère... N'avancez plus les frais !\"></div>
\t</div>

\t<div class=\"container\">
\t\t<div class=\"section\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col s12 center\">
\t\t\t\t\t<h4>Comment ça marche ?</h4>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--   Icon Section   -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col s12 m4\">
\t\t\t\t\t<div class=\"icon-block center\">
\t\t\t\t\t\t<div class=\"btn-large btn-floating white\">
\t\t\t\t\t\t\t<i class=\"material-icons teal-text\">create</i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h5 class=\"center\">Créez</h5>
\t\t\t\t\t\t<p class=\"light\">et personnalisez votre campagne commune en 30 secondes !</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col s12 m4\">
\t\t\t\t\t<div class=\"icon-block center\">
\t\t\t\t\t\t<div class=\"btn-large btn-floating white\">
\t\t\t\t\t\t\t<i class=\"material-icons teal-text\">wc</i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h5 class=\"center\">Invitez</h5>
\t\t\t\t\t\t<p class=\"light\">vos amis en utilisant les réseaux sociaux, mail, etc.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col s12 m4\">
\t\t\t\t\t<div class=\"icon-block center\">
\t\t\t\t\t\t<div class=\"btn-large btn-floating white\">
\t\t\t\t\t\t\t<i class=\"material-icons teal-text\">shopping_cart</i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h5 class=\"center\">Collectez</h5>
\t\t\t\t\t\t<p class=\"light\">et utilisez l'argent comme bon vous semble avec vos amis.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>

\t<div class=\"parallax-container valign-wrapper\">
\t\t<div class=\"section no-pad-bot\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row center\">
\t\t\t\t\t<h4 class=\"header col s12 light\">Une campagne pensée pour vous<br>et pour toutes les occasions</h4>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"parallax\"><img src=\"/assets/images/10.jpg\" alt=\"Une campagne pensée pour vous\"></div>
\t</div>

\t<div class=\"container\">
\t\t<div class=\"section\">

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col s12 center\">
\t\t\t\t\t<h4>les campagnes du moment</h4>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col s12\">
\t\t\t\t\t<div class=\"carousel\">
\t\t\t\t\t\t{% for campaign in campaigns %}
\t\t\t\t\t\t
\t\t\t\t\t\t<a class=\"carousel-item\" href=\"{{ path('app_campaign_show', {'id': campaign.id}) }}\">
\t\t\t\t\t\t\t<div class=\"card center\">
\t\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t\t<span class=\"card-title teal-text\">{{ campaign.title }}</span>
\t\t\t\t\t\t\t\t\t<p class=\"black-text\">{{ campaign.content }}</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-action\">
\t\t\t\t\t\t\t\t\t<div class=\"row black-text\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col s6\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons teal-text\">account_circle</i>
\t\t\t\t\t\t\t\t\t\t\t<b>??</b>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col s6\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons teal-text\">euro_symbol</i>
\t\t\t\t\t\t\t\t\t\t\t<b>??</b>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{# <div class=\"progress\" title=\"{{ campaign.goal != 0? ((campaign.collectedAmount / campaign.goal) * 100)|round(1) : 0 }}%\">
\t\t\t\t\t\t\t\t\t<div class=\"determinate\" style=\"width: {{ campaign.goal != 0? ((campaign.collectedAmount / campaign.goal) * 100)|round(1) : 0 }}%\"></div>
\t\t\t\t\t\t\t\t</div> #}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"8\">no records found</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>
{% endblock %}
", "home/index.html.twig", "/shared/httpd/my_project_directory/templates/home/index.html.twig");
    }
}
