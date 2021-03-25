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

/* dashboard/mailinglist/index.html.twig */
class __TwigTemplate_e8417079164c34dd9847a4f7bdfcf9c50a86ef147e7fe860c52886fdc52dd410 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/mailinglist/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Diffusion";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<div id=\"wrapper\">
    ";
        // line 8
        $this->loadTemplate("includes/dashboard/sidebar.html.twig", "dashboard/mailinglist/index.html.twig", 8)->display($context);
        // line 9
        echo "    <div class=\"d-flex flex-column ";
        if ( !(($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "medieval", [], "any", false, false, false, 9)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null)) {
            echo "bg-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 9), "html", null, true);
        } else {
            echo "bg-none";
        }
        echo "\" id=\"content-wrapper\">
        <div id=\"content\">
            ";
        // line 11
        $this->loadTemplate("includes/dashboard/navbar.html.twig", "dashboard/mailinglist/index.html.twig", 11)->display($context);
        // line 12
        echo "            <div class=\"container-fluid\">
                <div class=\"d-sm-flex justify-content-between align-items-center mb-4\">
                    <h3 class=\"text-";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 14), "html", null, true);
        echo " mb-0\">Listes de diffusion</h3>
                    <a class=\"btn btn-primary btn-sm d-none d-sm-inline-block\" role=\"button\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mailing_add");
        echo "\">
                        <i class=\"fas fa-plus fa-sm text-white-50\"></i>&nbsp;
                        Créer une liste
                    </a>
                </div>
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "info-mailing"], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 21
            echo "                    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                        <strong>Information :</strong> ";
            // line 22
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "error"], "method", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 29
            echo "                    <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                        <h4 class=\"alert-heading\">Une erreur est survenue</h4>
                        <p>";
            // line 31
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
                        <hr>
                        <p class=\"mb-0\">Vérifiez les informations fournies puis réessayez.</p>
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                <ul class=\"nav nav-pills mb-3\" id=\"pills-tab\" role=\"tablist\">
                    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mailingList"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["type"]) {
            // line 41
            echo "                        <li class=\"nav-item\" role=\"presentation\">
                            <a class=\"nav-link ";
            // line 42
            if ((0 === twig_compare($context["key"], "HYBRID"))) {
                echo "active";
            }
            echo "\" id=\"pills-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "-tab\" data-toggle=\"pill\" href=\"#pills-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" role=\"tab\" aria-controls=\"pills-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" aria-selected=\"true\">";
            echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["type"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "html", null, true);
            echo "</a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                </ul>
                <div class=\"tab-content\" id=\"pills-tabContent\">
                    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mailingList"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["type"]) {
            // line 48
            echo "                        <div class=\"tab-pane fade show ";
            if ((0 === twig_compare($context["key"], "HYBRID"))) {
                echo "active";
            }
            echo "\" id=\"pills-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" role=\"tabpanel\" aria-labelledby=\"pills-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "-tab\">
                            <div class=\"row\">
                                ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["type"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[1] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 51
                echo "                                    <div class=\"col-lg-4 text-center\">
                                        <div class=\"card border-";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "Color", [], "any", false, false, false, 52), "html", null, true);
                echo " mb-3 bg-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 52), "html", null, true);
                echo "\" style=\"width: 100%;\">
                                            <div class=\"card-header text-bold bg-";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 53), "html", null, true);
                echo " text-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 53), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "Name", [], "any", false, false, false, 53), "html", null, true);
                echo "</div>
                                            <div class=\"card-body text-";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "Color", [], "any", false, false, false, 54), "html", null, true);
                echo " text-left bg-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 54), "html", null, true);
                echo "\">
                                                <h5 class=\"card-title\">Nombre d'utilisateur : ";
                // line 55
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "List", [], "any", false, false, false, 55)), "html", null, true);
                echo "</h5>
                                                <p class=\"card-text text-";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 56), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "Sumup", [], "any", false, false, false, 56), "html", null, true);
                echo "</p>
                                                <hr>
                                                <div class=\"row\">
                                                    <a class=\"btn btn-primary btn-sm ml-2 mr-2\" href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mailing_show", ["id" => twig_get_attribute($this->env, $this->source, $context["t"], "id", [], "any", false, false, false, 59)]), "html", null, true);
                echo "\">
                                                        <i class=\"fas fa-eye text-white\"></i>
                                                    </a>
                                                    <a class=\"btn btn-warning btn-sm mr-2\" href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mailing_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["t"], "id", [], "any", false, false, false, 62)]), "html", null, true);
                echo "\">
                                                        <i class=\"fas fa-edit text-white\"></i>
                                                    </a>
                                                    <button class=\"btn btn-danger btn-sm mr-2\" type=\"button\" onclick=\"\$('#modal-";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "id", [], "any", false, false, false, 65), "html", null, true);
                echo "-delete').modal();\">
                                                        <i class=\"fas fa-eraser text-white\"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"modal fade\" id=\"modal-";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "id", [], "any", false, false, false, 73), "html", null, true);
                echo "-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog modal-dialog-centered\">
                                            <div class=\"modal-content bg-";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 75), "html", null, true);
                echo " text-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 75), "html", null, true);
                echo "\">
                                                <div class=\"modal-header\">
                                                    <h5 class=\"modal-title\">Confirmation de suppression</h5>
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                        <span aria-hidden=\"true\">&times;</span>
                                                    </button>
                                                </div>
                                                <div class=\"modal-body\">
                                                    <p>Êtes-vous sur de vouloir supprimé la liste nommée : \"";
                // line 83
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "Name", [], "any", false, false, false, 83)), "html", null, true);
                echo "\" ?</p>
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                                                    <a type=\"button\" class=\"btn btn-danger\" href=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mailing_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["t"], "id", [], "any", false, false, false, 87)]), "html", null, true);
                echo "\">Supprimer</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                </div>
            </div>
        </div>
        <script>
            // Example 2 - Shared lists
            new Sortable(unassignedUser, {
                group: 'shared', // set both lists to same group
                animation: 150
            });

            new Sortable(assignedUser, {
                group: 'shared',
                animation: 150
            });
        </script>
        <footer class=\"sticky-footer\">
            <div class=\"container my-auto\">
                <div class=\"text-center my-auto copyright text-";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 113), "html", null, true);
        echo "\">
                    <span>Copyright © CEFC Developers Team ";
        // line 114
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_converter($this->env, "Y"), "Y"), "html", null, true);
        echo "</span>
                </div>
            </div>
        </footer>
        ";
    }

    public function getTemplateName()
    {
        return "dashboard/mailinglist/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 114,  309 => 113,  290 => 96,  282 => 93,  270 => 87,  263 => 83,  250 => 75,  245 => 73,  234 => 65,  228 => 62,  222 => 59,  214 => 56,  210 => 55,  204 => 54,  196 => 53,  190 => 52,  187 => 51,  183 => 50,  171 => 48,  167 => 47,  163 => 45,  144 => 42,  141 => 41,  137 => 40,  134 => 39,  120 => 31,  116 => 29,  111 => 28,  99 => 22,  96 => 21,  92 => 20,  84 => 15,  80 => 14,  76 => 12,  74 => 11,  63 => 9,  61 => 8,  58 => 7,  54 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard/mailinglist/index.html.twig", "/Users/romainmunier/Documents/Projets/Symfony/ptuts3s4/templates/dashboard/mailinglist/index.html.twig");
    }
}
