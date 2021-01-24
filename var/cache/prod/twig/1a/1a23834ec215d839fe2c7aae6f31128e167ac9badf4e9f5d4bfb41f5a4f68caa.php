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

/* daily_fridge/info_recette.html.twig */
class __TwigTemplate_9a327a97f7abec40c88f233aee7673ac84c06377a31fc2a8137f5ba3546ada36 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("base.html.twig", "daily_fridge/info_recette.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
<h2> Fondue de camembert </h2>
<table>
    <tbody>
        <tr>
        <td>
            <div class=\"card border-primary mb-3\" style=\"max-width: 15rem;\">
                <div class=\"card-header\">Information</div>
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">Temps 17 min</h4>
                        <h4 class=\"card-title\">Personnes 4</h4>
                        <h4 class=\"card-title\">Niveau Très facile;</h4>
                    </div>
            </div>        
        </td>
        <td>
        </td>
        <td>
            <div class=\"card border-primary mb-3\" style=\"max-width: 15rem;\">
                <div class=\"card-header\">Produits</div>
                <div class=\"card-body\">
                    <h4 class=\"card-title\">1 camembert dans une boîte en bois</h4>
                </div>
            </div>        
        </td>
        </tr>
    </tbody>
</table> 

<h3> Méthode: </h3>

<ol>
  <li>Il vous suffit d'oter l'emballage du camembert et de remettre celui-ci dans sa boite en bois en otant le couvercle (côté étiquette).</li>
  <li>En été : Deposer le tout sur votre grill de barbecue... (sans flammes).</li>
  <li>En hiver : Le déposer sur une plaque électrique position MINIMUM (1)...</li>
  <li>Tout doucement, regarder votre camembert gonfler jusqu'à ce qu'il vous semble pret à éclater.</li>
  <li>A la pointe d'un couteau tailler sur le dessus une croix.</li>
  <li>Ouvrez et trempez y des morceaux de pains ou de pommes de terre (cuites au préalable).</li>
</ol>

";
    }

    public function getTemplateName()
    {
        return "daily_fridge/info_recette.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "daily_fridge/info_recette.html.twig", "D:\\Daily Fridge Git Hub\\DailyFridgeTest\\templates\\daily_fridge\\info_recette.html.twig");
    }
}
