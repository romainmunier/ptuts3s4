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

/* index/index.html.twig */
class __TwigTemplate_cb98b3087997d951ea82b96d8ee3cee0667b1e5832af0bc19a52e744dcb55b14 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "index/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->loadTemplate("includes/home/navbar.html.twig", "index/index.html.twig", 4)->display($context);
        // line 5
        echo "
    <div class=\"home-content\">
        <div class=\"home-content-left\">
            <div class=\"card card-custom\">
                <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/background/banner3.png"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"...\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Sample left menu</h5>
                    <p class=\"card-text\">Exemple de menu latéral gauche fixe non mobile que l'on ne peut pas bouger sans l'autorisation d'un administrateur</p>
                    <a href=\"#\" class=\"btn btn-braun\">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class=\"home-content-middle\">
            <header class=\"d-flex masthead\">
                <div class=\"container my-auto text-center\">
                    <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/background/banner3.png"), "html", null, true);
        echo "\" class=\"w-50 rounded mb-3\" draggable=\"false\"><br>
                    <div class=\"row\">
                        <div class=\"col-lg-6 row-align-right mb-2\">
                            <a class=\"btn btn-braun btn-xl js-scroll-trigger\" role=\"button\" href=\"#about\">Plus d'infos</a>
                        </div>
                        <br><br>
                        <div class=\"col-lg-6 row-align-left mb-2\">
                            ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 27)) {
            // line 28
            echo "                                <a class=\"btn btn-dark btn-xl js-scroll-trigger\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
            echo "\">Mon compte</a>
                            ";
        } else {
            // line 30
            echo "                                <a class=\"btn btn-dark btn-xl js-scroll-trigger\" role=\"button\" onclick=\"\$('#loginModal').modal();\">Connexion</a>
                            ";
        }
        // line 32
        echo "                        </div>
                    </div>
                    <div class=\"overlay\"></div>
                </div>
            </header>

            <section id=\"about\" class=\"content-section\">
                <div class=\"container text-center bg-lightbraun rounded-5\">
                    <div class=\"row\">
                        <div class=\"col-lg-10 mx-auto mt-4\">
                            <h2 class=\"text-left\" style=\"color: #484D51\">Informations à propos de CEFC</h2>
                            <p class=\"lead text-justify mb-2 txt-black\">
                                La Compagnie Excalibur Franche Comté (CEFC) est une association du type loi 1901, fondée à Belfort en septembre 2000, dont le thème central est l'époque moyenâgeuse. Les objectifs de l'association sont triples, basés sur le sport, l'animation et la culture. Ses membres peuvent :
                            </p>
                            <ul class=\"text-justify mt-0 lead txt-black\">
                                <li>apprendre des techniques de combat médiéval, avec des armes blanches du type épée, bouclier, bâton, ...</li>
                                <li>participer à des animations de fêtes, spectacles, banquets, ...</li>
                                <li>pratiquer divers artisanats et partager des connaissances liés à l'époque médiévale.</li>
                            </ul>
                            <p class=\"lead text-justify mt-5 mb-2 txt-black\">
                                Le côté sportif est celui qui constitue la principale activité des membres de la Compagnie Excalibur Franche Comté (CEFC), en terme de volume horaire. En effet, il y a deux entraînements hebdomadaires, avec échauffement, exercices et pratique libre, comme dans n’importe quel club de sport.
                                <br><br>
                                Le côté animation est assuré par un nombre restreint de membres (cf. trombinoscope) lors de manifestations festives, sous la forme d'ateliers pédagogiques et de démonstrations d'armes.
                                <br><br>
                                Le côté culturel est transversal  aux deux autres, puisqu'il nous sert aussi bien au niveau du combat pour les aspects techniques et matériels, que pour l'animation sur les ateliers pédagogiques.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class=\"home-content-right\">

        </div>
    </div>

    ";
        // line 69
        $this->loadTemplate("includes/home/modal.html.twig", "index/index.html.twig", 69)->display($context);
    }

    public function getTemplateName()
    {
        return "index/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 69,  95 => 32,  91 => 30,  85 => 28,  83 => 27,  73 => 20,  59 => 9,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index/index.html.twig", "/Users/romainmunier/Documents/Projets/Symfony/ptuts3s4/templates/index/index.html.twig");
    }
}
