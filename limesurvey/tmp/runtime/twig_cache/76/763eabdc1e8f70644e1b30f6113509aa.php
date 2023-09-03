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

/* __string_template__5313c8a98df43c93420d1ebaf4632bfd */
class __TwigTemplate_28b2b6fa31de6874489e6667d8170399 extends Template
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
        echo "<div class=\"card card-primary h-100\">
    <!-- Default panel contents -->
    <div class=\"card-header\">
        <h5 class=\"card-title\">";
        // line 4
        echo gT("Share survey");
        echo "</h5>
    </div>
    <!-- List group -->
    <ul class=\"list-group list-group-flush\">
        <!-- Base language -->
        <li class=\"list-group-item p-0 border-0\" id=\"adminsidepanel__surveysummary--mainLanguageLink\">
            <div class=\"ls-flex-row col-12\">
                <div class=\"col-4 card-label\">
                    ";
        // line 12
        echo getLanguageNameFromCode($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "language", [], "any", false, false, true, 12), 12, $this->source), false);
        echo " (";
        echo gT("Base language");
        echo "):
                </div>
                <div class=\"col-8 ls-card-grid__description\">
                    ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 15)) {
            echo " ";
            // line 16
            echo "                        ";
            $context["tmp_url"] = (($__internal_compile_0 = ($context["surveyUrls"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "language", [], "any", false, false, true, 16)] ?? null) : null);
            // line 17
            echo "                    ";
        }
        // line 18
        echo "                    <a href='";
        echo $this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 18, $this->source);
        echo "' target='_blank'> ";
        echo $this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 18, $this->source);
        echo " </a>
                </div>
            </div>
        </li>
        <!-- Additional languages  -->
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["aAdditionalLanguages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["langname"]) {
            // line 24
            echo "        <li class=\"list-group-item p-0 border-0\">
            <div class=\"ls-flex-row col-12\">
               <div class=\"col-4 card-label\">
                    ";
            // line 27
            echo (getLanguageNameFromCode($this->sandbox->ensureToStringAllowed($context["langname"], 27, $this->source), false) . ":");
            echo "
                </div>
                <div class=\"col-8 ls-card-grid__description\">
                    ";
            // line 30
            if (twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 30)) {
                echo " ";
                // line 31
                echo "                        ";
                $context["tmp_url"] = (($__internal_compile_1 = ($context["surveyUrls"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["langname"]] ?? null) : null);
                // line 32
                echo "                    ";
            }
            // line 33
            echo "                    <a href='";
            echo $this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 33, $this->source);
            echo "' target='_blank'> ";
            echo $this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 33, $this->source);
            echo " </a>
                </div>
            </div>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langname'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
        <!-- End URL -->
        <li class=\"list-group-item p-0 border-0\">
            <div class=\"ls-flex-row col-12\">
               <div class=\"col-4 card-label\">
                    ";
        // line 43
        echo gT("End URL:");
        echo "
                </div>
                <div class=\"col-8 ls-card-grid__description\">
                        ";
        // line 46
        echo $this->sandbox->ensureToStringAllowed(($context["endurl"] ?? null), 46, $this->source);
        echo "
                </div>
            </div>
        </li>
        <!-- Number of questions/groups -->
        <li class=\"list-group-item p-0 border-0\">
            <div class=\"ls-flex-row col-12\">
               <div class=\"col-4 card-label\">
                    ";
        // line 54
        echo gT("Number of questions/groups:");
        echo "
                </div>
                <div class=\"col-8 ls-card-grid__description\">
                    ";
        // line 57
        echo (($this->sandbox->ensureToStringAllowed(($context["sumcount3"] ?? null), 57, $this->source) . "/") . $this->sandbox->ensureToStringAllowed(($context["sumcount2"] ?? null), 57, $this->source));
        echo "
                </div>
            </div>
        </li>
        <!-- Sharing panel -->
        <li class=\"list-group-item p-0 border-0\">
            <div class=\"ls-flex-row col-12\">
                <div class=\"col-4 card-label\">
                    ";
        // line 65
        echo gT("Sharing panel:");
        echo "
                </div>
                <div class=\"col-8 ls-card-grid__description\">
                    <a href=\"#sharingdialog\" class=\"btn btn-outline-secondary selector_openSharePanel ";
        // line 68
        echo (((twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "active", [], "any", false, false, true, 68) == "Y")) ? ("") : ("disabled"));
        echo "\" data-bs-toggle=\"modal\"
                       id=\"sharePanelButton_";
        // line 69
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 69), 69, $this->source);
        echo "\" data-surveyid=\"";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 69), 69, $this->source);
        echo "\">
                        ";
        // line 70
        echo gT("Open sharing panel");
        echo "
                    </a>
                </div>
            </div>
        </li>
    </ul>
