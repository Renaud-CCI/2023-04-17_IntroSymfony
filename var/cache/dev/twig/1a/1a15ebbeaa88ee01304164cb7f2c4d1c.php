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

        echo "Cagnot'potes";
        
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
        echo "


<div class=\"parallax-container valign-wrapper\">
  <div class=\"section no-pad-bot\">
      <div class=\"container\">
          <h1 class=\"header center white-text light\">Titre de la campagne</h1>
          <div class=\"row center\">
              <h5 class=\"header col s12 light\">- Organisée par : Nom de l'auteur -</h5>
          </div>
      </div>
  </div>
  <div class=\"parallax\"><img src=\"/assets/images/8.jpg\" alt=\"Titre de la campagne\"></div>
</div>

<!-- Show progress -->
<section class=\"progress-section\">
  <div class=\"progress\">
      <div class=\"determinate\" style=\"width: 70%\"><span>70% de l'objectif</span></div>
  </div>
</section>

<div class=\"container participe\">
  <div class=\"section\">
      <!-- Participation section -->
      <div class=\"row\">
          <div class=\"card col s12 m12 l8 offset-l2\">
              <div class=\"card-content\">
                  <div class=\"input-field col s12 l6\">
                      <input id=\"mount\" type=\"number\" class=\"validate\">
                      <label for=\"mount\">Votre participation</label>
                  </div>
                  <a href=\"create.html\" class=\"btn-large waves-effect waves-light pink lighten-1 col s12 l6\">Participer</a>
                  <div class=\"clearfix\"></div>
              </div>
          </div>
      </div>
      <div class=\"row\">
          <div class=\"col s12 center\">
              <h4>A propos de la campagne</h4>
          </div>
      </div>
      <!--   Icon Section   -->
      <div class=\"row\">
          <div class=\"col s12 m6 l3 offset-l3\">
              <div class=\"icon-block center\">
                  <div class=\"btn-large btn-floating white\"><i class=\"material-icons teal-text\">person</i></div>
                  <h3 class=\"center\">12</h3>
                  <p class=\"light\">Participants</p>
              </div>
          </div>

          <div class=\"col s12 m6 l3\">
              <div class=\"icon-block center\">
                  <div class=\"btn-large btn-floating white\"><i class=\"material-icons teal-text\">redeem</i></div>
                  <h3 class=\"center\">220</h3>
                  <p class=\"light\">euros récoltés</p>
              </div>
          </div>
      </div>
      <!-- Form section -->
      <div class=\"row\">
          <form>
              <div class=\"input-field col s12\">
                  <label for=\"description\">Description</label>
                  <textarea id=\"description\" class=\"materialize-textarea\" readonly=\"readonly\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo.</textarea>
              </div>
              <div class=\"input-field col s12 l6\">
                  <input id=\"goal\" type=\"number\" readonly=\"readonly\" value=\"500\">
                  <label for=\"goal\">Objectif</label>
              </div>
              <div class=\"col s12 l6 offset-l3\">
                  <button class=\"btn btn-large waves-effect waves-light col s12\" type=\"submit\" name=\"action\">
                      Modifiez la campagne
                      <i class=\"material-icons right\">edit</i>
                  </button>
              </div>
          </form>
      </div>
      <!-- List -->
      <div class=\"row\">
          <div class=\"col s12 center\">
              <h4>Liste des participants</h4>
          </div>
          <div class=\"col s12\">
              <table class=\"highlight responsive-table\">
                  <thead>
                  <tr>
                      <th>Email</th>
                      <th>Participation</th>
                  </tr>
                  </thead>

                  <tbody>
                  <tr>
                      <td>Alvin@live.net</td>
                      <td>5€</td>
                  </tr>
                  <tr>
                      <td>Alan@live.net</td>
                      <td>12€</td>
                  </tr>
                  <tr>
                      <td>Jonathan@live.net</td>
                      <td>7€</td>
                  </tr>
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>

<div class=\"parallax-container valign-wrapper\">
  <div class=\"section no-pad-bot\">
      <div class=\"container\">
          <div class=\"row center\">
              <h4 class=\"header col s12 light\">Une campagne pensée pour vous<br>et pour toutes les occasions</h4>
          </div>
      </div>
  </div>
  <div class=\"parallax\"><img src=\"assets/images/10.jpg\" alt=\"Une campagne pensée pour vous\"></div>
