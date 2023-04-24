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

/* campaign/show.html.twig */
class __TwigTemplate_79acdec6f4da64f369183555d6f240d5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "campaign/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "campaign/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "campaign/show.html.twig", 1);
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

        echo "Campaign
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div class=\"parallax-container valign-wrapper\">
\t\t<div class=\"section no-pad-bot\">
\t\t\t<div class=\"container\">
\t\t\t\t<h1 class=\"header center white-text light\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</h1>
\t\t\t\t<div class=\"row center\">
\t\t\t\t\t<h5 class=\"header col s12 light\">- Organisée par :
\t\t\t\t\t\t";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "
\t\t\t\t\t\t-</h5>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"parallax\"><img src=\"/assets/images/8.jpg\" alt=\"Titre de la campagne\"></div>
\t</div>

\t<!-- Show progress -->
\t<section class=\"progress-section\">
\t\t<div class=\"progress\">
\t\t\t<div class=\"determinate\" style=\"width: ";
        // line 24
        (((twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 24, $this->source); })()), "goal", [], "any", false, false, false, 24) != 0)) ? (print (twig_escape_filter($this->env, (((isset($context["totalAmount"]) || array_key_exists("totalAmount", $context) ? $context["totalAmount"] : (function () { throw new RuntimeError('Variable "totalAmount" does not exist.', 24, $this->source); })()) / twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 24, $this->source); })()), "goal", [], "any", false, false, false, 24)) * 100), "html", null, true))) : (print (0)));
        echo "%\">
\t\t\t\t<span>";
        // line 25
        echo twig_escape_filter($this->env, twig_round((((isset($context["totalAmount"]) || array_key_exists("totalAmount", $context) ? $context["totalAmount"] : (function () { throw new RuntimeError('Variable "totalAmount" does not exist.', 25, $this->source); })()) / twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 25, $this->source); })()), "goal", [], "any", false, false, false, 25)) * 100), 1), "html", null, true);
        echo "% de l'objectif</span>
\t\t\t</div>
\t\t</div>
\t</section>

\t<div class=\"container participe\">
\t\t<div
\t\t\tclass=\"section\">
\t\t\t<!-- Participation section -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"card col s12 m12 l8 offset-l2\">
\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t<div class=\"input-field col s12 l6\">
\t\t\t\t\t\t\t<input id=\"mount\" type=\"number\" class=\"validate\">
\t\t\t\t\t\t\t<label for=\"mount\">Votre participation</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_payment_new", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)]), "html", null, true);
        echo "\" class=\"btn-large waves-effect waves-light pink lighten-1 col s12 l6\">Participer</a>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col s12 center\">
\t\t\t\t\t<h4>A propos de la campagne</h4>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--   Icon Section   -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col s12 m6 l3 offset-l3\">
\t\t\t\t\t<div class=\"icon-block center\">
\t\t\t\t\t\t<div class=\"btn-large btn-floating white\">
\t\t\t\t\t\t\t<i class=\"material-icons teal-text\">person</i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h3 class=\"center\">";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["totalParticipants"]) || array_key_exists("totalParticipants", $context) ? $context["totalParticipants"] : (function () { throw new RuntimeError('Variable "totalParticipants" does not exist.', 58, $this->source); })()), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t<p class=\"light\">Participants</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col s12 m6 l3\">
\t\t\t\t\t<div class=\"icon-block center\">
\t\t\t\t\t\t<div class=\"btn-large btn-floating white\">
\t\t\t\t\t\t\t<i class=\"material-icons teal-text\">redeem</i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h3 class=\"center\">";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["totalAmount"]) || array_key_exists("totalAmount", $context) ? $context["totalAmount"] : (function () { throw new RuntimeError('Variable "totalAmount" does not exist.', 68, $this->source); })()), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t<p class=\"light\">euros récoltés</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Form section -->
\t\t\t<div class=\"row\">
\t\t\t\t<form>
\t\t\t\t\t<div class=\"input-field col s12\">
\t\t\t\t\t\t<label for=\"description\">Description</label>
\t\t\t\t\t\t<textarea id=\"description\" class=\"materialize-textarea\" readonly=\"readonly\">";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 78, $this->source); })()), "content", [], "any", false, false, false, 78), "html", null, true);
        echo "</textarea>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-field col s12 l6\">
\t\t\t\t\t\t<input id=\"goal\" type=\"number\" readonly=\"readonly\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 81, $this->source); })()), "goal", [], "any", false, false, false, 81), "html", null, true);
        echo "\">
\t\t\t\t\t\t<label for=\"goal\">Objectif</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col s12 l6 offset-l3\">
\t\t\t\t\t\t<button class=\"btn btn-large waves-effect waves-light col s12\" type=\"submit\" name=\"action\">
\t\t\t\t\t\t\tModifiez la campagne
\t\t\t\t\t\t\t<i class=\"material-icons right\">edit</i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<!-- List -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col s12 center\">
\t\t\t\t\t<h4>Liste des participants</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"col s12\">
\t\t\t\t\t<table class=\"highlight responsive-table\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t\t\t<th>Participation</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>