</div>

";
        // line 78
        if ((twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "active", [], "any", false, false, true, 78) == "Y")) {
            // line 79
            echo "    <div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"sharingdialog\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">";
            // line 83
            echo gT("Share survey");
            echo "</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"card card-primary h-100 mb-3 p-4\">
                        <div class=\"card-header\">
                            <h5 class=\"card-title\">";
            // line 89
            echo gT("Share QR-code:");
            echo "</h5>
                        </div>
                        <div class=\"card-body border rounded\">
                            <ul class=\"list-group list-group-flush\">
                                ";
            // line 93
            if (twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 93)) {
                echo " ";
                // line 94
                echo "                                    ";
                $context["tmp_url"] = LS_Twig_Extension::createAbsoluteUrl("survey/index", ["sid" => twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 94), "lang" => twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "language", [], "any", false, false, true, 94)]);
                // line 95
                echo "                                ";
            }
            // line 96
            echo "                                 <li class=\"list-group-item p-0 border-0 mb-2\">
                                    <div class=\"ls-flex-row col-12 align-items-center\">
                                        <div class=\"col-4\">
                                            ";
            // line 99
            echo getLanguageNameFromCode($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "language", [], "any", false, false, true, 99), 99, $this->source), false);
            echo "
                                        </div>
                                        <div class=\"col-8 d-flex justify-content-center\">
                                            <div class=\"selector__qrcode_container\">
                                                <button class=\"btn btn-outline-secondary selector__qrcode_trigger\">";
            // line 103
            echo gT("Generate QR-Code");
            echo "</button>
                                                <div class=\"selector__qrcode\" data-url=\"";
            // line 104
            echo $this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 104, $this->source);
            echo "\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                ";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["aAdditionalLanguages"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["langname"]) {
                // line 110
                echo "                                    ";
                if (twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 110)) {
                    echo " ";
                    // line 111
                    echo "                                        ";
                    $context["tmp_url"] = LS_Twig_Extension::createAbsoluteUrl("survey/index", ["sid" => twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 111), "lang" => $context["langname"]]);
                    // line 112
                    echo "                                    ";
                }
                // line 113
                echo "                                    <li class=\"list-group-item p-0 border-0";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 113)) {
                    echo " mb-2";
                }
                echo "\">
                                        <div class=\"ls-flex-row col-12 align-items-center\">
                                            <div class=\"col-4\">
                                                ";
                // line 116
                echo getLanguageNameFromCode($this->sandbox->ensureToStringAllowed($context["langname"], 116, $this->source), false);
                echo "
                                            </div>
                                            <div class=\"col-8 d-flex justify-content-center\">
                                                <div class=\"selector__qrcode_container\">
                                                    <button class=\"btn btn-outline-secondary selector__qrcode_trigger\">";
                // line 120
                echo gT("Generate QR-Code");
                echo "</button>
                                                    <div class=\"selector__qrcode\" data-url=\"";
                // line 121
                echo $this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 121, $this->source);
                echo "\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langname'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "                            </ul>
                        </div>
                    </div>
                    <div class=\"card card-primary h-100 mb-3 p-4\">
                        <div class=\"card-header\">
                            <h5 class=\"card-title\">
                                ";
            // line 133
            echo gT("Share on Facebook:");
            echo "
                            </h5>
                            <button class=\"btn btn-xs btn-warning float-end facebook-button\" 
                                  id=\"selector_activateFacebookSharing\">";
            // line 136
            echo gT("Enable");
            echo "</button>
                        </div>
                        <div class=\"card-body border rounded\">
                            <ul class=\"list-group list-group-flush\">
                                ";
            // line 140
            if (twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 140)) {
                echo " ";
                // line 141
                echo "                                    ";
                $context["tmp_url"] = LS_Twig_Extension::createAbsoluteUrl("survey/index", ["sid" => twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 141), "lang" => twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "language", [], "any", false, false, true, 141)]);
                // line 142
                echo "                                ";
            }
            // line 143
            echo "                                    <li class=\"list-group-item p-0 border-0 mb-2\">
                                    <div class=\"ls-flex-row col-12 align-items-center\">
                                        <div class=\"col-4\">
                                            ";
            // line 146
            echo getLanguageNameFromCode($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "language", [], "any", false, false, true, 146), 146, $this->source), false);
            echo "
                                        </div>
                                        <div class=\"col-8 d-flex justify-content-center\">
                                            <button class=\"btn btn-disabled facebook-button selector_fb_share_disabled\" disabled ><i class=\"ri-facebook-box-fill\"></i> ";
            // line 149
            echo gT("Disabled");
            echo "</button>
                                            <iframe class=\"selector_fb_share d-none\" data-src=\"https://www.facebook.com/plugins/share_button.php?href=";
            // line 150
            echo twig_urlencode_filter($this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 150, $this->source));
            echo "&layout=button_count&size=large&mobile_iframe=true&appId=328433594315978&width=106&height=28\" width=\"106\" height=\"28\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\"></iframe>
                                        </div>
                                    </div>
                                </li>
                                ";
            // line 154
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["aAdditionalLanguages"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["langname"]) {
                // line 155
                echo "                                    ";
                if (twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 155)) {
                    echo " ";
                    // line 156
                    echo "                                        ";
                    $context["tmp_url"] = LS_Twig_Extension::createAbsoluteUrl("survey/index", ["sid" => twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 156), "lang" => $context["langname"]]);
                    // line 157
                    echo "                                    ";
                }
                // line 158
                echo "                                    <li class=\"list-group-item p-0 border-0";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 158)) {
                    echo " mb-2";
                }
                echo "\">
                                        <div class=\"ls-flex-row col-12 align-items-center\">
                                            <div class=\"col-4\">
                                                ";
                // line 161
                echo getLanguageNameFromCode($this->sandbox->ensureToStringAllowed($context["langname"], 161, $this->source), false);
                echo "
                                            </div>
                                            <div class=\"col-8 d-flex justify-content-center\">
                                                <button class=\"btn btn-disabled facebook-button selector_fb_share_disabled\" disabled ><i class=\"ri-facebook-box-fill\"></i> ";
                // line 164
                echo gT("Disabled");
                echo "</button>
                                                <iframe class=\"selector_fb_share d-none h-12\" data-src=\"https://www.facebook.com/plugins/share_button.php?href=";
                // line 165
                echo twig_urlencode_filter($this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 165, $this->source));
                echo "&layout=button_count&size=large&mobile_iframe=true&appId=1321262851319939&width=106&height=28\" width=\"106\" height=\"28\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\"></iframe>
                                            </div>
                                        </div>
                                    </li>
                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langname'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 170
            echo "                            </ul>
                        </div>
                    </div>
                    <div class=\"card card-primary h-100 mb-3 p-4\">
                        <div class=\"card-header\">
                            <h5 class=\"card-title\">
                                ";
            // line 176
            echo gT("Share on Twitter:");
            echo "
                            </h5>
                        </div>
                        <div class=\"card-body border rounded\">
                            <ul class=\"list-group list-group-flush\">
                                ";
            // line 181
            if (twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 181)) {
                echo " ";
                // line 182
                echo "                                    ";
                $context["tmp_url"] = LS_Twig_Extension::createAbsoluteUrl("survey/index", ["sid" => twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 182), "lang" => twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "language", [], "any", false, false, true, 182)]);
                // line 183
                echo "                                ";
            }
            // line 184
            echo "                                <li class=\"list-group-item p-0 border-0 mb-2\">
                                    <div class=\"ls-flex-row col-12 align-items-center\">
                                        <div class=\"col-4\">
                                            ";
            // line 187
            echo getLanguageNameFromCode($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "language", [], "any", false, false, true, 187), 187, $this->source), false);
            echo "
                                        </div>
                                        <div class=\"col-8 d-flex justify-content-center\">
                                            <a class=\"btn btn-outline-secondary twitter-button\" target='_blank' href=\"https://twitter.com/intent/tweet?text=";
            // line 190
            echo twig_urlencode_filter(gT("Thanks for taking this survey!"));
            echo "&url=";
            echo twig_urlencode_filter($this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 190, $this->source));
            echo "&hashtags=limesurvey,survey\">
                                                <i class=\"ri-twitter-fill\"></i>";
            // line 191
            echo gT("Tweet it");
            echo "
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                ";
            // line 196
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["aAdditionalLanguages"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["langname"]) {
                // line 197
                echo "                                    ";
                if (twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 197)) {
                    echo " ";
                    // line 198
                    echo "                                        ";
                    $context["tmp_url"] = LS_Twig_Extension::createAbsoluteUrl("survey/index", ["sid" => twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 198), "lang" => $context["langname"]]);
                    // line 199
                    echo "                                    ";
                }
                // line 200
                echo "                                    <li class=\"list-group-item p-0 border-0";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 200)) {
                    echo " mb-2";
                }
                echo "\">
                                        <div class=\"ls-flex-row col-12 align-items-center\">
                                            <div class=\"col-4\">
                                                ";
                // line 203
                echo getLanguageNameFromCode($this->sandbox->ensureToStringAllowed($context["langname"], 203, $this->source), false);
                echo "
                                            </div>
                                            <div class=\"col-8 d-flex justify-content-center\">
                                                <a class=\"btn btn-outline-secondary twitter-button\" target='_blank' href=\"https://twitter.com/intent/tweet?text=";
                // line 206
                echo twig_urlencode_filter(gT("Thanks for taking this survey!"));
                echo "&url=";
                echo twig_urlencode_filter($this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 206, $this->source));
                echo "&hashtags=limesurvey,survey\">
                                                    <i class=\"ri-twitter-fill\"></i>";
                // line 207
                echo gT("Tweet it");
                echo "
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langname'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            echo "                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">";
            // line 218
            echo gT("Close");
            echo "</button>
                </div>
            </div>
        </div>
    </div>

