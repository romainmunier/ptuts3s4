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
class __TwigTemplate_f37abbce4e7a65f6868b86196536fe79cf9451d5334201ccb0f3eb2853838401 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        echo "\" class=\"w-50 rounded mb-3\" draggable=\"false\" alt=\"\"><br>
                    <div class=\"row\">
                        <div class=\"col-lg-6 row-align-right mb-2\">
                            <a class=\"btn btn-braun btn-xl js-scroll-trigger\" role=\"button\" href=\"#about\">Plus d'infos</a>
                        </div>
                        <br><br>
                        <div class=\"col-lg-6 row-align-left mb-2\">
                            ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27)) {
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

            <section>
                <div class=\"row\">
                    <div class=\"col\">
                        <div class=\"title\">
                            ";
        // line 68
        if ((twig_test_empty((isset($context["carousels"]) || array_key_exists("carousels", $context) ? $context["carousels"] : (function () { throw new RuntimeError('Variable "carousels" does not exist.', 68, $this->source); })())) || (0 === twig_compare(twig_length_filter($this->env, (isset($context["carousels"]) || array_key_exists("carousels", $context) ? $context["carousels"] : (function () { throw new RuntimeError('Variable "carousels" does not exist.', 68, $this->source); })())), 0)))) {
            // line 69
            echo "                                <h1 class=\"heading-stylized text-center\">Rien pour l'instant</h1>
                                ";
            // line 70
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 71
                echo "                                    <div class=\"text-center mt mb\">
                                        <a class=\"btn btn-primary\" href=\"";
                // line 72
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_carousel_add", ["page" => "accueil"]);
                echo "\">
                                            <i class=\"fa fa-plus-square\"></i></a>
                                    </div>
                                ";
            }
            // line 76
            echo "                            ";
        } else {
            // line 77
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["carousels"]) || array_key_exists("carousels", $context) ? $context["carousels"] : (function () { throw new RuntimeError('Variable "carousels" does not exist.', 77, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["carousel"]) {
                // line 78
                echo "                                    <h1 class=\"heading-stylized text-center\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carousel"], "name", [], "any", false, false, false, 78), "html", null, true);
                echo "</h1>
                                    ";
                // line 79
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 80
                    echo "                                        <div class=\"text-center mt-2 mb-2\">
                                            <div class=\"btn-group\">
                                                <a class=\"btn btn-primary\" href=\"";
                    // line 82
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_carousel_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["carousel"], "id", [], "any", false, false, false, 82), "page" => "accueil"]), "html", null, true);
                    echo "\">
                                                    <i class=\"fa fa-edit\"></i></a>
                                                <a class=\"btn btn-primary\" href=\"";
                    // line 84
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_carousel_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["carousel"], "id", [], "any", false, false, false, 84), "page" => "accueil"]), "html", null, true);
                    echo "\">
                                                    <i class=\"fa fa-trash\"></i></a>
                                                <a class=\"btn btn-primary\" href=\"";
                    // line 86
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("medias_add", ["id" => twig_get_attribute($this->env, $this->source, $context["carousel"], "id", [], "any", false, false, false, 86), "page" => "accueil"]), "html", null, true);
                    echo "\">
                                                    <i class=\"fa fa-photo\"></i>
                                                </a>
                                            </div>
                                        </div>
                                    ";
                }
                // line 92
                echo "                                    ";
                if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carousel"], "medias", [], "any", false, false, false, 92)), 1))) {
                    // line 93
                    echo "                                        <div id=\"carousel-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carousel"], "id", [], "any", false, false, false, 93), "html", null, true);
                    echo "\" class=\"carousel slide\" data-ride=\"carousel\">
                                            <ol class=\"carousel-indicators\">
                                                ";
                    // line 95
                    $context["i"] = 0;
                    // line 96
                    echo "                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["carousel"], "medias", [], "any", false, false, false, 96));
                    foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
                        // line 97
                        echo "                                                    <li data-target=\"#carousel-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carousel"], "id", [], "any", false, false, false, 97), "html", null, true);
                        echo "\" data-slide-to=\"";
                        echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 97, $this->source); })()), "html", null, true);
                        echo "\"
                                                        ";
                        // line 98
                        if ((0 === twig_compare((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 98, $this->source); })()), 0))) {
                            echo "class=\"active\"";
                        }
                        echo "></li>
                                                    ";
                        // line 99
                        $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 99, $this->source); })()) + 1);
                        // line 100
                        echo "                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 101
                    echo "                                            </ol>
                                            <div class=\"carousel-inner\">
                                                ";
                    // line 103
                    $context["i"] = 0;
                    // line 104
                    echo "                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["carousel"], "medias", [], "any", false, false, false, 104));
                    foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
                        // line 105
                        echo "                                                    <div class=\"carousel-item ";
                        if ((0 === twig_compare((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 105, $this->source); })()), 0))) {
                            echo "active";
                        }
                        echo "\">
                                                        ";
                        // line 106
                        if (((((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["media"], "type", [], "any", false, false, false, 106), "png")) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["media"], "type", [], "any", false, false, false, 106), "gif"))) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["media"], "type", [], "any", false, false, false, 106), "jpeg"))) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["media"], "type", [], "any", false, false, false, 106), "jpg")))) {
                            // line 107
                            echo "                                                            <img class=\"d-block w-100\"
                                                                 src=\"";
                            // line 108
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/accueil/" . twig_get_attribute($this->env, $this->source, $context["media"], "path", [], "any", false, false, false, 108))), "html", null, true);
                            echo "\"
                                                                 alt=\"";
                            // line 109
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "path", [], "any", false, false, false, 109), "html", null, true);
                            echo "\">
                                                        ";
                        } else {
                            // line 111
                            echo "                                                            <video controls class=\"d-block w-75 align-content-center\" style=\"margin: 0 auto;\">
                                                                <source src=\"";
                            // line 112
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/accueil/" . twig_get_attribute($this->env, $this->source, $context["media"], "path", [], "any", false, false, false, 112))), "html", null, true);
                            echo "\">
                                                            </video>
                                                        ";
                        }
                        // line 115
                        echo "                                                        <div class=\"carousel-caption d-none d-md-block text-center\">
                                                            <div class=\"rounded bg-blue-gray carousel-custom\">";
                        // line 116
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "description", [], "any", false, false, false, 116), "html", null, true);
                        echo "</div>
                                                            <div class=\"mt-2 mb-2\">
                                                                ";
                        // line 118
                        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                            // line 119
                            echo "                                                                    <a class=\"btn btn-primary\"
                                                                       href=\"";
                            // line 120
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("medias_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["media"], "id", [], "any", false, false, false, 120), "page" => "accueil"]), "html", null, true);
                            echo "\"><i class=\"fa fa-trash\"></i></a>
                                                                ";
                        }
                        // line 122
                        echo "                                                            </div>
                                                        </div><br>
                                                    </div>
                                                    <br>
                                                    ";
                        // line 126
                        $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 126, $this->source); })()) + 1);
                        // line 127
                        echo "                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 128
                    echo "                                            </div>
                                            <a class=\"carousel-control-prev\" href=\"#carousel-";
                    // line 129
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carousel"], "id", [], "any", false, false, false, 129), "html", null, true);
                    echo "\" role=\"button\"
                                               data-slide=\"prev\">
                                                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                                <span class=\"sr-only\">Previous</span>
                                            </a>
                                            <a class=\"carousel-control-next\" href=\"#carousel-";
                    // line 134
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carousel"], "id", [], "any", false, false, false, 134), "html", null, true);
                    echo "\" role=\"button\"
                                               data-slide=\"next\">
                                                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                                <span class=\"sr-only\">Next</span>
                                            </a>
                                        </div>
                                    ";
                } elseif ((0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 140
$context["carousel"], "medias", [], "any", false, false, false, 140)), 1))) {
                    // line 141
                    echo "                                        ";
                    $context["media"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["carousel"], "medias", [], "any", false, false, false, 141), "first", [], "any", false, false, false, 141);
                    // line 142
                    echo "                                        ";
                    if ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 142, $this->source); })()), "type", [], "any", false, false, false, 142), "png")) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 142, $this->source); })()), "type", [], "any", false, false, false, 142), "gif"))) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 142, $this->source); })()), "type", [], "any", false, false, false, 142), "jpeg")))) {
                        // line 143
                        echo "                                            <img class=\"img-fluid mx-auto d-block rounded\"
                                                 src=\"";
                        // line 144
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/accueil/" . twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 144, $this->source); })()), "path", [], "any", false, false, false, 144))), "html", null, true);
                        echo "\"
                                                 alt=\"";
                        // line 145
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 145, $this->source); })()), "path", [], "any", false, false, false, 145), "html", null, true);
                        echo "\">
                                        ";
                    } else {
                        // line 147
                        echo "                                            <video controls class=\"d-block w-75 align-content-center\" style=\"margin: 0 auto;\">
                                                <source src=\"";
                        // line 148
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/accueil/" . twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 148, $this->source); })()), "path", [], "any", false, false, false, 148))), "html", null, true);
                        echo "\">
                                            </video>
                                        ";
                    }
                    // line 151
                    echo "                                        <div class=\"rounded bg-blue-gray carousel-custom\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 151, $this->source); })()), "description", [], "any", false, false, false, 151), "html", null, true);
                    echo "</div>
                                        ";
                    // line 152
                    if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                        // line 153
                        echo "                                            <div class=\"text-center mt-2 mb-2\">
                                                <a class=\"btn btn-primary\"
                                                   href=\"";
                        // line 155
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("medias_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 155, $this->source); })()), "id", [], "any", false, false, false, 155), "page" => "accueil"]), "html", null, true);
                        echo "\"><i class=\"fa fa-trash\"></i></a>
                                            </div>
                                        ";
                    }
                    // line 158
                    echo "                                    ";
                }
                // line 159
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carousel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            echo "                            ";
        }
        // line 161
        echo "                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class=\"home-content-right\">

        </div>
    </div>

    ";
        // line 171
        $this->loadTemplate("includes/home/modal.html.twig", "index/index.html.twig", 171)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  406 => 171,  394 => 161,  391 => 160,  385 => 159,  382 => 158,  376 => 155,  372 => 153,  370 => 152,  365 => 151,  359 => 148,  356 => 147,  351 => 145,  347 => 144,  344 => 143,  341 => 142,  338 => 141,  336 => 140,  327 => 134,  319 => 129,  316 => 128,  310 => 127,  308 => 126,  302 => 122,  297 => 120,  294 => 119,  292 => 118,  287 => 116,  284 => 115,  278 => 112,  275 => 111,  270 => 109,  266 => 108,  263 => 107,  261 => 106,  254 => 105,  249 => 104,  247 => 103,  243 => 101,  237 => 100,  235 => 99,  229 => 98,  222 => 97,  217 => 96,  215 => 95,  209 => 93,  206 => 92,  197 => 86,  192 => 84,  187 => 82,  183 => 80,  181 => 79,  176 => 78,  171 => 77,  168 => 76,  161 => 72,  158 => 71,  156 => 70,  153 => 69,  151 => 68,  113 => 32,  109 => 30,  103 => 28,  101 => 27,  91 => 20,  77 => 9,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {% include \"includes/home/navbar.html.twig\" %}

    <div class=\"home-content\">
        <div class=\"home-content-left\">
            <div class=\"card card-custom\">
                <img src=\"{{ asset(\"assets/background/banner3.png\") }}\" class=\"card-img-top\" alt=\"...\">
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
                    <img src=\"{{ asset('assets/background/banner3.png') }}\" class=\"w-50 rounded mb-3\" draggable=\"false\" alt=\"\"><br>
                    <div class=\"row\">
                        <div class=\"col-lg-6 row-align-right mb-2\">
                            <a class=\"btn btn-braun btn-xl js-scroll-trigger\" role=\"button\" href=\"#about\">Plus d'infos</a>
                        </div>
                        <br><br>
                        <div class=\"col-lg-6 row-align-left mb-2\">
                            {% if app.user %}
                                <a class=\"btn btn-dark btn-xl js-scroll-trigger\" href=\"{{ path(\"account\") }}\">Mon compte</a>
                            {% else %}
                                <a class=\"btn btn-dark btn-xl js-scroll-trigger\" role=\"button\" onclick=\"\$('#loginModal').modal();\">Connexion</a>
                            {% endif %}
                        </div>
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

            <section>
                <div class=\"row\">
                    <div class=\"col\">
                        <div class=\"title\">
                            {% if carousels is empty or carousels|length == 0 %}
                                <h1 class=\"heading-stylized text-center\">Rien pour l'instant</h1>
                                {% if is_granted('ROLE_ADMIN') %}
                                    <div class=\"text-center mt mb\">
                                        <a class=\"btn btn-primary\" href=\"{{ path('admin_carousel_add', {page:'accueil'}) }}\">
                                            <i class=\"fa fa-plus-square\"></i></a>
                                    </div>
                                {% endif %}
                            {% else %}
                                {% for carousel in carousels %}
                                    <h1 class=\"heading-stylized text-center\">{{ carousel.name }}</h1>
                                    {% if is_granted('ROLE_ADMIN') %}
                                        <div class=\"text-center mt-2 mb-2\">
                                            <div class=\"btn-group\">
                                                <a class=\"btn btn-primary\" href=\"{{ path('admin_carousel_edit', {'id' : carousel.id, page:'accueil'}) }}\">
                                                    <i class=\"fa fa-edit\"></i></a>
                                                <a class=\"btn btn-primary\" href=\"{{ path('admin_carousel_delete', {'id' : carousel.id, page:'accueil'}) }}\">
                                                    <i class=\"fa fa-trash\"></i></a>
                                                <a class=\"btn btn-primary\" href=\"{{ path('medias_add', {'id' : carousel.id, page:'accueil'}) }}\">
                                                    <i class=\"fa fa-photo\"></i>
                                                </a>
                                            </div>
                                        </div>
                                    {% endif %}
                                    {% if carousel.medias | length > 1 %}
                                        <div id=\"carousel-{{ carousel.id }}\" class=\"carousel slide\" data-ride=\"carousel\">
                                            <ol class=\"carousel-indicators\">
                                                {% set i = 0 %}
                                                {% for media in carousel.medias %}
                                                    <li data-target=\"#carousel-{{ carousel.id }}\" data-slide-to=\"{{ i }}\"
                                                        {% if i == 0 %}class=\"active\"{% endif %}></li>
                                                    {% set i = i + 1 %}
                                                {% endfor %}
                                            </ol>
                                            <div class=\"carousel-inner\">
                                                {% set i = 0 %}
                                                {% for media in carousel.medias %}
                                                    <div class=\"carousel-item {% if i == 0 %}active{% endif %}\">
                                                        {% if media.type == \"png\" or media.type == \"gif\" or media.type == \"jpeg\" or media.type == \"jpg\" %}
                                                            <img class=\"d-block w-100\"
                                                                 src=\"{{ asset('uploads/accueil/' ~ media.path) }}\"
                                                                 alt=\"{{ media.path }}\">
                                                        {% else %}
                                                            <video controls class=\"d-block w-75 align-content-center\" style=\"margin: 0 auto;\">
                                                                <source src=\"{{ asset('uploads/accueil/' ~ media.path) }}\">
                                                            </video>
                                                        {% endif %}
                                                        <div class=\"carousel-caption d-none d-md-block text-center\">
                                                            <div class=\"rounded bg-blue-gray carousel-custom\">{{ media.description }}</div>
                                                            <div class=\"mt-2 mb-2\">
                                                                {% if is_granted('ROLE_ADMIN') %}
                                                                    <a class=\"btn btn-primary\"
                                                                       href=\"{{ path('medias_delete', {'id': media.id, page:'accueil'}) }}\"><i class=\"fa fa-trash\"></i></a>
                                                                {% endif %}
                                                            </div>
                                                        </div><br>
                                                    </div>
                                                    <br>
                                                    {% set i = i + 1 %}
                                                {% endfor %}
                                            </div>
                                            <a class=\"carousel-control-prev\" href=\"#carousel-{{ carousel.id }}\" role=\"button\"
                                               data-slide=\"prev\">
                                                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                                <span class=\"sr-only\">Previous</span>
                                            </a>
                                            <a class=\"carousel-control-next\" href=\"#carousel-{{ carousel.id }}\" role=\"button\"
                                               data-slide=\"next\">
                                                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                                <span class=\"sr-only\">Next</span>
                                            </a>
                                        </div>
                                    {% elseif carousel.medias | length == 1 %}
                                        {% set media = carousel.medias.first %}
                                        {% if media.type == \"png\" or media.type == \"gif\" or media.type == \"jpeg\" %}
                                            <img class=\"img-fluid mx-auto d-block rounded\"
                                                 src=\"{{ asset('uploads/accueil/' ~ media.path) }}\"
                                                 alt=\"{{ media.path }}\">
                                        {% else %}
                                            <video controls class=\"d-block w-75 align-content-center\" style=\"margin: 0 auto;\">
                                                <source src=\"{{ asset('uploads/accueil/' ~ media.path) }}\">
                                            </video>
                                        {% endif %}
                                        <div class=\"rounded bg-blue-gray carousel-custom\">{{ media.description }}</div>
                                        {% if is_granted('ROLE_ADMIN') %}
                                            <div class=\"text-center mt-2 mb-2\">
                                                <a class=\"btn btn-primary\"
                                                   href=\"{{ path('medias_delete', {'id': media.id, page:'accueil'}) }}\"><i class=\"fa fa-trash\"></i></a>
                                            </div>
                                        {% endif %}
                                    {% endif %}
                                {% endfor %}
                            {% endif %}
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class=\"home-content-right\">

        </div>
    </div>

    {% include \"includes/home/modal.html.twig\" %}
{% endblock %}
", "index/index.html.twig", "C:\\Users\\alexi\\Documents\\GitHub\\ptuts3s4\\templates\\index\\index.html.twig");
    }
}
