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

/* campaign/create.html.twig */
class __TwigTemplate_17ed89ad10eeaf8eded14cc259c15da5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "campaign/create.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "campaign/create.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "campaign/create.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "

<div class=\"parallax-container valign-wrapper\">
  <div class=\"section no-pad-bot\">
      <div class=\"container\">
          <div class=\"hide-on-med-and-down\">
              <h1 class=\"header center white-text light\">Un cadeau commun à organiser?</h1>
              <div class=\"row center\">
                  <h5 class=\"header col s12 light\">Anniversaire, pot de départ, crémaillère... N'avancez plus les frais !</h5>
              </div>
          </div>
          <div class=\"hide-on-large-only\">
              <div class=\"row center\">
                  <h5 class=\"header col s12 light\">Un cadeau commun à organiser ?</h5>
              </div>
          </div>
      </div>
  </div>
  <div class=\"parallax\"><img src=\"/assets/images/11.jpg\" alt=\"Anniversaire, pot de départ, crémaillère... N'avancez plus les frais !\"></div>
</div>

<div class=\"container\">
  <div class=\"section\">
      <div class=\"row\">
          <div class=\"col s12 center\">
              <h4>Créez votre campagne maintenant</h4>
          </div>
      </div>
      <!--   Form Section   -->
      <div class=\"card\">
          <div class=\"card-content\">
              <div class=\"row\">
                  <form>
                      <div class=\"input-field col s12 l6\">
                          <input id=\"author\" type=\"text\" class=\"validate\">
                          <label for=\"author\">Votre Nom</label>
                      </div>
                      <div class=\"input-field col s12 l6\">
                          <input id=\"email\" type=\"email\" class=\"validate\">
                          <label for=\"email\">Votre Email</label>
                      </div>
                      <div class=\"input-field col s12 l8\">
                          <input id=\"title\" type=\"text\" class=\"validate\">
                          <label for=\"title\">Titre de votre campagne</label>
                      </div>
                      <div class=\"input-field col s12\">
                          <textarea id=\"description\" class=\"materialize-textarea\" placeholder=\"Décrivez à vos amis pourquoi vous faites une campagne\"></textarea>
                      </div>
                      <div class=\"input-field col s12 l6\">
                          <input id=\"goal\" type=\"number\" class=\"validate\">
                          <label for=\"goal\">Votre objectif en euros</label>
                      </div>
                      <button class=\"btn btn-large waves-effect waves-light pink lighten-1 col s12\" style=\"margin-top: 20px;\" type=\"submit\" name=\"action\">
                          Validez la campagne
                          <i class=\"material-icons right\">send</i>
                      </button>
                  </form>
              </div>
          </div>
      </div>

  </div>
</div>

<div class=\"container\">
  <div class=\"section\">
      <div class=\"row\">
          <div class=\"col s12 center\">
              <h4>Comment ça marche ?</h4>
          </div>
      </div>
      <!--   Icon Section   -->
      <div class=\"row\">
          <div class=\"col s12 m4\">
              <div class=\"icon-block center\">
                  <div class=\"btn-large btn-floating white\"><i class=\"material-icons teal-text\">create</i></div>
                  <h5 class=\"center\">Créez</h5>
                  <p class=\"light\">et personnalisez votre campagne commune en 30 secondes !</p>
              </div>
          </div>

          <div class=\"col s12 m4\">
              <div class=\"icon-block center\">
                  <div class=\"btn-large btn-floating white\"><i class=\"material-icons teal-text\">wc</i></div>
                  <h5 class=\"center\">Invitez</h5>
                  <p class=\"light\">vos amis en utilisant les réseaux sociaux, mail, etc.</p>
              </div>
          </div>

          <div class=\"col s12 m4\">
              <div class=\"icon-block center\">
                  <div class=\"btn-large btn-floating white\"><i class=\"material-icons teal-text\">shopping_cart</i></div>
                  <h5 class=\"center\">Collectez</h5>
                  <p class=\"light\">et utilisez l'argent comme bon vous semble avec vos amis.</p>
              </div>
          </div>
      </div>

  </div>
