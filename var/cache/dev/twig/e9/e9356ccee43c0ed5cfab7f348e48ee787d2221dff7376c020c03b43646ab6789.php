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
";
        // line 17
        echo "        <div class=\"home-content-middle\">
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

            <section style=\"margin-bottom: 50px;margin-top: -50px\">
                <div class=\"accordion\" id=\"accordionAccueil\">
                    <div class=\"card collapse-style\">
                        <div class=\"card-header collapse-style\" id=\"headingOne\">
                            <h2 class=\"mb-0\">
                                <button class=\"btn btn-dark btn-xl btn-link collapse-icon\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"false\" aria-controls=\"collapseOne\">
                                    Flash infos
                                </button>
                            </h2>
                        </div>

                        <div id=\"collapseOne\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionAccueil\">
                            <div class=\"card-body\">
                                ";
        // line 77
        if ((array_key_exists("flashinfos", $context) &&  !(null === (isset($context["flashinfos"]) || array_key_exists("flashinfos", $context) ? $context["flashinfos"] : (function () { throw new RuntimeError('Variable "flashinfos" does not exist.', 77, $this->source); })())))) {
            // line 78
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["flashinfos"]) || array_key_exists("flashinfos", $context) ? $context["flashinfos"] : (function () { throw new RuntimeError('Variable "flashinfos" does not exist.', 78, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["flashinfo"]) {
                // line 79
                echo "
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashinfo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                                ";
        } else {
            // line 82
            echo "                                    Rien pour le moment
                                ";
        }
        // line 84
        echo "                            </div>
                        </div>
                    </div>
                    <div class=\"card collapse-style\" style=\"background:none\">
                        <div class=\"card-header collapse-style\" id=\"headingTwo\">
                            <h2 class=\"mb-0\">
                                <button class=\"btn btn-dark btn-xl btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                    Derniers articles
                                </button>
                            </h2>
                        </div>
                        <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionAccueil\">
                            <div class=\"card-body\">
                                ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 97, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 98
            echo "                                    <div class=\"col-lg-4\">
                                        <div class=\"card\">
                                            <div class=\"card-body\">
                                                <blockquote class=\"blockquote mb-0\">
                                                    <p class=\"text-truncate\">";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "subject", [], "any", false, false, false, 102), "html", null, true);
            echo "</p>
                                                    <footer class=\"blockquote-footer\">Rédigé par ";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 103), "firstname", [], "any", false, false, false, 103), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 103), "lastname", [], "any", false, false, false, 103), "html", null, true);
            echo " le
                                                        <cite title=\"Source Title\">";
            // line 104
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "date", [], "any", false, false, false, 104), "d/m/Y"), "html", null, true);
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
        // line 118
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class=\"row\">
                    <div class=\"col\">
                        <div class=\"title\">
                            ";
        // line 128
        if ((twig_test_empty((isset($context["carousels"]) || array_key_exists("carousels", $context) ? $context["carousels"] : (function () { throw new RuntimeError('Variable "carousels" does not exist.', 128, $this->source); })())) || (0 === twig_compare(twig_length_filter($this->env, (isset($context["carousels"]) || array_key_exists("carousels", $context) ? $context["carousels"] : (function () { throw new RuntimeError('Variable "carousels" does not exist.', 128, $this->source); })())), 0)))) {
            // line 129
            echo "                                <h1 class=\"heading-stylized text-center\">Rien pour l'instant</h1>
                                ";
            // line 130
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DEVELOPERS")) {
                // line 131
                echo "                                    <div class=\"text-center mt mb\">
                                        <a class=\"btn btn-primary\" href=\"";
                // line 132
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_carousel_add", ["page" => "index"]);
                echo "\">
                                            <i class=\"fa fa-plus-square\"></i></a>
                                    </div>
                                ";
            }
            // line 136
            echo "                            ";
        } else {
            // line 137
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["carousels"]) || array_key_exists("carousels", $context) ? $context["carousels"] : (function () { throw new RuntimeError('Variable "carousels" does not exist.', 137, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["carousel"]) {
                // line 138
                echo "                                    <h1 class=\"heading-stylized text-center\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carousel"], "name", [], "any", false, false, false, 138), "html", null, true);
                echo "</h1>
                                    ";
                // line 139
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DEVELOPERS")) {
                    // line 140
                    echo "                                        <div class=\"text-center mt-2 mb-2\">
                                            <div class=\"btn-group\">
                                                <a class=\"btn btn-primary\" href=\"";
                    // line 142
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_carousel_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["carousel"], "id", [], "any", false, false, false, 142), "page" => "index"]), "html", null, true);
                    echo "\">
                                                    <i class=\"fa fa-edit\"></i></a>
                                                <a class=\"btn btn-primary\" href=\"";
                    // line 144
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_carousel_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["carousel"], "id", [], "any", false, false, false, 144), "page" => "index"]), "html", null, true);
                    echo "\">
                                                    <i class=\"fa fa-trash\"></i></a>
                                                <a class=\"btn btn-primary\" href=\"";
                    // line 146
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("medias_add", ["id" => twig_get_attribute($this->env, $this->source, $context["carousel"], "id", [], "any", false, false, false, 146), "page" => "index"]), "html", null, true);
                    echo "\">
                                                    <i class=\"fa fa-photo\"></i>
                                                </a>
                                            </div>
                                        </div>
                                    ";
                }
                // line 152
                echo "                                    ";
                if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carousel"], "medias", [], "any", false, false, false, 152)), 1))) {
                    // line 153
                    echo "                                        <div id=\"carousel-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carousel"], "id", [], "any", false, false, false, 153), "html", null, true);
                    echo "\" class=\"carousel slide\" data-ride=\"carousel\">
                                            <ol class=\"carousel-indicators\">
                                                ";
                    // line 155
                    $context["i"] = 0;
                    // line 156
                    echo "                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["carousel"], "medias", [], "any", false, false, false, 156));
                    foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
                        // line 157
                        echo "                                                    <li data-target=\"#carousel-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carousel"], "id", [], "any", false, false, false, 157), "html", null, true);
                        echo "\" data-slide-to=\"";
                        echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 157, $this->source); })()), "html", null, true);
                        echo "\"
                                                        ";
                        // line 158
                        if ((0 === twig_compare((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 158, $this->source); })()), 0))) {
                            echo "class=\"active\"";
                        }
                        echo "></li>
                                                    ";
                        // line 159
                        $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 159, $this->source); })()) + 1);
                        // line 160
                        echo "                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 161
                    echo "                                            </ol>
                                            <div class=\"carousel-inner\">
                                                ";
                    // line 163
                    $context["i"] = 0;
                    // line 164
                    echo "                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["carousel"], "medias", [], "any", false, false, false, 164));
                    foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
                        // line 165
                        echo "                                                    <div class=\"carousel-item ";
                        if ((0 === twig_compare((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 165, $this->source); })()), 0))) {
                            echo "active";
                        }
                        echo "\">
                                                        ";
                        // line 166
                        if (((((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["media"], "type", [], "any", false, false, false, 166), "png")) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["media"], "type", [], "any", false, false, false, 166), "gif"))) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["media"], "type", [], "any", false, false, false, 166), "jpeg"))) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["media"], "type", [], "any", false, false, false, 166), "jpg")))) {
                            // line 167
                            echo "                                                            <img class=\"d-block w-100\"
                                                                 src=\"";
                            // line 168
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/carousel/index/" . twig_get_attribute($this->env, $this->source, $context["media"], "path", [], "any", false, false, false, 168))), "html", null, true);
                            echo "\"
                                                                 alt=\"";
                            // line 169
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "path", [], "any", false, false, false, 169), "html", null, true);
                            echo "\">
                                                        ";
                        } else {
                            // line 171
                            echo "                                                            <video controls class=\"d-block w-75 align-content-center\" style=\"margin: 0 auto;\">
                                                                <source src=\"";
                            // line 172
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/carousel/index/" . twig_get_attribute($this->env, $this->source, $context["media"], "path", [], "any", false, false, false, 172))), "html", null, true);
                            echo "\">
                                                            </video>
                                                        ";
                        }
                        // line 175
                        echo "                                                        <div class=\"carousel-caption d-none d-md-block text-center\">
                                                            <div class=\"rounded bg-blue-gray carousel-custom\">";
                        // line 176
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "description", [], "any", false, false, false, 176), "html", null, true);
                        echo "</div>
                                                            <div class=\"mt-2 mb-2\">
                                                                ";
                        // line 178
                        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DEVELOPERS")) {
                            // line 179
                            echo "                                                                    <a class=\"btn btn-primary\"
                                                                       href=\"";
                            // line 180
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("medias_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["media"], "id", [], "any", false, false, false, 180), "page" => "index"]), "html", null, true);
                            echo "\"><i class=\"fa fa-trash\"></i></a>
                                                                ";
                        }
                        // line 182
                        echo "                                                            </div>
                                                        </div><br>
                                                    </div>
                                                    <br>
                                                    ";
                        // line 186
                        $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 186, $this->source); })()) + 1);
                        // line 187
                        echo "                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 188
                    echo "                                            </div>
                                            <a class=\"carousel-control-prev\" href=\"#carousel-";
                    // line 189
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carousel"], "id", [], "any", false, false, false, 189), "html", null, true);
                    echo "\" role=\"button\"
                                               data-slide=\"prev\">
                                                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                                <span class=\"sr-only\">Previous</span>
                                            </a>
                                            <a class=\"carousel-control-next\" href=\"#carousel-";
                    // line 194
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carousel"], "id", [], "any", false, false, false, 194), "html", null, true);
                    echo "\" role=\"button\"
                                               data-slide=\"next\">
                                                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                                <span class=\"sr-only\">Next</span>
                                            </a>
                                        </div>
                                    ";
                } elseif ((0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 200
$context["carousel"], "medias", [], "any", false, false, false, 200)), 1))) {
                    // line 201
                    echo "                                        ";
                    $context["media"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["carousel"], "medias", [], "any", false, false, false, 201), "first", [], "any", false, false, false, 201);
                    // line 202
                    echo "                                        ";
                    if ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 202, $this->source); })()), "type", [], "any", false, false, false, 202), "png")) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 202, $this->source); })()), "type", [], "any", false, false, false, 202), "gif"))) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 202, $this->source); })()), "type", [], "any", false, false, false, 202), "jpeg")))) {
                        // line 203
                        echo "                                            <img class=\"img-fluid mx-auto d-block rounded\"
                                                 src=\"";
                        // line 204
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/carousel/index/" . twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 204, $this->source); })()), "path", [], "any", false, false, false, 204))), "html", null, true);
                        echo "\"
                                                 alt=\"";
                        // line 205
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 205, $this->source); })()), "path", [], "any", false, false, false, 205), "html", null, true);
                        echo "\">
                                        ";
                    } else {
                        // line 207
                        echo "                                            <video controls class=\"d-block w-75 align-content-center\" style=\"margin: 0 auto;\">
                                                <source src=\"";
                        // line 208
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/carousel/index/" . twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 208, $this->source); })()), "path", [], "any", false, false, false, 208))), "html", null, true);
                        echo "\">
                                            </video>
                                        ";
                    }
                    // line 211
                    echo "                                        <div class=\"rounded bg-blue-gray carousel-custom\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 211, $this->source); })()), "description", [], "any", false, false, false, 211), "html", null, true);
                    echo "</div>
                                        ";
                    // line 212
                    if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DEVELOPERS")) {
                        // line 213
                        echo "                                            <div class=\"text-center mt-2 mb-2\">
                                                <a class=\"btn btn-primary\"
                                                   href=\"";
                        // line 215
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("medias_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 215, $this->source); })()), "id", [], "any", false, false, false, 215), "page" => "index"]), "html", null, true);
                        echo "\"><i class=\"fa fa-trash\"></i></a>
                                            </div>
                                        ";
                    }
                    // line 218
                    echo "                                    ";
                }
                // line 219
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carousel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 220
            echo "                            ";
        }
        // line 221
        echo "                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class=\"home-content-right\">

        </div>
    </div>

    ";
        // line 231
        $this->loadTemplate("includes/home/modal.html.twig", "index/index.html.twig", 231)->display($context);
        
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
        return array (  492 => 231,  480 => 221,  477 => 220,  471 => 219,  468 => 218,  462 => 215,  458 => 213,  456 => 212,  451 => 211,  445 => 208,  442 => 207,  437 => 205,  433 => 204,  430 => 203,  427 => 202,  424 => 201,  422 => 200,  413 => 194,  405 => 189,  402 => 188,  396 => 187,  394 => 186,  388 => 182,  383 => 180,  380 => 179,  378 => 178,  373 => 176,  370 => 175,  364 => 172,  361 => 171,  356 => 169,  352 => 168,  349 => 167,  347 => 166,  340 => 165,  335 => 164,  333 => 163,  329 => 161,  323 => 160,  321 => 159,  315 => 158,  308 => 157,  303 => 156,  301 => 155,  295 => 153,  292 => 152,  283 => 146,  278 => 144,  273 => 142,  269 => 140,  267 => 139,  262 => 138,  257 => 137,  254 => 136,  247 => 132,  244 => 131,  242 => 130,  239 => 129,  237 => 128,  225 => 118,  205 => 104,  199 => 103,  195 => 102,  189 => 98,  185 => 97,  170 => 84,  166 => 82,  163 => 81,  156 => 79,  151 => 78,  149 => 77,  102 => 32,  98 => 30,  92 => 28,  90 => 27,  80 => 20,  75 => 17,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {% include \"includes/home/navbar.html.twig\" %}

    <div class=\"home-content\">
{#        <div class=\"home-content-left\">#}
{#            <div class=\"card card-custom\">#}
{#                <img src=\"{{ asset(\"assets/background/banner3.png\") }}\" class=\"card-img-top\" alt=\"...\">#}
{#                <div class=\"card-body\">#}
{#                    <h5 class=\"card-title\">Sample left menu</h5>#}
{#                    <p class=\"card-text\">Exemple de menu latéral gauche fixe non mobile que l'on ne peut pas bouger sans l'autorisation d'un administrateur</p>#}
{#                    <a href=\"#\" class=\"btn btn-braun\">Go somewhere</a>#}
{#                </div>#}
{#            </div>#}
{#        </div>#}
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

            <section style=\"margin-bottom: 50px;margin-top: -50px\">
                <div class=\"accordion\" id=\"accordionAccueil\">
                    <div class=\"card collapse-style\">
                        <div class=\"card-header collapse-style\" id=\"headingOne\">
                            <h2 class=\"mb-0\">
                                <button class=\"btn btn-dark btn-xl btn-link collapse-icon\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"false\" aria-controls=\"collapseOne\">
                                    Flash infos
                                </button>
                            </h2>
                        </div>

                        <div id=\"collapseOne\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionAccueil\">
                            <div class=\"card-body\">
                                {% if flashinfos is defined and flashinfos is not null %}
                                    {% for flashinfo in flashinfos %}

                                    {% endfor %}
                                {% else %}
                                    Rien pour le moment
                                {% endif %}
                            </div>
                        </div>
                    </div>
                    <div class=\"card collapse-style\" style=\"background:none\">
                        <div class=\"card-header collapse-style\" id=\"headingTwo\">
                            <h2 class=\"mb-0\">
                                <button class=\"btn btn-dark btn-xl btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                    Derniers articles
                                </button>
                            </h2>
                        </div>
                        <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionAccueil\">
                            <div class=\"card-body\">
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
{% endblock %}", "index/index.html.twig", "/Users/romainmunier/Documents/GitHub/ptuts3s4/templates/index/index.html.twig");
    }
}
