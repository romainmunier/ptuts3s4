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
class __TwigTemplate_70c2731f91133e04127520bd062dd5a9f8543e17c4db3d935ef4ce3a2182b2fe extends Template
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
                <div class=\"container\">
                    <div class=\"row\">
                        ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 68
            echo "                            <div class=\"col-lg-4\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <blockquote class=\"blockquote mb-0\">
                                            <p class=\"text-truncate\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "subject", [], "any", false, false, false, 72), "html", null, true);
            echo "</p>
                                            <footer class=\"blockquote-footer\">Rédigé par ";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 73), "firstname", [], "any", false, false, false, 73), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 73), "lastname", [], "any", false, false, false, 73), "html", null, true);
            echo " le
                                                <cite title=\"Source Title\">";
            // line 74
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "date", [], "any", false, false, false, 74), "d/m/Y"), "html", null, true);
            echo "</cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                    <div class=\"card-footer\">
                                        <div class=\"row\">
                                            <a class=\"btn btn-outline-primary m-1\" href=\"#\">
                                                <i class=\"fas fa-eye\"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                    </div>
                </div>
            </section>

            <section>
                <div class=\"row\">
                    <div class=\"col\">
                        <div class=\"title\">
                            ";
        // line 96
        if ((twig_test_empty((isset($context["carousels"]) || array_key_exists("carousels", $context) ? $context["carousels"] : (function () { throw new RuntimeError('Variable "carousels" does not exist.', 96, $this->source); })())) || (0 === twig_compare(twig_length_filter($this->env, (isset($context["carousels"]) || array_key_exists("carousels", $context) ? $context["carousels"] : (function () { throw new RuntimeError('Variable "carousels" does not exist.', 96, $this->source); })())), 0)))) {
            // line 97
            echo "                                <h1 class=\"heading-stylized text-center\">Rien pour l'instant</h1>
                                ";
            // line 98
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DEVELOPERS")) {
                // line 99
                echo "                                    <div class=\"text-center mt mb\">
                                        <a class=\"btn btn-primary\" href=\"";
                // line 100
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_carousel_add", ["page" => "index"]);
                echo "\">
                                            <i class=\"fa fa-plus-square\"></i></a>
                                    </div>
                                ";
            }
            // line 104
            echo "                            ";
        } else {
            // line 105
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["carousels"]) || array_key_exists("carousels", $context) ? $context["carousels"] : (function () { throw new RuntimeError('Variable "carousels" does not exist.', 105, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["carousel"]) {
                // line 106
                echo "                                    <h1 class=\"heading-stylized text-center\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carousel"], "name", [], "any", false, false, false, 106), "html", null, true);
                echo "</h1>
                                    ";
                // line 107
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DEVELOPERS")) {
                    // line 108
                    echo "                                        <div class=\"text-center mt-2 mb-2\">
                                            <div class=\"btn-group\">
                                                <a class=\"btn btn-primary\" href=\"";
                    // line 110
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_carousel_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["carousel"], "id", [], "any", false, false, false, 110), "page" => "index"]), "html", null, true);
                    echo "\">
                                                    <i class=\"fa fa-edit\"></i></a>
                                                <a class=\"btn btn-primary\" href=\"";
                    // line 112
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_carousel_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["carousel"], "id", [], "any", false, false, false, 112), "page" => "index"]), "html", null, true);
                    echo "\">
                                                    <i class=\"fa fa-trash\"></i></a>
                                                <a class=\"btn btn-primary\" href=\"";
                    // line 114
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("medias_add", ["id" => twig_get_attribute($this->env, $this->source, $context["carousel"], "id", [], "any", false, false, false, 114), "page" => "index"]), "html", null, true);
                    echo "\">
                                                    <i class=\"fa fa-photo\"></i>
                                                </a>
                                            </div>
                                        </div>
                                    ";
                }
                // line 120
                echo "                                    ";
                if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carousel"], "medias", [], "any", false, false, false, 120)), 1))) {
                    // line 121
                    echo "                                        <div id=\"carousel-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carousel"], "id", [], "any", false, false, false, 121), "html", null, true);
                    echo "\" class=\"carousel slide\" data-ride=\"carousel\">
                                            <ol class=\"carousel-indicators\">
                                                ";
                    // line 123
                    $context["i"] = 0;
                    // line 124
                    echo "                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["carousel"], "medias", [], "any", false, false, false, 124));
                    foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
                        // line 125
                        echo "                                                    <li data-target=\"#carousel-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carousel"], "id", [], "any", false, false, false, 125), "html", null, true);
                        echo "\" data-slide-to=\"";
                        echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 125, $this->source); })()), "html", null, true);
                        echo "\"
                                                        ";
                        // line 126
                        if ((0 === twig_compare((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 126, $this->source); })()), 0))) {
                            echo "class=\"active\"";
                        }
                        echo "></li>
                                                    ";
                        // line 127
                        $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 127, $this->source); })()) + 1);
                        // line 128
                        echo "                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 129
                    echo "                                            </ol>
                                            <div class=\"carousel-inner\">
                                                ";
                    // line 131
                    $context["i"] = 0;
                    // line 132
                    echo "                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["carousel"], "medias", [], "any", false, false, false, 132));
                    foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
                        // line 133
                        echo "                                                    <div class=\"carousel-item ";
                        if ((0 === twig_compare((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 133, $this->source); })()), 0))) {
                            echo "active";
                        }
                        echo "\">
                                                        ";
                        // line 134
                        if (((((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["media"], "type", [], "any", false, false, false, 134), "png")) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["media"], "type", [], "any", false, false, false, 134), "gif"))) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["media"], "type", [], "any", false, false, false, 134), "jpeg"))) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["media"], "type", [], "any", false, false, false, 134), "jpg")))) {
                            // line 135
                            echo "                                                            <img class=\"d-block w-100\"
                                                                 src=\"";
                            // line 136
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/carousel/index/" . twig_get_attribute($this->env, $this->source, $context["media"], "path", [], "any", false, false, false, 136))), "html", null, true);
                            echo "\"
                                                                 alt=\"";
                            // line 137
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "path", [], "any", false, false, false, 137), "html", null, true);
                            echo "\">
                                                        ";
                        } else {
                            // line 139
                            echo "                                                            <video controls class=\"d-block w-75 align-content-center\" style=\"margin: 0 auto;\">
                                                                <source src=\"";
                            // line 140
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/carousel/index/" . twig_get_attribute($this->env, $this->source, $context["media"], "path", [], "any", false, false, false, 140))), "html", null, true);
                            echo "\">
                                                            </video>
                                                        ";
                        }
                        // line 143
                        echo "                                                        <div class=\"carousel-caption d-none d-md-block text-center\">
                                                            <div class=\"rounded bg-blue-gray carousel-custom\">";
                        // line 144
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "description", [], "any", false, false, false, 144), "html", null, true);
                        echo "</div>
                                                            <div class=\"mt-2 mb-2\">
                                                                ";
                        // line 146
                        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DEVELOPERS")) {
                            // line 147
                            echo "                                                                    <a class=\"btn btn-primary\"
                                                                       href=\"";
                            // line 148
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("medias_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["media"], "id", [], "any", false, false, false, 148), "page" => "index"]), "html", null, true);
                            echo "\"><i class=\"fa fa-trash\"></i></a>
                                                                ";
                        }
                        // line 150
                        echo "                                                            </div>
                                                        </div><br>
                                                    </div>
                                                    <br>
                                                    ";
                        // line 154
                        $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 154, $this->source); })()) + 1);
                        // line 155
                        echo "                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 156
                    echo "                                            </div>
                                            <a class=\"carousel-control-prev\" href=\"#carousel-";
                    // line 157
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carousel"], "id", [], "any", false, false, false, 157), "html", null, true);
                    echo "\" role=\"button\"
                                               data-slide=\"prev\">
                                                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                                <span class=\"sr-only\">Previous</span>
                                            </a>
                                            <a class=\"carousel-control-next\" href=\"#carousel-";
                    // line 162
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carousel"], "id", [], "any", false, false, false, 162), "html", null, true);
                    echo "\" role=\"button\"
                                               data-slide=\"next\">
                                                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                                <span class=\"sr-only\">Next</span>
                                            </a>
                                        </div>
                                    ";
                } elseif ((0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 168
$context["carousel"], "medias", [], "any", false, false, false, 168)), 1))) {
                    // line 169
                    echo "                                        ";
                    $context["media"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["carousel"], "medias", [], "any", false, false, false, 169), "first", [], "any", false, false, false, 169);
                    // line 170
                    echo "                                        ";
                    if ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 170, $this->source); })()), "type", [], "any", false, false, false, 170), "png")) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 170, $this->source); })()), "type", [], "any", false, false, false, 170), "gif"))) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 170, $this->source); })()), "type", [], "any", false, false, false, 170), "jpeg")))) {
                        // line 171
                        echo "                                            <img class=\"img-fluid mx-auto d-block rounded\"
                                                 src=\"";
                        // line 172
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/carousel/index/" . twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 172, $this->source); })()), "path", [], "any", false, false, false, 172))), "html", null, true);
                        echo "\"
                                                 alt=\"";
                        // line 173
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 173, $this->source); })()), "path", [], "any", false, false, false, 173), "html", null, true);
                        echo "\">
                                        ";
                    } else {
                        // line 175
                        echo "                                            <video controls class=\"d-block w-75 align-content-center\" style=\"margin: 0 auto;\">
                                                <source src=\"";
                        // line 176
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/carousel/index/" . twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 176, $this->source); })()), "path", [], "any", false, false, false, 176))), "html", null, true);
                        echo "\">
                                            </video>
                                        ";
                    }
                    // line 179
                    echo "                                        <div class=\"rounded bg-blue-gray carousel-custom\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 179, $this->source); })()), "description", [], "any", false, false, false, 179), "html", null, true);
                    echo "</div>
                                        ";
                    // line 180
                    if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DEVELOPERS")) {
                        // line 181
                        echo "                                            <div class=\"text-center mt-2 mb-2\">
                                                <a class=\"btn btn-primary\"
                                                   href=\"";
                        // line 183
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("medias_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 183, $this->source); })()), "id", [], "any", false, false, false, 183), "page" => "index"]), "html", null, true);
                        echo "\"><i class=\"fa fa-trash\"></i></a>
                                            </div>
                                        ";
                    }
                    // line 186
                    echo "                                    ";
                }
                // line 187
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carousel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 188
            echo "                            ";
        }
        // line 189
        echo "                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class=\"home-content-right\">

        </div>
    </div>

    ";
        // line 199
        $this->loadTemplate("includes/home/modal.html.twig", "index/index.html.twig", 199)->display($context);
        
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
        return array (  455 => 199,  443 => 189,  440 => 188,  434 => 187,  431 => 186,  425 => 183,  421 => 181,  419 => 180,  414 => 179,  408 => 176,  405 => 175,  400 => 173,  396 => 172,  393 => 171,  390 => 170,  387 => 169,  385 => 168,  376 => 162,  368 => 157,  365 => 156,  359 => 155,  357 => 154,  351 => 150,  346 => 148,  343 => 147,  341 => 146,  336 => 144,  333 => 143,  327 => 140,  324 => 139,  319 => 137,  315 => 136,  312 => 135,  310 => 134,  303 => 133,  298 => 132,  296 => 131,  292 => 129,  286 => 128,  284 => 127,  278 => 126,  271 => 125,  266 => 124,  264 => 123,  258 => 121,  255 => 120,  246 => 114,  241 => 112,  236 => 110,  232 => 108,  230 => 107,  225 => 106,  220 => 105,  217 => 104,  210 => 100,  207 => 99,  205 => 98,  202 => 97,  200 => 96,  190 => 88,  170 => 74,  164 => 73,  160 => 72,  154 => 68,  150 => 67,  113 => 32,  109 => 30,  103 => 28,  101 => 27,  91 => 20,  77 => 9,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
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
                <div class=\"container\">
                    <div class=\"row\">
                        {% for article in articles %}
                            <div class=\"col-lg-4\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <blockquote class=\"blockquote mb-0\">
                                            <p class=\"text-truncate\">{{ article.subject }}</p>
                                            <footer class=\"blockquote-footer\">Rédigé par {{ article.author.firstname }} {{ article.author.lastname }} le
                                                <cite title=\"Source Title\">{{ article.date|date(\"d/m/Y\") }}</cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                    <div class=\"card-footer\">
                                        <div class=\"row\">
                                            <a class=\"btn btn-outline-primary m-1\" href=\"#\">
                                                <i class=\"fas fa-eye\"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </section>

            <section>
                <div class=\"row\">
                    <div class=\"col\">
                        <div class=\"title\">
                            {% if carousels is empty or carousels|length == 0 %}
                                <h1 class=\"heading-stylized text-center\">Rien pour l'instant</h1>
                                {% if is_granted('ROLE_DEVELOPERS') %}
                                    <div class=\"text-center mt mb\">
                                        <a class=\"btn btn-primary\" href=\"{{ path('admin_carousel_add', {page:'index'}) }}\">
                                            <i class=\"fa fa-plus-square\"></i></a>
                                    </div>
                                {% endif %}
                            {% else %}
                                {% for carousel in carousels %}
                                    <h1 class=\"heading-stylized text-center\">{{ carousel.name }}</h1>
                                    {% if is_granted('ROLE_DEVELOPERS') %}
                                        <div class=\"text-center mt-2 mb-2\">
                                            <div class=\"btn-group\">
                                                <a class=\"btn btn-primary\" href=\"{{ path('admin_carousel_edit', {'id' : carousel.id, page:'index'}) }}\">
                                                    <i class=\"fa fa-edit\"></i></a>
                                                <a class=\"btn btn-primary\" href=\"{{ path('admin_carousel_delete', {'id' : carousel.id, page:'index'}) }}\">
                                                    <i class=\"fa fa-trash\"></i></a>
                                                <a class=\"btn btn-primary\" href=\"{{ path('medias_add', {'id' : carousel.id, page:'index'}) }}\">
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
                                                                 src=\"{{ asset('uploads/carousel/index/' ~ media.path) }}\"
                                                                 alt=\"{{ media.path }}\">
                                                        {% else %}
                                                            <video controls class=\"d-block w-75 align-content-center\" style=\"margin: 0 auto;\">
                                                                <source src=\"{{ asset('uploads/carousel/index/' ~ media.path) }}\">
                                                            </video>
                                                        {% endif %}
                                                        <div class=\"carousel-caption d-none d-md-block text-center\">
                                                            <div class=\"rounded bg-blue-gray carousel-custom\">{{ media.description }}</div>
                                                            <div class=\"mt-2 mb-2\">
                                                                {% if is_granted('ROLE_DEVELOPERS') %}
                                                                    <a class=\"btn btn-primary\"
                                                                       href=\"{{ path('medias_delete', {'id': media.id, page:'index'}) }}\"><i class=\"fa fa-trash\"></i></a>
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
                                                 src=\"{{ asset('uploads/carousel/index/' ~ media.path) }}\"
                                                 alt=\"{{ media.path }}\">
                                        {% else %}
                                            <video controls class=\"d-block w-75 align-content-center\" style=\"margin: 0 auto;\">
                                                <source src=\"{{ asset('uploads/carousel/index/' ~ media.path) }}\">
                                            </video>
                                        {% endif %}
                                        <div class=\"rounded bg-blue-gray carousel-custom\">{{ media.description }}</div>
                                        {% if is_granted('ROLE_DEVELOPERS') %}
                                            <div class=\"text-center mt-2 mb-2\">
                                                <a class=\"btn btn-primary\"
                                                   href=\"{{ path('medias_delete', {'id': media.id, page:'index'}) }}\"><i class=\"fa fa-trash\"></i></a>
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
", "index/index.html.twig", "/Users/romainmunier/Documents/GitHub/ptuts3s4/templates/index/index.html.twig");
    }
}