";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__5313c8a98df43c93420d1ebaf4632bfd";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  555 => 218,  548 => 213,  528 => 207,  522 => 206,  516 => 203,  507 => 200,  504 => 199,  501 => 198,  497 => 197,  480 => 196,  472 => 191,  466 => 190,  460 => 187,  455 => 184,  452 => 183,  449 => 182,  446 => 181,  438 => 176,  430 => 170,  411 => 165,  407 => 164,  401 => 161,  392 => 158,  389 => 157,  386 => 156,  382 => 155,  365 => 154,  358 => 150,  354 => 149,  348 => 146,  343 => 143,  340 => 142,  337 => 141,  334 => 140,  327 => 136,  321 => 133,  313 => 127,  293 => 121,  289 => 120,  282 => 116,  273 => 113,  270 => 112,  267 => 111,  263 => 110,  246 => 109,  238 => 104,  234 => 103,  227 => 99,  222 => 96,  219 => 95,  216 => 94,  213 => 93,  206 => 89,  197 => 83,  191 => 79,  189 => 78,  178 => 70,  172 => 69,  168 => 68,  162 => 65,  151 => 57,  145 => 54,  134 => 46,  128 => 43,  121 => 38,  107 => 33,  104 => 32,  101 => 31,  98 => 30,  92 => 27,  87 => 24,  83 => 23,  72 => 18,  69 => 17,  66 => 16,  63 => 15,  55 => 12,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__5313c8a98df43c93420d1ebaf4632bfd", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 15, "set" => 16, "for" => 23);
        static $filters = array("url_encode" => 150);
        static $functions = array("gT" => 4, "getLanguageNameFromCode" => 12, "createAbsoluteUrl" => 94);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['url_encode'],
                ['gT', 'getLanguageNameFromCode', 'createAbsoluteUrl']
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
