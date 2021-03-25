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

/* dashboard/index/index.html.twig */
class __TwigTemplate_93652637c39f562de0f84932e47152d540d56a175a37df088d8740f9e70fcf4f extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/index/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Dashboard";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<div id=\"wrapper\">
    ";
        // line 8
        $this->loadTemplate("includes/dashboard/sidebar.html.twig", "dashboard/index/index.html.twig", 8)->display($context);
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
        $this->loadTemplate("includes/dashboard/navbar.html.twig", "dashboard/index/index.html.twig", 11)->display($context);
        // line 12
        echo "            <div class=\"container-fluid\">
                <div class=\"d-sm-flex justify-content-between align-items-center mb-4\">
                    <h3 class=\"text-";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 14), "html", null, true);
        echo " mb-0\">Tableau de bord</h3>
";
        // line 19
        echo "                </div>
                <div class=\"row\">
                    <div class=\"col-md-6 col-xl-3 mb-4\">
                        <div class=\"card shadow border-left-primary py-2 bg-";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 22), "html", null, true);
        echo "\">
                            <div class=\"card-body\">
                                <div class=\"row align-items-center no-gutters\">
                                    <div class=\"col mr-2\">
                                        <div class=\"text-uppercase text-primary font-weight-bold text-xs mb-1\">
                                            <span>Utilisateurs</span>
                                        </div>
                                        <div class=\"text-";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 29), "html", null, true);
        echo " font-weight-bold h5 mb-0\">
                                            <span>";
        // line 30
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["count"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["users"] ?? null) : null), "html", null, true);
        echo "</span>
                                        </div>
                                    </div>
                                    <div class=\"col-auto\">
                                        <i class=\"fas fa-users fa-2x text-gray-300\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-xl-3 mb-4\">
                        <div class=\"card shadow border-left-success py-2 bg-";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 41), "html", null, true);
        echo "\">
                            <div class=\"card-body\">
                                <div class=\"row align-items-center no-gutters\">
                                    <div class=\"col mr-2\">
                                        <div class=\"text-uppercase text-success font-weight-bold text-xs mb-1\">
                                            <span>Articles</span>
                                        </div>
                                        <div class=\"text-";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 48), "html", null, true);
        echo " font-weight-bold h5 mb-0\">
                                            <span>0</span>
                                        </div>
                                    </div>
                                    <div class=\"col-auto\">
                                        <i class=\"fas fa-newspaper fa-2x text-gray-300\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-xl-3 mb-4\">
                        <div class=\"card shadow border-left-info py-2 bg-";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 60), "html", null, true);
        echo "\">
                            <div class=\"card-body\">
                                <div class=\"row align-items-center no-gutters\">
                                    <div class=\"col mr-2\">
                                        <div class=\"text-uppercase text-info font-weight-bold text-xs mb-1\">
                                            <span>Construction</span>
                                        </div>
                                        <div class=\"row no-gutters align-items-center\">
                                            <div class=\"col-auto\">
                                                <div class=\"text-";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 69), "html", null, true);
        echo " font-weight-bold h5 mb-0 mr-3\">
                                                    <span>20 %</span>
                                                </div>
                                            </div>
                                            <div class=\"col\">
                                                <div class=\"progress progress-sm\">
                                                    <div class=\"progress-bar bg-info\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%;\">
                                                        <span class=\"sr-only\">20 %</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-auto\">
                                        <i class=\"fas fa-tools fa-2x text-gray-300\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-xl-3 mb-4\">
                        <div class=\"card shadow border-left-warning py-2 bg-";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 90), "html", null, true);
        echo "\">
                            <div class=\"card-body\">
                                <div class=\"row align-items-center no-gutters\">
                                    <div class=\"col mr-2\">
                                        <div class=\"text-uppercase text-warning font-weight-bold text-xs mb-1\">
                                            <span>Messages non-lu</span>
                                        </div>
                                        <div class=\"text-";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 97), "html", null, true);
        echo " font-weight-bold h5 mb-0\">
                                            <span>0</span>
                                        </div>
                                    </div>
                                    <div class=\"col-auto\">
                                        <i class=\"fas fa-envelope-open-text fa-2x text-gray-300\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-7 col-xl-8\">
                        <div class=\"card shadow mb-4 bg-";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 111), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 111), "html", null, true);
        echo "\">
                            <div class=\"card-header d-flex justify-content-between align-items-center bg-";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 112), "html", null, true);
        echo "\">
                                <h6 class=\"text-";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 113), "html", null, true);
        echo " font-weight-bold m-0\">Courbe aléatoire</h6>
                                <div class=\"dropdown no-arrow\">
                                    <button class=\"btn btn-link btn-sm dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\" type=\"button\">
                                        <i class=\"fas fa-ellipsis-v text-gray-400\"></i>
                                    </button>
                                    <div class=\"dropdown-menu shadow dropdown-menu-right animated--fade-in bg-";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 118), "html", null, true);
        echo "\">
                                        <p class=\"text-center dropdown-header text-";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 119), "html", null, true);
        echo "\">dropdown header:</p>
                                        <a class=\"dropdown-item text-";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 120), "html", null, true);
        echo "\" href=\"#\">&nbsp;Action</a>
                                        <a class=\"dropdown-item text-";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 121), "html", null, true);
        echo "\" href=\"#\">&nbsp;Another action</a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item text-";
        // line 123
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 123), "html", null, true);
        echo "\" href=\"#\">&nbsp;Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"chart-area\">
                                    <canvas data-bs-chart=\"{&quot;type&quot;:&quot;line&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Jan&quot;,&quot;Feb&quot;,&quot;Mar&quot;,&quot;Apr&quot;,&quot;May&quot;,&quot;Jun&quot;,&quot;Jul&quot;,&quot;Aug&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Earnings&quot;,&quot;fill&quot;:true,&quot;data&quot;:[&quot;0&quot;,&quot;10000&quot;,&quot;5000&quot;,&quot;15000&quot;,&quot;10000&quot;,&quot;20000&quot;,&quot;15000&quot;,&quot;25000&quot;],&quot;backgroundColor&quot;:&quot;rgba(78, 115, 223, 0.05)&quot;,&quot;borderColor&quot;:&quot;rgba(78, 115, 223, 1)&quot;}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false},&quot;title&quot;:{},&quot;scales&quot;:{&quot;xAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;],&quot;drawOnChartArea&quot;:false},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;padding&quot;:20}}],&quot;yAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;]},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;padding&quot;:20}}]}}}\"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-5 col-xl-4\">
                        <div class=\"card shadow mb-4 bg-";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 135), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 135), "html", null, true);
        echo "\">
                            <div class=\"card-header d-flex justify-content-between align-items-center bg-";
        // line 136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 136), "html", null, true);
        echo "\">
                                <h6 class=\"text-";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 137), "html", null, true);
        echo " font-weight-bold m-0\">Graphique aléatoire</h6>
                                <div class=\"dropdown no-arrow\">
                                    <button class=\"btn btn-link btn-sm dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\" type=\"button\">
                                        <i class=\"fas fa-ellipsis-v text-gray-400\"></i>
                                    </button>
                                    <div class=\"dropdown-menu shadow dropdown-menu-right animated--fade-in bg-";
        // line 142
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 142), "html", null, true);
        echo "\">
                                        <p class=\"text-center dropdown-header text-";
        // line 143
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 143), "html", null, true);
        echo "\">dropdown header:</p>
                                        <a class=\"dropdown-item text-";
        // line 144
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 144), "html", null, true);
        echo "\" href=\"#\">&nbsp;Action</a>
                                        <a class=\"dropdown-item text-";
        // line 145
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 145), "html", null, true);
        echo "\" href=\"#\">&nbsp;Another action</a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item text-";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 147), "html", null, true);
        echo "\" href=\"#\">&nbsp;Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"chart-area\">
                                    <canvas data-bs-chart=\"{&quot;type&quot;:&quot;doughnut&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Direct&quot;,&quot;Social&quot;,&quot;Referral&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;&quot;,&quot;backgroundColor&quot;:[&quot;#4e73df&quot;,&quot;#1cc88a&quot;,&quot;#36b9cc&quot;],&quot;borderColor&quot;:[&quot;#ffffff&quot;,&quot;#ffffff&quot;,&quot;#ffffff&quot;],&quot;data&quot;:[&quot;50&quot;,&quot;30&quot;,&quot;15&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false},&quot;title&quot;:{}}}\"></canvas>
                                </div>
                                <div class=\"text-center small mt-4\">
                                    <span class=\"mr-2\">
                                        <i class=\"fas fa-circle text-primary\"></i>&nbsp;
                                        Direct
                                    </span>
                                    <span class=\"mr-2\">
                                        <i class=\"fas fa-circle text-success\"></i>&nbsp;
                                        Social
                                    </span>
                                    <span class=\"mr-2\">
                                        <i class=\"fas fa-circle text-info\"></i>&nbsp;
                                        Refferal
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 mb-4\">
                        <div class=\"card shadow mb-4 bg-";
        // line 175
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 175), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 175), "html", null, true);
        echo "\">
                            <div class=\"card-header py-3 bg-";
        // line 176
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 176), "html", null, true);
        echo "\">
                                <h6 class=\"text-";
        // line 177
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 177), "html", null, true);
        echo " font-weight-bold m-0\">Projects</h6>
                            </div>
                            <div class=\"card-body\">
                                <h4 class=\"small font-weight-bold text-";
        // line 180
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 180), "html", null, true);
        echo "\">
                                    Server migration
                                    <span class=\"float-right\">20%</span>
                                </h4>
                                <div class=\"progress mb-4\">
                                    <div class=\"progress-bar bg-danger\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%;\">
                                        <span class=\"sr-only\">20%</span>
                                    </div>
                                </div>
                                <h4 class=\"small font-weight-bold text-";
        // line 189
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 189), "html", null, true);
        echo "\">
                                    Sales tracking
                                    <span class=\"float-right\">40%</span>
                                </h4>
                                <div class=\"progress mb-4\">
                                    <div class=\"progress-bar bg-warning\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%;\">
                                        <span class=\"sr-only\">40%</span>
                                    </div>
                                </div>
                                <h4 class=\"small font-weight-bold text-";
        // line 198
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 198), "html", null, true);
        echo "\">
                                    Customer Database
                                    <span class=\"float-right\">60%</span>
                                </h4>
                                <div class=\"progress mb-4\">
                                    <div class=\"progress-bar bg-primary\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%;\">
                                        <span class=\"sr-only\">60%</span>
                                    </div>
                                </div>
                                <h4 class=\"small font-weight-bold text-";
        // line 207
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 207), "html", null, true);
        echo "\">
                                    Payout Details
                                    <span class=\"float-right\">80%</span>
                                </h4>
                                <div class=\"progress mb-4\">
                                    <div class=\"progress-bar bg-info\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%;\">
                                        <span class=\"sr-only\">80%</span>
                                    </div>
                                </div>
                                <h4 class=\"small font-weight-bold text-";
        // line 216
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 216), "html", null, true);
        echo "\">
                                    Account setup
                                    <span class=\"float-right\">Complete!</span>
                                </h4>
                                <div class=\"progress mb-4\">
                                    <div class=\"progress-bar bg-success\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%;\">
                                        <span class=\"sr-only\">100%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card shadow mb-4 bg-";
        // line 227
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 227), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 227), "html", null, true);
        echo "\">
                            <div class=\"card-header py-3 bg-";
        // line 228
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 228), "html", null, true);
        echo "\">
                                <h6 class=\"text-";
        // line 229
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 229), "html", null, true);
        echo " font-weight-bold m-0\">Todo List</h6>
                            </div>
                            <ul class=\"list-group list-group-flush bg-";
        // line 231
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 231), "html", null, true);
        echo "\">
                                <li class=\"list-group-item bg-";
        // line 232
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 232), "html", null, true);
        echo "\">
                                    <div class=\"row align-items-center no-gutters\">
                                        <div class=\"col mr-2\">
                                            <h6 class=\"mb-0 text-";
        // line 235
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 235), "html", null, true);
        echo "\">
                                                <strong>Lunch meeting</strong>
                                            </h6>
                                            <span class=\"text-xs\">10:30 AM</span>
                                        </div>
                                        <div class=\"col-auto\">
                                            <div class=\"custom-control custom-checkbox\">
                                                <input class=\"custom-control-input\" type=\"checkbox\" id=\"formCheck-1\">
                                                <label class=\"custom-control-label\" for=\"formCheck-1\"></label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"list-group-item bg-";
        // line 248
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 248), "html", null, true);
        echo "\">
                                    <div class=\"row align-items-center no-gutters\">
                                        <div class=\"col mr-2\">
                                            <h6 class=\"mb-0 text-";
        // line 251
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 251), "html", null, true);
        echo "\">
                                                <strong>Lunch meeting</strong>
                                            </h6>
                                            <span class=\"text-xs\">11:30 AM</span>
                                        </div>
                                        <div class=\"col-auto\">
                                            <div class=\"custom-control custom-checkbox\">
                                                <input class=\"custom-control-input\" type=\"checkbox\" id=\"formCheck-2\">
                                                <label class=\"custom-control-label\" for=\"formCheck-2\"></label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"list-group-item bg-";
        // line 264
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 264), "html", null, true);
        echo "\">
                                    <div class=\"row align-items-center no-gutters\">
                                        <div class=\"col mr-2\">
                                            <h6 class=\"mb-0 text-";
        // line 267
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 267), "html", null, true);
        echo "\">
                                                <strong>Lunch meeting</strong>
                                            </h6>
                                            <span class=\"text-xs\">12:30 AM</span>
                                        </div>
                                        <div class=\"col-auto\">
                                            <div class=\"custom-control custom-checkbox\">
                                                <input class=\"custom-control-input\" type=\"checkbox\" id=\"formCheck-3\">
                                                <label class=\"custom-control-label\" for=\"formCheck-3\"></label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col\">
                        <div class=\"row\">
                            <div class=\"col-lg-6 mb-4\">
                                <div class=\"card text-white bg-primary shadow border-primary\">
                                    <div class=\"card-body\">
                                        <p class=\"m-0\">Primary</p>
                                        <p class=\"text-white-50 small m-0\">#4e73df</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6 mb-4\">
                                <div class=\"card text-white bg-success shadow border-success\">
                                    <div class=\"card-body\">
                                        <p class=\"m-0\">Success</p>
                                        <p class=\"text-white-50 small m-0\">#1cc88a</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6 mb-4\">
                                <div class=\"card text-white bg-info shadow border-info\">
                                    <div class=\"card-body\">
                                        <p class=\"m-0\">Info</p>
                                        <p class=\"text-white-50 small m-0\">#36b9cc</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6 mb-4\">
                                <div class=\"card text-white bg-warning shadow border-warning\">
                                    <div class=\"card-body\">
                                        <p class=\"m-0\">Warning</p>
                                        <p class=\"text-white-50 small m-0\">#f6c23e</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6 mb-4\">
                                <div class=\"card text-white bg-danger shadow border-danger\">
                                    <div class=\"card-body\">
                                        <p class=\"m-0\">Danger</p>
                                        <p class=\"text-white-50 small m-0\">#e74a3b</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6 mb-4\">
                                <div class=\"card text-white bg-secondary shadow border-secondary\">
                                    <div class=\"card-body\">
                                        <p class=\"m-0\">Secondary</p>
                                        <p class=\"text-white-50 small m-0\">#858796</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class=\"sticky-footer\">
            <div class=\"container my-auto\">
                <div class=\"text-center my-auto copyright text-";
        // line 340
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 340), "html", null, true);
        echo "\">
                    <span>Copyright © CEFC Developers Team ";
        // line 341
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_converter($this->env, "Y"), "Y"), "html", null, true);
        echo "</span>
                </div>
            </div>
        </footer>
        ";
    }

    public function getTemplateName()
    {
        return "dashboard/index/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  548 => 341,  544 => 340,  468 => 267,  462 => 264,  446 => 251,  440 => 248,  424 => 235,  418 => 232,  414 => 231,  409 => 229,  405 => 228,  399 => 227,  385 => 216,  373 => 207,  361 => 198,  349 => 189,  337 => 180,  331 => 177,  327 => 176,  321 => 175,  290 => 147,  285 => 145,  281 => 144,  277 => 143,  273 => 142,  265 => 137,  261 => 136,  255 => 135,  240 => 123,  235 => 121,  231 => 120,  227 => 119,  223 => 118,  215 => 113,  211 => 112,  205 => 111,  188 => 97,  178 => 90,  154 => 69,  142 => 60,  127 => 48,  117 => 41,  103 => 30,  99 => 29,  89 => 22,  84 => 19,  80 => 14,  76 => 12,  74 => 11,  63 => 9,  61 => 8,  58 => 7,  54 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard/index/index.html.twig", "/Users/romainmunier/Documents/Projets/Symfony/ptuts3s4/templates/dashboard/index/index.html.twig");
    }
}
