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

/* __string_template__b6f2656e5ca97b01bf428bb5f352b510 */
class __TwigTemplate_939dfdbeb693b42b9d78790354e555c3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- Survey's texts -->
<div class=\"card card-primary h-100\">
    <!-- Default panel contents -->
    <div class=\"card-header\">
        <h5 class=\"card-title\">";
        // line 5
        echo gT("Text elements");
        echo "</h5>
        <a class=\"float-end btn btn-outline-secondary btn-xs pjax\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo gT("Survey text elements");
        echo "\" href=\"";
        echo LS_Twig_Extension::createUrl("surveyAdministration/rendersidemenulink", ["subaction" => "surveytexts", "surveyid" => ($context["surveyid"] ?? null)]);
        echo "\">
          <i class=\"ri-tools-line\"></i>
        </a>
    </div>
    <!-- List group -->
    <ul class=\"list-group list-group-flush\">
            <!-- Description -->
        <li class=\"list-group-item p-0 border-0\">
            <div class=\"ls-flex-row col-12\">
                <div class=\"col-4 card-label\">
                    ";
        // line 16
        echo gT("Description:");
        echo "
                </div>
                <div class=\"col-8 ls-card-grid__description\">
                        ";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, ($context["surveyTextContent"] ?? null), "surveyls_description", [], "any", false, false, true, 19) != "")) {
            // line 20
            echo "                            ";
            echo LS_Twig_Extension::getTextDisplayWidget($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["surveyTextContent"] ?? null), "surveyls_description", [], "any", false, false, true, 20), 20, $this->source), "description_text");
            echo "
                        ";
        }
        // line 22
        echo "                </div>
            </div>
        </li>
        <!-- Welcome -->
        <li class=\"list-group-item p-0 border-0\">
            <div class=\"ls-flex-row col-12\">
                <div class=\"col-4 card-label\">
                    ";
        // line 29
        echo gT("Welcome:");
        echo "
                </div>
                <div class=\"col-8 ls-card-grid__description\">
                        ";
        // line 32
        if ((twig_get_attribute($this->env, $this->source, ($context["surveyTextContent"] ?? null), "surveyls_welcometext", [], "any", false, false, true, 32) != "")) {
            // line 33
            echo "                            ";
            echo LS_Twig_Extension::getTextDisplayWidget($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["surveyTextContent"] ?? null), "surveyls_welcometext", [], "any", false, false, true, 33), 33, $this->source), "welcome_text");
            echo "
                        ";
        }
        // line 35
        echo "                </div>
            </div>
        </li>

        <!-- End message -->
        <li class=\"list-group-item p-0 border-0\">
            <div class=\"ls-flex-row col-12\">
                <div class=\"col-4 card-label\">
                    ";
        // line 43
        echo gT("End message:");
        echo "
                </div>
                <div class=\"col-8 ls-card-grid__description\">
                    ";
        // line 46
        if ((twig_get_attribute($this->env, $this->source, ($context["surveyTextContent"] ?? null), "surveyls_endtext", [], "any", false, false, true, 46) != "")) {
            // line 47
            echo "                        ";
            echo LS_Twig_Extension::getTextDisplayWidget($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["surveyTextContent"] ?? null), "surveyls_endtext", [], "any", false, false, true, 47), 47, $this->source), "end_text");
            echo "
                    ";
        }
        // line 49
        echo "                </div>
            </div>
        </li>
        ";
        // line 52
        if ((twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "showsurveypolicynotice", [], "any", false, false, true, 52) > 0)) {
            // line 53
            echo "                    <!-- Data security notice -->
                    <li class=\"list-group-item p-0 border-0\">
                        <div class=\"ls-flex-row col-12\">
                            <div class=\"col-4 card-label\">
                                 ";
            // line 57
            echo gT("Privacy policy text:");
            echo "
                            </div>
                            <div class=\"col-8 ls-card-grid__description\">
                                ";
            // line 60
            if ((twig_get_attribute($this->env, $this->source, ($context["surveyTextContent"] ?? null), "surveyls_policy_notice", [], "any", false, false, true, 60) != "")) {
                // line 61
                echo "                                    ";
                echo LS_Twig_Extension::getTextDisplayWidget($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["surveyTextContent"] ?? null), "surveyls_policy_notice", [], "any", false, false, true, 61), 61, $this->source), "security_notice");
                echo "
                                ";
            }
            // line 63
            echo "                            </div>
                        </div>
                    </li>
                    <!-- Data security notice error -->
                    <li class=\"list-group-item p-0 border-0\">
                        <div class=\"ls-flex-row col-12\">
                            <div class=\"col-4 card-label\">
                                ";
            // line 70
            echo gT("Privacy policy error text:");
            echo "
                            </div>
                            <div class=\"col-8 ls-card-grid__description\">
                                ";
            // line 73
            if ((twig_get_attribute($this->env, $this->source, ($context["surveyTextContent"] ?? null), "surveyls_policy_error", [], "any", false, false, true, 73) != "")) {
                // line 74
                echo "                                    ";
                echo LS_Twig_Extension::getTextDisplayWidget($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["surveyTextContent"] ?? null), "surveyls_policy_error", [], "any", false, false, true, 74), 74, $this->source), "security_error");
                echo "
                                ";
            }
            // line 76
            echo "                            </div>
                        </div>
                    </li>
                    <!-- Data security notice label -->
                    <li class=\"list-group-item p-0 border-0\">
                        <div class=\"ls-flex-row col-12\">
                            <div class=\"col-4 card-label\">
                                ";
            // line 83
            echo gT("Privacy policy label text:");
            echo "
                            </div>
                            <div class=\"col-8 ls-card-grid__description\">
                                ";
            // line 86
            if ((twig_get_attribute($this->env, $this->source, ($context["surveyTextContent"] ?? null), "surveyls_policy_notice_label", [], "any", false, false, true, 86) != "")) {
                // line 87
                echo "                                    ";
                echo LS_Twig_Extension::getExpressionManagerOutput($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["surveyTextContent"] ?? null), "surveyls_policy_notice_label", [], "any", false, false, true, 87), 87, $this->source));
                echo "
                                ";
            }
            // line 89
            echo "                            </div>
                        </div>
                    </li>
            ";
        }
        // line 93
        echo "    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__b6f2656e5ca97b01bf428bb5f352b510";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 93,  198 => 89,  192 => 87,  190 => 86,  184 => 83,  175 => 76,  169 => 74,  167 => 73,  161 => 70,  152 => 63,  146 => 61,  144 => 60,  138 => 57,  132 => 53,  130 => 52,  125 => 49,  119 => 47,  117 => 46,  111 => 43,  101 => 35,  95 => 33,  93 => 32,  87 => 29,  78 => 22,  72 => 20,  70 => 19,  64 => 16,  49 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__b6f2656e5ca97b01bf428bb5f352b510", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19);
        static $filters = array();
        static $functions = array("gT" => 5, "createUrl" => 6, "getTextDisplayWidget" => 20, "getExpressionManagerOutput" => 87);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['gT', 'createUrl', 'getTextDisplayWidget', 'getExpressionManagerOutput']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
