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

/* __string_template__7e6a2b19402ffa45ca1d8e3f0bd4c1f0 */
class __TwigTemplate_94bdf4ba57949b33872bfad86c49b8f4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 27
        $context["aError"] = twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aError", [], "any", false, false, true, 27);
        // line 28
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 30
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "languagecode", [], "any", false, false, true, 30), 30, $this->source);
        echo "\" dir=\"";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "dir", [], "any", false, false, true, 30), 30, $this->source);
        echo "\"
      class=\"";
        // line 31
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "languagecode", [], "any", false, false, true, 31), 31, $this->source);
        echo " dir-";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "dir", [], "any", false, false, true, 31), 31, $this->source);
        echo " ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 31), "html", [], "any", false, false, true, 31), 31, $this->source);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 31), "html", [], "any", false, false, true, 31), 31, $this->source);
        echo "
      xmlns=\"http://www.w3.org/1999/html\">

<head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>

    <title>
        ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, ($context["aError"] ?? null), "error", [], "any", false, false, true, 40)) {
            // line 41
            echo "            ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aError"] ?? null), "error", [], "any", false, false, true, 41), 41, $this->source);
            echo "
        ";
        } else {
            // line 43
            echo "            Error ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "surveyls_title", [], "any", false, false, true, 43), 43, $this->source);
            echo "
        ";
        }
        // line 45
        echo "    </title>

    <meta name=\"generator\" content=\"LimeSurvey http://www.limesurvey.org\"/>
    ";
        // line 48
        if (LS_Twig_Extension::imageSrc("./files/favicon.ico")) {
            // line 49
            echo "        <link rel=\"shortcut icon\" href=\"";
            echo LS_Twig_Extension::imageSrc("./files/favicon.ico");
            echo "\"/>
    ";
        }
        // line 51
        echo "</head>

<body class=\"error-page ";
        // line 53
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 53), "body", [], "any", false, false, true, 53), 53, $this->source);
        echo " lang-";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "languagecode", [], "any", false, false, true, 53), 53, $this->source);
        echo " ";
        echo $this->sandbox->ensureToStringAllowed(($context["surveyformat"] ?? null), 53, $this->source);
        echo "\" marginwidth=\"0\"
      marginheight=\"0\" ";
        // line 54
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 54), "body", [], "any", false, false, true, 54), 54, $this->source);
        echo ">
    <div class=\"container m-auto \">
        <div class=\"row align-items-center\">
            <div class=\"col\">
                <h2 class=\"error-title\">
                    ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, ($context["aError"] ?? null), "error", [], "any", false, false, true, 59)) {
            // line 60
            echo "                        ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aError"] ?? null), "error", [], "any", false, false, true, 60), 60, $this->source);
            echo "
                    ";
        }
        // line 62
        echo "                    ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aError"] ?? null), "title", [], "any", false, false, true, 62), 62, $this->source);
        echo "
                </h2>
                <div class=\"error-content\">";
        // line 64
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aError"] ?? null), "message", [], "any", false, false, true, 64), 64, $this->source);
        echo "</div>
                ";
        // line 65
        if (twig_get_attribute($this->env, $this->source, ($context["aError"] ?? null), "contact", [], "any", false, false, true, 65)) {
            // line 66
            echo "                    ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aError"] ?? null), "contact", [], "any", false, false, true, 66), 66, $this->source);
            echo "
                ";
        } else {
            // line 68
            echo "                    ";
            echo twig_sprintf(gT("For further information please contact %s:"), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "admin", [], "any", false, false, true, 68), 68, $this->source));
            echo "
                    ";
            // line 69
            if (twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "adminemail", [], "any", false, false, true, 69)) {
                // line 70
                echo "                        <br>
                        <a class=\"error-link\" href='mailto:";
                // line 71
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "adminemail", [], "any", false, false, true, 71), 71, $this->source);
                echo "'>";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "adminemail", [], "any", false, false, true, 71), 71, $this->source);
                echo "</a>
                    ";
            }
            // line 73
            echo "                ";
        }
        // line 74
        echo "                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["aError"] ?? null), "trace", [], "any", false, false, true, 74))) {
            // line 75
            echo "                    <pre>
                            ";
            // line 76
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aError"] ?? null), "trace", [], "any", false, false, true, 76), 76, $this->source);
            echo "
                    </pre>
                ";
        }
        // line 79
        echo "            </div>
            <div class=\"col d-flex\">
              ";
        // line 81
        if (LS_Twig_Extension::imageSrc("./files/error.png")) {
            // line 82
            echo "                ";
            echo LS_Twig_Extension::image("./files/error.png", "Survey Error", ["class" => "m-auto"]);
            echo "
              ";
        }
        // line 84
        echo "            </div>      
        </div>
    </div>
";
        // line 87
        $this->displayBlock('footer', $context, $blocks);
        // line 90
        echo "</body>
</html>
";
    }

    // line 87
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "    ";
        echo twig_include($this->env, $context, "./subviews/footer/footer.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__7e6a2b19402ffa45ca1d8e3f0bd4c1f0";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 88,  203 => 87,  197 => 90,  195 => 87,  190 => 84,  184 => 82,  182 => 81,  178 => 79,  172 => 76,  169 => 75,  166 => 74,  163 => 73,  156 => 71,  153 => 70,  151 => 69,  146 => 68,  140 => 66,  138 => 65,  134 => 64,  128 => 62,  122 => 60,  120 => 59,  112 => 54,  104 => 53,  100 => 51,  94 => 49,  92 => 48,  87 => 45,  81 => 43,  75 => 41,  73 => 40,  55 => 31,  49 => 30,  45 => 28,  43 => 27,  40 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__7e6a2b19402ffa45ca1d8e3f0bd4c1f0", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 27, "if" => 40, "block" => 87);
        static $filters = array("format" => 68);
        static $functions = array("imageSrc" => 48, "gT" => 68, "image" => 82, "include" => 88);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['format'],
                ['imageSrc', 'gT', 'image', 'include']
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
