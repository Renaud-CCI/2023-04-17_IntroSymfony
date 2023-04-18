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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
\t\t";
        // line 8
        echo "
\t\t";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "
\t\t";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "\t</head>

  <body>



<div class=\"navbar-fixed\">
\t<nav class=\"white\">
\t\t<div class=\"nav-wrapper\">
\t\t\t<a href=\"/\" class=\"brand-logo center\">Cagnot'Potes</a>
\t\t\t<ul class=\"right hide-on-med-and-down\">
\t\t\t\t<li><a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("campaign_create");
        echo "\" class=\"waves-effect waves-light btn pink lighten-1\">Créer une campagne</a></li>
\t\t\t</ul>

\t\t\t<ul id=\"nav-mobile\" class=\"sidenav\">
\t\t\t\t<li><a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("campaign_create");
        echo "\" class=\"waves-effect waves-light btn pink lighten-1\">Créer une campagne</a></li>
\t\t\t</ul>
\t\t\t<a href=\"#\" data-target=\"nav-mobile\" class=\"sidenav-trigger\"><i class=\"material-icons\">menu</i></a>
\t\t</div>
\t</nav>
</div>

    ";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "
    <footer class=\"page-footer teal\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col l6 s12\">
            <h5 class=\"white-text\">Cagnot'Potes</h5>
            <p class=\"grey-text text-lighten-4\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo.</p>
          </div>
          <div class=\"col l3 s12 offset-l3\">
            <h5 class=\"white-text\">Liens</h5>
            <ul class=\"footer-links\">
\t\t\t\t\t\t\t<li><a class=\"white-text\" href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Comment ça marche ?</a></li>
\t\t\t\t\t\t\t<li><a class=\"white-text\" href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("campaign_show");
        echo "\">Voir les campagnes</a></li>
\t\t\t\t\t\t\t<li><a class=\"white-text\" href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("campaign_create");
        echo "\">Créer une campagne</a></li>
\t\t\t\t\t\t</ul>
          </div>
        </div>
      </div>
      <div class=\"footer-copyright\">
        <div class=\"container\">
                Made with love by <a class=\"white-text\" href=\"http://trombi.simplon-roanne.com/\">Simplon Roanne</a>
        </div>
      </div>
    </footer>

       <!--JavaScript at end of body for optimized loading-->
    <script type=\"text/javascript\" src=\"/assets/js/materialize.min.js\"></script>
\t\t\t<!--Javascript Markdown editor-->
\t\t\t<script src=\"https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js\"></script>
\t\t\t<script>
\t\t\t\t\tvar simplemde = new SimpleMDE({ element: document.getElementById(\"description\") });
\t\t\t</script>
    <!--Init & custom scripts-->
    <script type=\"text/javascript\" src=\"/assets/js/scripts.js\"></script>
  </body>
</html>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello HomeController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "\t\t\t";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
\t\t\t\t\t<!--Import Google Icon Font-->
\t\t\t<link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
\t\t\t<!--Import materialize.css-->
\t\t\t<link type=\"text/css\" rel=\"stylesheet\" href=\"/assets/css/materialize.min.css\"  media=\"screen,projection\"/>
\t\t\t<!--Simple MDE -->
\t\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css\">
\t\t\t<!--Custom styles-->
\t\t\t<link type=\"text/css\" rel=\"stylesheet\" href=\"/assets/css/styles.css\"  media=\"screen,projection\"/>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "\t\t\t";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 46
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 47
        echo "\t\t
    ";
        
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
        return array (  239 => 47,  229 => 46,  216 => 22,  206 => 21,  185 => 10,  175 => 9,  156 => 5,  121 => 62,  117 => 61,  113 => 60,  100 => 49,  98 => 46,  88 => 39,  81 => 35,  68 => 24,  66 => 21,  63 => 20,  61 => 9,  58 => 8,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>{% block title %}Hello HomeController!{% endblock %}</title>
\t\t<link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
\t\t{# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}

\t\t{% block stylesheets %}
\t\t\t{{ encore_entry_link_tags('app') }}
\t\t\t\t\t<!--Import Google Icon Font-->
\t\t\t<link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
\t\t\t<!--Import materialize.css-->
\t\t\t<link type=\"text/css\" rel=\"stylesheet\" href=\"/assets/css/materialize.min.css\"  media=\"screen,projection\"/>
\t\t\t<!--Simple MDE -->
\t\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css\">
\t\t\t<!--Custom styles-->
\t\t\t<link type=\"text/css\" rel=\"stylesheet\" href=\"/assets/css/styles.css\"  media=\"screen,projection\"/>
\t\t{% endblock %}

\t\t{% block javascripts %}
\t\t\t{{ encore_entry_script_tags('app') }}
\t\t{% endblock %}
\t</head>

  <body>



<div class=\"navbar-fixed\">
\t<nav class=\"white\">
\t\t<div class=\"nav-wrapper\">
\t\t\t<a href=\"/\" class=\"brand-logo center\">Cagnot'Potes</a>
\t\t\t<ul class=\"right hide-on-med-and-down\">
\t\t\t\t<li><a href=\"{{path('campaign_create')}}\" class=\"waves-effect waves-light btn pink lighten-1\">Créer une campagne</a></li>
\t\t\t</ul>

\t\t\t<ul id=\"nav-mobile\" class=\"sidenav\">
\t\t\t\t<li><a href=\"{{path('campaign_create')}}\" class=\"waves-effect waves-light btn pink lighten-1\">Créer une campagne</a></li>
\t\t\t</ul>
\t\t\t<a href=\"#\" data-target=\"nav-mobile\" class=\"sidenav-trigger\"><i class=\"material-icons\">menu</i></a>
\t\t</div>
\t</nav>
</div>

    {% block body %}
\t\t
    {% endblock %}

    <footer class=\"page-footer teal\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col l6 s12\">
            <h5 class=\"white-text\">Cagnot'Potes</h5>
            <p class=\"grey-text text-lighten-4\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo.</p>
          </div>
          <div class=\"col l3 s12 offset-l3\">
            <h5 class=\"white-text\">Liens</h5>
            <ul class=\"footer-links\">
\t\t\t\t\t\t\t<li><a class=\"white-text\" href=\"{{path('app_home')}}\">Comment ça marche ?</a></li>
\t\t\t\t\t\t\t<li><a class=\"white-text\" href=\"{{path('campaign_show')}}\">Voir les campagnes</a></li>
\t\t\t\t\t\t\t<li><a class=\"white-text\" href=\"{{path('campaign_create')}}\">Créer une campagne</a></li>
\t\t\t\t\t\t</ul>
          </div>
        </div>
      </div>
      <div class=\"footer-copyright\">
        <div class=\"container\">
                Made with love by <a class=\"white-text\" href=\"http://trombi.simplon-roanne.com/\">Simplon Roanne</a>
        </div>
      </div>
    </footer>

       <!--JavaScript at end of body for optimized loading-->
    <script type=\"text/javascript\" src=\"/assets/js/materialize.min.js\"></script>
\t\t\t<!--Javascript Markdown editor-->
\t\t\t<script src=\"https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js\"></script>
\t\t\t<script>
\t\t\t\t\tvar simplemde = new SimpleMDE({ element: document.getElementById(\"description\") });
\t\t\t</script>
    <!--Init & custom scripts-->
    <script type=\"text/javascript\" src=\"/assets/js/scripts.js\"></script>
  </body>
</html>

", "base.html.twig", "/shared/httpd/my_project_directory/templates/base.html.twig");
    }
}