</div>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "campaign/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 8,  78 => 7,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}Cagnot'potes{% endblock %}


{% block body %}


<div class=\"parallax-container valign-wrapper\">
  <div class=\"section no-pad-bot\">
      <div class=\"container\">
          <div class=\"hide-on-med-and-down\">
              <h1 class=\"header center white-text light\">Un cadeau commun à organiser?</h1>
              <div class=\"row center\">
                  <h5 class=\"header col s12 light\">Anniversaire, pot de départ, crémaillère... N'avancez plus les frais !</h5>
              </div>
          </div>
          <div class=\"hide-on-large-only\">
              <div class=\"row center\">
                  <h5 class=\"header col s12 light\">Un cadeau commun à organiser ?</h5>
              </div>
          </div>
      </div>
  </div>
  <div class=\"parallax\"><img src=\"/assets/images/11.jpg\" alt=\"Anniversaire, pot de départ, crémaillère... N'avancez plus les frais !\"></div>
</div>

<div class=\"container\">
  <div class=\"section\">
      <div class=\"row\">
          <div class=\"col s12 center\">
              <h4>Créez votre campagne maintenant</h4>
          </div>
      </div>
      <!--   Form Section   -->
      <div class=\"card\">
          <div class=\"card-content\">
              <div class=\"row\">
                  <form>
                      <div class=\"input-field col s12 l6\">
                          <input id=\"author\" type=\"text\" class=\"validate\">
                          <label for=\"author\">Votre Nom</label>
                      </div>
                      <div class=\"input-field col s12 l6\">
                          <input id=\"email\" type=\"email\" class=\"validate\">
                          <label for=\"email\">Votre Email</label>
                      </div>
                      <div class=\"input-field col s12 l8\">
                          <input id=\"title\" type=\"text\" class=\"validate\">
                          <label for=\"title\">Titre de votre campagne</label>
                      </div>
                      <div class=\"input-field col s12\">
                          <textarea id=\"description\" class=\"materialize-textarea\" placeholder=\"Décrivez à vos amis pourquoi vous faites une campagne\"></textarea>
                      </div>
                      <div class=\"input-field col s12 l6\">
                          <input id=\"goal\" type=\"number\" class=\"validate\">
                          <label for=\"goal\">Votre objectif en euros</label>
                      </div>
                      <button class=\"btn btn-large waves-effect waves-light pink lighten-1 col s12\" style=\"margin-top: 20px;\" type=\"submit\" name=\"action\">
                          Validez la campagne
                          <i class=\"material-icons right\">send</i>
                      </button>
                  </form>
              </div>
          </div>
      </div>

  </div>
</div>

<div class=\"container\">
  <div class=\"section\">
      <div class=\"row\">
          <div class=\"col s12 center\">
              <h4>Comment ça marche ?</h4>
          </div>
      </div>
      <!--   Icon Section   -->
      <div class=\"row\">
          <div class=\"col s12 m4\">
              <div class=\"icon-block center\">
                  <div class=\"btn-large btn-floating white\"><i class=\"material-icons teal-text\">create</i></div>
                  <h5 class=\"center\">Créez</h5>
                  <p class=\"light\">et personnalisez votre campagne commune en 30 secondes !</p>
              </div>
          </div>

          <div class=\"col s12 m4\">
              <div class=\"icon-block center\">
                  <div class=\"btn-large btn-floating white\"><i class=\"material-icons teal-text\">wc</i></div>
                  <h5 class=\"center\">Invitez</h5>
                  <p class=\"light\">vos amis en utilisant les réseaux sociaux, mail, etc.</p>
              </div>
          </div>

          <div class=\"col s12 m4\">
              <div class=\"icon-block center\">
                  <div class=\"btn-large btn-floating white\"><i class=\"material-icons teal-text\">shopping_cart</i></div>
                  <h5 class=\"center\">Collectez</h5>
                  <p class=\"light\">et utilisez l'argent comme bon vous semble avec vos amis.</p>
              </div>
          </div>
      </div>

  </div>
</div>



{% endblock %}
", "campaign/create.html.twig", "/shared/httpd/my_project_directory/templates/campaign/create.html.twig");
    }
}
