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
                                            <a class=\"btn btn-outline-warning m-1\" href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles_edit", ["article" => twig_get_attribute($this->env, $this->source, $context["article"], "article", [], "any", false, false, false, 83)]), "html", null, true);
            echo "\">
                                                <i class=\"fas fa-edit\"></i>
                                            </a>
                                            <button class=\"btn btn-outline-danger m-1\" onclick=\"\$('#modal-";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 86), "html", null, true);
            echo "-delete').modal();\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"modal fade\" id=\"modal-";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 93), "html", null, true);
            echo "-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
                                <div class=\"modal-dialog modal-dialog-centered\">
";
            // line 96
            echo "                                    <div>
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title\">Confirmation de suppression</h5>
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                <span aria-hidden=\"true\">&times;</span>
                                            </button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <p>Êtes-vous sur de vouloir supprimer l'article nommé : \"";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "subject", [], "any", false, false, false, 104), "html", null, true);
            echo "\" ?</p>
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                                            <a type=\"button\" class=\"btn btn-danger\" href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles_delete", ["article" => twig_get_attribute($this->env, $this->source, $context["article"], "article", [], "any", false, false, false, 108)]), "html", null, true);
            echo "\">Supprimer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "                    </div>
                </div>
            </section>

            <section>
                <div class=\"row\">
                    <div class=\"col\">
                        <div class=\"title\">
                            ";
        // line 122
        if ((twig_test_empty((isset($context["carousels"]) || array_key_exists("carousels", $context) ? $context["carousels"] : (function () { throw new RuntimeError('Variable "carousels" does not exist.', 122, $this->source); })())) || (0 === twig_compare(twig_length_filter($this->env, (isset($context["carousels"]) || array_key_exists("carousels", $context) ? $context["carousels"] : (function () { throw new RuntimeError('Variable "carousels" does not exist.', 122, $this->source); })())), 0)))) {
            // line 123
            echo "                                <h1 class=\"heading-stylized text-center\">Rien pour l'instant</h1>
                                ";
            // line 124
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DEVELOPERS")) {
                // line 125
                echo "                                    <div class=\"text-center mt mb\">
                                        <a class=\"btn btn-primary\" href=\"";
                // line 126
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_carousel_add", ["page" => "index"]);
                echo "\">
                                            <i class=\"fa fa-plus-square\"></i></a>
                                    </div>
                                ";
            }
            // line 130
            echo "                            ";
        } else {
            // line 131
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["carousels"]) || array_key_exists("carousels", $context) ? $context["carousels"] : (function () { throw new RuntimeError('Variable "carousels" does not exist.', 131, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["carousel"]) {
                // line 132
                echo "                                    <h1 class=\"heading-stylized text-center\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carousel"], "name", [], "any", false, false, false, 132), "html", null, true);
                echo "</h1>
                                    ";
                // line 133
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DEVELOPERS")) {
                    // line 134
                    echo "                                        <div class=\"text-center mt-2 mb-2\">
                                            <div class=\"btn-group\">
                                                <a class=\"btn btn-primary\" href=\"";
                    // line 136
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_carousel_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["carousel"], "id", [], "any", false, false, false, 136), "page" => "index"]), "html", null, true);
                    echo "\">
                                                    <i class=\"fa fa-edit\"></i></a>
                                                <a class=\"btn btn-primary\" href=\"";
                    // line 138
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_carousel_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["carousel"], "id", [], "any", false, false, false, 138), "page" => "index"]), "html", null, true);
                    echo "\">
                                                    <i class=\"fa fa-trash\"></i></a>
                                                <a class=\"btn btn-primary\" href=\"";
                    // line 140
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("medias_add", ["id" => twig_get_attribute($this->env, $this->source, $context["carousel"], "id", [], "any", false, false, false, 140), "page" => "index"]), "html", null, true);
                    echo "\">
                                                    <i class=\"fa fa-photo\"></i>
                                                </a>
                                            </div>
                                        </div>
                                    ";
                }
                // line 146
                echo "                                    ";
                if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carousel"], "medias", [], "any", false, false, false, 146)), 1))) {
                    // line 147
                    echo "                                        <div id=\"carousel-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carousel"], "id", [], "any", false, false, false, 147), "html", null, true);
                    echo "\" class=\"carousel slide\" data-ride=\"carousel\">
                                            <ol class=\"carousel-indicators\">
                                                ";
                    // line 149
                    $context["i"] = 0;
                    // line 150
                    echo "                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["carousel"], "medias", [], "any", false, false, false, 150));
                    foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
                        // line 151
                        echo "                                                    <li data-target=\"#carousel-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carousel"], "id", [], "any", false, false, false, 151), "html", null, true);
                        echo "\" data-slide-to=\"";
                        echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 151, $this->source); })()), "html", null, true);
                        echo "\"
                                                        ";
                        // line 152
                        if ((0 === twig_compare((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 152, $this->source); })()), 0))) {
                            echo "class=\"active\"";
                        }
                        echo "></li>
                                                    ";
                        // line 153
                        $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 153, $this->source); })()) + 1);
                        // line 154
                        echo "                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 155
                    echo "                                            </ol>
                                            <div class=\"carousel-inner\">
                                                ";
                    // line 157
                    $context["i"] = 0;
                    // line 158
                    echo "                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["carousel"], "medias", [], "any", false, false, false, 158));
                    foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
                        // line 159
                        echo "                                                    <div class=\"carousel-item ";
                        if ((0 === twig_compare((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 159, $this->source); })()), 0))) {
                            echo "active";
                        }
                        echo "\">
                                                        ";
                        // line 160
                        if (((((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["media"], "type", [], "any", false, false, false, 160), "png")) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["media"], "type", [], "any", false, false, false, 160), "gif"))) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["media"], "type", [], "any", false, false, false, 160), "jpeg"))) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["media"], "type", [], "any", false, false, false, 160), "jpg")))) {
                            // line 161
                            echo "                                                            <img class=\"d-block w-100\"
                                                                 src=\"";
                            // line 162
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/carousel/index/" . twig_get_attribute($this->env, $this->source, $context["media"], "path", [], "any", false, false, false, 162))), "html", null, true);
                            echo "\"
                                                                 alt=\"";
                            // line 163
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "path", [], "any", false, false, false, 163), "html", null, true);
                            echo "\">
                                                        ";
                        } else {
                            // line 165
                            echo "                                                            <video controls class=\"d-block w-75 align-content-center\" style=\"margin: 0 auto;\">
                                                                <source src=\"";
                            // line 166
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/carousel/index/" . twig_get_attribute($this->env, $this->source, $context["media"], "path", [], "any", false, false, false, 166))), "html", null, true);
                            echo "\">
                                                            </video>
                                                        ";
                        }
                        // line 169
                        echo "                                                        <div class=\"carousel-caption d-none d-md-block text-center\">
                                                            <div class=\"rounded bg-blue-gray carousel-custom\">";
                        // line 170
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "description", [], "any", false, false, false, 170), "html", null, true);
                        echo "</div>
                                                            <div class=\"mt-2 mb-2\">
                                                                ";
                        // line 172
                        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DEVELOPERS")) {
                            // line 173
                            echo "                                                                    <a class=\"btn btn-primary\"
                                                                       href=\"";
                            // line 174
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("medias_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["media"], "id", [], "any", false, false, false, 174), "page" => "index"]), "html", null, true);
                            echo "\"><i class=\"fa fa-trash\"></i></a>
                                                                ";
                        }
                        // line 176
                        echo "                                                            </div>
                                                        </div><br>
                                                    </div>
                                                    <br>
                                                    ";
                        // line 180
                        $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 180, $this->source); })()) + 1);
                        // line 181
                        echo "                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 182
                    echo "                                            </div>
                                            <a class=\"carousel-control-prev\" href=\"#carousel-";
                    // line 183
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carousel"], "id", [], "any", false, false, false, 183), "html", null, true);
                    echo "\" role=\"button\"
                                               data-slide=\"prev\">
                                                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                                <span class=\"sr-only\">Previous</span>
                                            </a>
                                            <a class=\"carousel-control-next\" href=\"#carousel-";
                    // line 188
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carousel"], "id", [], "any", false, false, false, 188), "html", null, true);
                    echo "\" role=\"button\"
                                               data-slide=\"next\">
                                                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                                <span class=\"sr-only\">Next</span>
                                            </a>
                                        </div>
                                    ";
                } elseif ((0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 194
$context["carousel"], "medias", [], "any", false, false, false, 194)), 1))) {
                    // line 195
                    echo "                                        ";
                    $context["media"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["carousel"], "medias", [], "any", false, false, false, 195), "first", [], "any", false, false, false, 195);
                    // line 196
                    echo "                                        ";
                    if ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 196, $this->source); })()), "type", [], "any", false, false, false, 196), "png")) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 196, $this->source); })()), "type", [], "any", false, false, false, 196), "gif"))) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 196, $this->source); })()), "type", [], "any", false, false, false, 196), "jpeg")))) {
                        // line 197
                        echo "                                            <img class=\"img-fluid mx-auto d-block rounded\"
                                                 src=\"";
                        // line 198
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/carousel/index/" . twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 198, $this->source); })()), "path", [], "any", false, false, false, 198))), "html", null, true);
                        echo "\"
                                                 alt=\"";
                        // line 199
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 199, $this->source); })()), "path", [], "any", false, false, false, 199), "html", null, true);
                        echo "\">
                                        ";
                    } else {
                        // line 201
                        echo "                                            <video controls class=\"d-block w-75 align-content-center\" style=\"margin: 0 auto;\">
                                                <source src=\"";
                        // line 202
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/carousel/index/" . twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 202, $this->source); })()), "path", [], "any", false, false, false, 202))), "html", null, true);
                        echo "\">
                                            </video>
                                        ";
                    }
                    // line 205
                    echo "                                        <div class=\"rounded bg-blue-gray carousel-custom\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 205, $this->source); })()), "description", [], "any", false, false, false, 205), "html", null, true);
                    echo "</div>
                                        ";
                    // line 206
                    if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DEVELOPERS")) {
                        // line 207
                        echo "                                            <div class=\"text-center mt-2 mb-2\">
                                                <a class=\"btn btn-primary\"
                                                   href=\"";
                        // line 209
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("medias_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 209, $this->source); })()), "id", [], "any", false, false, false, 209), "page" => "index"]), "html", null, true);
                        echo "\"><i class=\"fa fa-trash\"></i></a>
                                            </div>
                                        ";
                    }
                    // line 212
                    echo "                                    ";
                }
                // line 213
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carousel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 214
            echo "                            ";
        }
        // line 215
        echo "                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class=\"home-content-right\">

        </div>
    </div>

    ";
        // line 225
        $this->loadTemplate("includes/home/modal.html.twig", "index/index.html.twig", 225)->display($context);
        
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
        return array (  497 => 225,  485 => 215,  482 => 214,  476 => 213,  473 => 212,  467 => 209,  463 => 207,  461 => 206,  456 => 205,  450 => 202,  447 => 201,  442 => 199,  438 => 198,  435 => 197,  432 => 196,  429 => 195,  427 => 194,  418 => 188,  410 => 183,  407 => 182,  401 => 181,  399 => 180,  393 => 176,  388 => 174,  385 => 173,  383 => 172,  378 => 170,  375 => 169,  369 => 166,  366 => 165,  361 => 163,  357 => 162,  354 => 161,  352 => 160,  345 => 159,  340 => 158,  338 => 157,  334 => 155,  328 => 154,  326 => 153,  320 => 152,  313 => 151,  308 => 150,  306 => 149,  300 => 147,  297 => 146,  288 => 140,  283 => 138,  278 => 136,  274 => 134,  272 => 133,  267 => 132,  262 => 131,  259 => 130,  252 => 126,  249 => 125,  247 => 124,  244 => 123,  242 => 122,  232 => 114,  220 => 108,  213 => 104,  203 => 96,  198 => 93,  188 => 86,  182 => 83,  170 => 74,  164 => 73,  160 => 72,  154 => 68,  150 => 67,  113 => 32,  109 => 30,  103 => 28,  101 => 27,  91 => 20,  77 => 9,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
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
                                            <a class=\"btn btn-outline-warning m-1\" href=\"{{ path(\"articles_edit\", {\"article\" : article.article}) }}\">
                                                <i class=\"fas fa-edit\"></i>
                                            </a>
                                            <button class=\"btn btn-outline-danger m-1\" onclick=\"\$('#modal-{{ article.id }}-delete').modal();\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"modal fade\" id=\"modal-{{ article.id }}-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
                                <div class=\"modal-dialog modal-dialog-centered\">
{#                                        <div class=\"modal-content bg-{{ userSettings.theme }} text-{{ userSettings.color }}\">#}
                                    <div>
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title\">Confirmation de suppression</h5>
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                <span aria-hidden=\"true\">&times;</span>
                                            </button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <p>Êtes-vous sur de vouloir supprimer l'article nommé : \"{{ article.subject }}\" ?</p>
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                                            <a type=\"button\" class=\"btn btn-danger\" href=\"{{ path(\"articles_delete\", { \"article\" : article.article }) }}\">Supprimer</a>
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
", "index/index.html.twig", "C:\\Users\\alexi\\Documents\\GitHub\\ptuts3s4\\templates\\index\\index.html.twig");
    }
}