</div>



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
        return array (  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Cagnot'potes{% endblock %}


{% block body %}



<div class=\"parallax-container valign-wrapper\">
  <div class=\"section no-pad-bot\">
      <div class=\"container\">
          <h1 class=\"header center white-text light\">Titre de la campagne</h1>
          <div class=\"row center\">
              <h5 class=\"header col s12 light\">- Organisée par : Nom de l'auteur -</h5>
          </div>
      </div>
  </div>
  <div class=\"parallax\"><img src=\"/assets/images/8.jpg\" alt=\"Titre de la campagne\"></div>
</div>

<!-- Show progress -->
<section class=\"progress-section\">
  <div class=\"progress\">
      <div class=\"determinate\" style=\"width: 70%\"><span>70% de l'objectif</span></div>
  </div>
</section>

<div class=\"container participe\">
  <div class=\"section\">
      <!-- Participation section -->
      <div class=\"row\">
          <div class=\"card col s12 m12 l8 offset-l2\">
              <div class=\"card-content\">
                  <div class=\"input-field col s12 l6\">
                      <input id=\"mount\" type=\"number\" class=\"validate\">
                      <label for=\"mount\">Votre participation</label>
                  </div>
                  <a href=\"create.html\" class=\"btn-large waves-effect waves-light pink lighten-1 col s12 l6\">Participer</a>
                  <div class=\"clearfix\"></div>
              </div>
          </div>
      </div>
      <div class=\"row\">
          <div class=\"col s12 center\">
              <h4>A propos de la campagne</h4>
          </div>
      </div>
      <!--   Icon Section   -->
      <div class=\"row\">
          <div class=\"col s12 m6 l3 offset-l3\">
              <div class=\"icon-block center\">
                  <div class=\"btn-large btn-floating white\"><i class=\"material-icons teal-text\">person</i></div>
                  <h3 class=\"center\">12</h3>
                  <p class=\"light\">Participants</p>
              </div>
          </div>

          <div class=\"col s12 m6 l3\">
              <div class=\"icon-block center\">
                  <div class=\"btn-large btn-floating white\"><i class=\"material-icons teal-text\">redeem</i></div>
                  <h3 class=\"center\">220</h3>
                  <p class=\"light\">euros récoltés</p>
              </div>
          </div>
      </div>
      <!-- Form section -->
      <div class=\"row\">
          <form>
              <div class=\"input-field col s12\">
                  <label for=\"description\">Description</label>
                  <textarea id=\"description\" class=\"materialize-textarea\" readonly=\"readonly\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo.</textarea>
              </div>
              <div class=\"input-field col s12 l6\">
                  <input id=\"goal\" type=\"number\" readonly=\"readonly\" value=\"500\">
                  <label for=\"goal\">Objectif</label>
              </div>
              <div class=\"col s12 l6 offset-l3\">
                  <button class=\"btn btn-large waves-effect waves-light col s12\" type=\"submit\" name=\"action\">
                      Modifiez la campagne
                      <i class=\"material-icons right\">edit</i>
                  </button>
              </div>
          </form>
      </div>
      <!-- List -->
      <div class=\"row\">
          <div class=\"col s12 center\">
              <h4>Liste des participants</h4>
          </div>
          <div class=\"col s12\">
              <table class=\"highlight responsive-table\">
                  <thead>
                  <tr>
                      <th>Email</th>
                      <th>Participation</th>
                  </tr>
                  </thead>

                  <tbody>
                  <tr>
                      <td>Alvin@live.net</td>
                      <td>5€</td>
                  </tr>
                  <tr>
                      <td>Alan@live.net</td>
                      <td>12€</td>
                  </tr>
                  <tr>
                      <td>Jonathan@live.net</td>
                      <td>7€</td>
                  </tr>
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>

<div class=\"parallax-container valign-wrapper\">
  <div class=\"section no-pad-bot\">
      <div class=\"container\">
          <div class=\"row center\">
              <h4 class=\"header col s12 light\">Une campagne pensée pour vous<br>et pour toutes les occasions</h4>
          </div>
      </div>
  </div>
  <div class=\"parallax\"><img src=\"assets/images/10.jpg\" alt=\"Une campagne pensée pour vous\"></div>
</div>



{% endblock %}
", "campaign/show.html.twig", "/shared/httpd/my_project_directory/templates/campaign/show.html.twig");
    }
}
