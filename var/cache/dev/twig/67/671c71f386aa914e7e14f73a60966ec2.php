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

/* base.html.twig */
class __TwigTemplate_e81cff2a485b4e67e119ce164375c31d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'style' => [$this, 'block_style'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
\t\t<meta
\t\thttp-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

\t\t<!--Import Google Icon Font-->
\t\t<link
\t\thref=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
\t\t<!--Import materialize.css-->
\t\t<link
\t\ttype=\"text/css\" rel=\"stylesheet\" href=\"/assets/css/materialize.min.css\" media=\"screen,projection\"/>
\t\t<!--Custom styles-->
\t\t<link type=\"text/css\" rel=\"stylesheet\" href=\"/assets/css/styles.css\" media=\"screen,projection\"/> 
\t\t<script src=\"https://js.stripe.com/v3/\"></script>
\t\t";
        // line 18
        $this->displayBlock('style', $context, $blocks);
        // line 19
        echo "

\t\t<title>Cagnot'potes</title>
\t</head>
\t<body>
\t\t<div class=\"navbar-fixed\">
\t\t\t<nav class=\"white\">
\t\t\t\t<div class=\"nav-wrapper\">
\t\t\t\t\t<a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"brand-logo center\">Cagnot'Potes</a>
\t\t\t\t\t<ul class=\"right hide-on-med-and-down\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_campaign_new");
        echo "\" class=\"waves-effect waves-light btn pink lighten-1\">Créer une campagne</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>

\t\t\t\t\t<ul id=\"nav-mobile\" class=\"sidenav\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_campaign_new");
        echo "\" class=\"waves-effect waves-light btn pink lighten-1\">Créer une campagne</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" data-target=\"nav-mobile\" class=\"sidenav-trigger\">
\t\t\t\t\t\t<i class=\"material-icons\">menu</i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</div>


\t\t";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "
\t\t<footer class=\"page-footer teal\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col l6 s12\">
\t\t\t\t\t\t<h5 class=\"white-text\">Cagnot'Potes</h5>
\t\t\t\t\t\t<p class=\"grey-text text-lighten-4\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col l3 s12 offset-l3\">
\t\t\t\t\t\t<h5 class=\"white-text\">Liens</h5>
\t\t\t\t\t\t<ul class=\"footer-links\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"white-text\" href=\"#!\">Comment ça marche ?</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"white-text\" href=\"#!\">Voir les campagnes</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"white-text\" href=\"#!\">Créer une campagne</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"footer-copyright\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\tMade with love by
\t\t\t\t\t<a class=\"white-text\" href=\"http://trombi.simplon-roanne.com/\">Simplon Roanne</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t\t<!--JavaScript at end of body for optimized loading-->
\t\t<script type=\"text/javascript\" src=\"/assets/js/materialize.min.js\"></script>
\t\t<!--Init & custom scripts-->
\t\t<script type=\"text/javascript\" src=\"/assets/js/scripts.js\"></script>

\t</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 18
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

    // line 47
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  176 => 47,  158 => 18,  110 => 48,  108 => 47,  97 => 39,  91 => 36,  82 => 30,  76 => 27,  66 => 19,  64 => 18,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
\t\t<meta
\t\thttp-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

\t\t<!--Import Google Icon Font-->
\t\t<link
\t\thref=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
\t\t<!--Import materialize.css-->
\t\t<link
\t\ttype=\"text/css\" rel=\"stylesheet\" href=\"/assets/css/materialize.min.css\" media=\"screen,projection\"/>
\t\t<!--Custom styles-->
\t\t<link type=\"text/css\" rel=\"stylesheet\" href=\"/assets/css/styles.css\" media=\"screen,projection\"/> 
\t\t<script src=\"https://js.stripe.com/v3/\"></script>
\t\t{% block style %}{% endblock %}


\t\t<title>Cagnot'potes</title>
\t</head>
\t<body>
\t\t<div class=\"navbar-fixed\">
\t\t\t<nav class=\"white\">
\t\t\t\t<div class=\"nav-wrapper\">
\t\t\t\t\t<a href=\"{{ path('home') }}\" class=\"brand-logo center\">Cagnot'Potes</a>
\t\t\t\t\t<ul class=\"right hide-on-med-and-down\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{path('app_campaign_new')}}\" class=\"waves-effect waves-light btn pink lighten-1\">Créer une campagne</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>

\t\t\t\t\t<ul id=\"nav-mobile\" class=\"sidenav\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{path('app_campaign_new')}}\" class=\"waves-effect waves-light btn pink lighten-1\">Créer une campagne</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<a href=\"{{path('home')}}\" data-target=\"nav-mobile\" class=\"sidenav-trigger\">
\t\t\t\t\t\t<i class=\"material-icons\">menu</i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</div>


\t\t{% block body %}{% endblock %}

\t\t<footer class=\"page-footer teal\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col l6 s12\">
\t\t\t\t\t\t<h5 class=\"white-text\">Cagnot'Potes</h5>
\t\t\t\t\t\t<p class=\"grey-text text-lighten-4\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col l3 s12 offset-l3\">
\t\t\t\t\t\t<h5 class=\"white-text\">Liens</h5>
\t\t\t\t\t\t<ul class=\"footer-links\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"white-text\" href=\"#!\">Comment ça marche ?</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"white-text\" href=\"#!\">Voir les campagnes</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"white-text\" href=\"#!\">Créer une campagne</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"footer-copyright\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\tMade with love by
\t\t\t\t\t<a class=\"white-text\" href=\"http://trombi.simplon-roanne.com/\">Simplon Roanne</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t\t<!--JavaScript at end of body for optimized loading-->
\t\t<script type=\"text/javascript\" src=\"/assets/js/materialize.min.js\"></script>
\t\t<!--Init & custom scripts-->
\t\t<script type=\"text/javascript\" src=\"/assets/js/scripts.js\"></script>

\t</body>
</html>
", "base.html.twig", "/shared/httpd/my_project_directory/templates/base.html.twig");
    }
}