\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 107, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 108
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 110
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["payment"], "participant", [], "any", false, false, false, 110), "hidden", [], "any", false, false, false, 110)) {
                echo " 
\t\t\t\t\t\t\t\t\tanonyme
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 113
                echo "\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["payment"], "participant", [], "any", false, false, false, 113), "email", [], "any", false, false, false, 113), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
            }
            // line 115
            echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["payment"], "amount", [], "any", false, false, false, 116), "html", null, true);
            echo "€</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "campaign/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 119,  241 => 116,  238 => 115,  232 => 113,  226 => 110,  222 => 108,  218 => 107,  189 => 81,  183 => 78,  170 => 68,  157 => 58,  137 => 41,  118 => 25,  114 => 24,  100 => 13,  94 => 10,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Campaign
{% endblock %}

{% block body %}
\t<div class=\"parallax-container valign-wrapper\">
\t\t<div class=\"section no-pad-bot\">
\t\t\t<div class=\"container\">
\t\t\t\t<h1 class=\"header center white-text light\">{{campaign.title}}</h1>
\t\t\t\t<div class=\"row center\">
\t\t\t\t\t<h5 class=\"header col s12 light\">- Organisée par :
\t\t\t\t\t\t{{campaign.name}}
\t\t\t\t\t\t-</h5>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"parallax\"><img src=\"/assets/images/8.jpg\" alt=\"Titre de la campagne\"></div>
\t</div>

\t<!-- Show progress -->
\t<section class=\"progress-section\">
\t\t<div class=\"progress\">
\t\t\t<div class=\"determinate\" style=\"width: {{ campaign.goal != 0? (totalAmount / campaign.goal) * 100 : 0 }}%\">
\t\t\t\t<span>{{ ((totalAmount / campaign.goal)*100)|round(1)}}% de l'objectif</span>
\t\t\t</div>
\t\t</div>
\t</section>

\t<div class=\"container participe\">
\t\t<div
\t\t\tclass=\"section\">
\t\t\t<!-- Participation section -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"card col s12 m12 l8 offset-l2\">
\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t<div class=\"input-field col s12 l6\">
\t\t\t\t\t\t\t<input id=\"mount\" type=\"number\" class=\"validate\">
\t\t\t\t\t\t\t<label for=\"mount\">Votre participation</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"{{ path('app_payment_new', {'id': campaign.id})}}\" class=\"btn-large waves-effect waves-light pink lighten-1 col s12 l6\">Participer</a>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col s12 center\">
\t\t\t\t\t<h4>A propos de la campagne</h4>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--   Icon Section   -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col s12 m6 l3 offset-l3\">
\t\t\t\t\t<div class=\"icon-block center\">
\t\t\t\t\t\t<div class=\"btn-large btn-floating white\">
\t\t\t\t\t\t\t<i class=\"material-icons teal-text\">person</i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h3 class=\"center\">{{totalParticipants}}</h3>
\t\t\t\t\t\t<p class=\"light\">Participants</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col s12 m6 l3\">
\t\t\t\t\t<div class=\"icon-block center\">
\t\t\t\t\t\t<div class=\"btn-large btn-floating white\">
\t\t\t\t\t\t\t<i class=\"material-icons teal-text\">redeem</i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h3 class=\"center\">{{totalAmount}}</h3>
\t\t\t\t\t\t<p class=\"light\">euros récoltés</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Form section -->
\t\t\t<div class=\"row\">
\t\t\t\t<form>
\t\t\t\t\t<div class=\"input-field col s12\">
\t\t\t\t\t\t<label for=\"description\">Description</label>
\t\t\t\t\t\t<textarea id=\"description\" class=\"materialize-textarea\" readonly=\"readonly\">{{campaign.content}}</textarea>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-field col s12 l6\">
\t\t\t\t\t\t<input id=\"goal\" type=\"number\" readonly=\"readonly\" value=\"{{campaign.goal}}\">
\t\t\t\t\t\t<label for=\"goal\">Objectif</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col s12 l6 offset-l3\">
\t\t\t\t\t\t<button class=\"btn btn-large waves-effect waves-light col s12\" type=\"submit\" name=\"action\">
\t\t\t\t\t\t\tModifiez la campagne
\t\t\t\t\t\t\t<i class=\"material-icons right\">edit</i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<!-- List -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col s12 center\">
\t\t\t\t\t<h4>Liste des participants</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"col s12\">
\t\t\t\t\t<table class=\"highlight responsive-table\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t\t\t<th>Participation</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>

\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t{% for payment in payments %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{% if payment.participant.hidden %} 
\t\t\t\t\t\t\t\t\tanonyme
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t{{ payment.participant.email }}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>{{payment.amount}}€</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
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
{% endblock %}
", "campaign/show.html.twig", "/home/renaud/devilbox/data/www/my_project_directory/templates/campaign/show.html.twig");
    }
}
