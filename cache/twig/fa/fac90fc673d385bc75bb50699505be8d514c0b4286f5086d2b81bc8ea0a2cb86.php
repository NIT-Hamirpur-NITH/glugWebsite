<?php

/* pages.html.twig */
class __TwigTemplate_171f34ad9fde0866a8a9aee747ae8d2283e7525b8de3868c0b562af6efbfeeba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "pages.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'titlebar' => array($this, 'block_titlebar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 7
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())) {
            // line 8
            $context["context"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "page", array(0 => true), "method");
        }
        // line 11
        if ($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "param", array(0 => "new"), "method")) {
            // line 12
            $context["mode"] = "new";
        } elseif (        // line 13
(isset($context["context"]) ? $context["context"] : null)) {
            // line 14
            $context["mode"] = "edit";
            // line 15
            if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "exists", array())) {
                // line 16
                $context["page_url"] = (((isset($context["base_url"]) ? $context["base_url"] : null) . "/pages") . (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "header", array()), "routes", array()), "default", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "header", array()), "routes", array()), "default", array())) : ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "rawRoute", array()))));
                // line 17
                $context["exists"] = true;
                // line 18
                $context["title"] = (((($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "exists", array())) ? ($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EDIT")) : ($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CREATE"))) . " ") . (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "header", array()), "title", array())) ? ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "header", array()), "title", array())) : ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "title", array()))));
            } else {
                // line 20
                $context["title"] = $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE");
            }
        } else {
            // line 23
            $context["mode"] = "list";
            // line 24
            $context["title"] = $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGES");
        }
        // line 27
        $context["modular"] = (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "modular", array())) ? ("modular_") : (""));
        // line 28
        $context["warn"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "warnings", array()), "delete_page", array());
        // line 29
        $context["admin_lang"] = (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "admin_lang", array())) ? ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "admin_lang", array())) : ("en"));
        // line 30
        $context["page_lang"] = $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "language", array());
        // line 31
        $context["type"] = "page";
        // line 44
        $context["preview_html"] = ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter((isset($context["base_url_relative_frontend"]) ? $context["base_url_relative_frontend"] : null), "/") . (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "home", array())) ? ("") : ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "route", array()))))) ? (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter((isset($context["base_url_relative_frontend"]) ? $context["base_url_relative_frontend"] : null), "/") . (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "home", array())) ? ("") : ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "route", array()))))) : ("/"));
        // line 45
        $context["preview_link"] = (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "routable", array())) ? ((("<a class=\"button\" target=\"_blank\" href=\"" . (isset($context["preview_html"]) ? $context["preview_html"] : null)) . "\"> <i class=\"fa fa-fw fa-eye\" style=\"font-size:18px;margin-right:0;\"></i></a>")) : (""));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 33
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        if (((isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 35
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/css/codemirror/codemirror.css")), "method");
            // line 36
            echo "    ";
        }
        // line 37
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        // line 41
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 110
    public function block_titlebar($context, array $blocks = array())
    {
        // line 111
        echo "    <div class=\"button-bar\">
        ";
        // line 112
        if (((isset($context["mode"]) ? $context["mode"] : null) == "list")) {
            // line 113
            echo "            <a class=\"button\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "\"><i class=\"fa fa-reply\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "</a>

            <div class=\"button-group\">
                <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
                    <i class=\"fa fa-plus\"></i> ";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE"), "html", null, true);
            echo "
                </button>
                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a class=\"button\" href=\"#modal-folder\" data-remodal-target=\"modal-folder\">";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_FOLDER"), "html", null, true);
            echo "</a></li>
                    ";
            // line 124
            if ( !twig_test_empty($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modularTypes", array()))) {
                // line 125
                echo "                        <li><a class=\"button\" href=\"#modular\" data-remodal-target=\"modular\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_MODULAR"), "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 127
            echo "                </ul>
            </div>
            ";
            // line 129
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "multilang", array())) {
                // line 130
                echo "                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\">
                        <i class=\"fa fa-flag-o\"></i>
                        ";
                // line 133
                $context["langName"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "siteLanguages", array()), (isset($context["admin_lang"]) ? $context["admin_lang"] : null), array(), "array");
                // line 134
                echo "                        ";
                echo twig_escape_filter($this->env, (twig_upper_filter($this->env, twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 0, 1)) . twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 1, null)), "html", null, true);
                echo "
                    </button>
                    ";
                // line 136
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "languages_enabled", array())) > 1)) {
                    // line 137
                    echo "                    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu language-switcher\">
                        ";
                    // line 141
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "languages_enabled", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["langCode"]) {
                        // line 142
                        echo "                            ";
                        $context["langName"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "siteLanguages", array()), $context["langCode"], array(), "array");
                        // line 143
                        echo "                            ";
                        if (($context["langCode"] != (isset($context["admin_lang"]) ? $context["admin_lang"] : null))) {
                            // line 144
                            echo "                                <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => (((((((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "slug", array())) . "/pages/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "switchlanguage/lang") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . $context["langCode"]), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, (twig_upper_filter($this->env, twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 0, 1)) . twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 1, null)), "html", null, true);
                            echo "</a></li>
                            ";
                        }
                        // line 146
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langCode'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 147
                    echo "                    </ul>
                    ";
                }
                // line 149
                echo "                </div>
            ";
            }
            // line 151
            echo "
        ";
        } elseif ((        // line 152
(isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 153
            echo "
            ";
            // line 154
            echo (isset($context["preview_link"]) ? $context["preview_link"] : null);
            echo "
            <a class=\"button\" href=\"";
            // line 155
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "/pages\"><i class=\"fa fa-reply\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "</a>
            ";
            // line 156
            if ((isset($context["exists"]) ? $context["exists"] : null)) {
                // line 157
                echo "                <a class=\"button disable-after-click\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((isset($context["page_url"]) ? $context["page_url"] : null) . "/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "copy"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                echo "\" class=\"page-copy\" ><i class=\"fa fa-copy\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.COPY"), "html", null, true);
                echo "</a>
                <a class=\"button\" href=\"#\" data-remodal-target=\"move\"><i class=\"fa fa-arrows\"></i> ";
                // line 158
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MOVE"), "html", null, true);
                echo "</a>
                ";
                // line 159
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin-pro", array(), "array"), "enabled", array())) {
                    // line 160
                    echo "                    <a class=\"button\" href=\"#\" data-remodal-target=\"revisions\"><i class=\"fa fa-history\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_PRO.REVISIONS"), "html", null, true);
                    echo "</a>
                ";
                }
                // line 162
                echo "                ";
                if ((isset($context["warn"]) ? $context["warn"] : null)) {
                    // line 163
                    echo "                    <a class=\"button\" href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((isset($context["page_url"]) ? $context["page_url"] : null) . "/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-close\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DELETE"), "html", null, true);
                    echo "</a>
                ";
                } else {
                    // line 165
                    echo "                    <a class=\"button disable-after-click\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "route", array(0 => true), "method") . "/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                    echo "\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                ";
                }
                // line 167
                echo "            ";
            }
            // line 168
            echo "
            <div class=\"button-group\">
                <button class=\"button\" name=\"task\" value=\"save\" form=\"blueprints\" type=\"submit\"><i class=\"fa fa-check\"></i> ";
            // line 170
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE"), "html", null, true);
            echo "</button>
                ";
            // line 171
            if (((isset($context["exists"]) ? $context["exists"] : null) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "multilang", array()))) {
                // line 172
                echo "                    ";
                if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "untranslatedLanguages", array())) {
                    // line 173
                    echo "                        <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-caret-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu lang-switcher\">
                            ";
                    // line 177
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "untranslatedLanguages", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["langCode"]) {
                        // line 178
                        echo "                                ";
                        $context["langName"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "siteLanguages", array()), $context["langCode"], array(), "array");
                        // line 179
                        echo "                                ";
                        if (($context["langCode"] != (isset($context["page_lang"]) ? $context["page_lang"] : null))) {
                            // line 180
                            echo "                                    <li><button class=\"button task\" name=\"task\" value=\"saveas\" lang=\"";
                            echo twig_escape_filter($this->env, $context["langCode"], "html", null, true);
                            echo "\" form=\"blueprints\" type=\"submit\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE_AS"), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, (twig_upper_filter($this->env, twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 0, 1)) . twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 1, null)), "html", null, true);
                            echo "</button>
                                ";
                        }
                        // line 182
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langCode'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 183
                    echo "                        </ul>
                    ";
                }
                // line 185
                echo "                ";
            }
            // line 186
            echo "            </div>


        ";
        }
        // line 190
        echo "    </div>
    ";
        // line 191
        if (((isset($context["mode"]) ? $context["mode"] : null) == "new")) {
            // line 192
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE"), "html", null, true);
            echo "</h1>
    ";
        } elseif ((        // line 193
(isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 194
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i>
            ";
            // line 195
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "exists", array())) ? ($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EDIT")) : ($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CREATE"))), "html", null, true);
            echo " <i>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "menu", array()), "html", null, true);
            echo "</i>
        </h1>
    ";
        } else {
            // line 198
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MANAGE_PAGES"), "html", null, true);
            echo "</h1>
    ";
        }
    }

    // line 202
    public function block_content($context, array $blocks = array())
    {
        // line 203
        echo "    <div class=\"clear\">
    ";
        // line 204
        if (((isset($context["mode"]) ? $context["mode"] : null) == "new")) {
            // line 205
            echo "        ";
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 205)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => "pages/page"), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
            // line 206
            echo "    ";
        } elseif (((isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 207
            echo "        <div class=\"admin-form-wrapper\">
            <div id=\"admin-topbar\">

                ";
            // line 210
            if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "multilang", array()) && (isset($context["page_lang"]) ? $context["page_lang"] : null))) {
                // line 211
                echo "                    <div id=\"admin-lang-toggle\" class=\"button-group\">
                        <button type=\"button\" class=\"button disabled\">
                            ";
                // line 213
                if ((isset($context["exists"]) ? $context["exists"] : null)) {
                    // line 214
                    echo "                                ";
                    echo twig_escape_filter($this->env, (isset($context["page_lang"]) ? $context["page_lang"] : null), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 216
                    echo "                                ";
                    echo twig_escape_filter($this->env, (isset($context["admin_lang"]) ? $context["admin_lang"] : null), "html", null, true);
                    echo "
                            ";
                }
                // line 218
                echo "                        </button>
                        ";
                // line 219
                if (((isset($context["exists"]) ? $context["exists"] : null) && (twig_length_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "translatedLanguages", array())) > 1))) {
                    // line 220
                    echo "                            <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-caret-down\"></i>
                            </button>
                            <ul class=\"dropdown-menu language-switcher\">
                                ";
                    // line 224
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "translatedLanguages", array()));
                    foreach ($context['_seq'] as $context["language"] => $context["route"]) {
                        // line 225
                        echo "                                    ";
                        if (($context["language"] != (isset($context["page_lang"]) ? $context["page_lang"] : null))) {
                            // line 226
                            echo "                                    <li><button class=\"task\" name=\"task\" value=\"switchlanguage\" lang=\"";
                            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
                            echo "\" redirect=\"";
                            echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "rawRoute", array()), "/"), "html", null, true);
                            echo "\" form=\"blueprints\">";
                            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
                            echo "</button>
                                    ";
                        }
                        // line 228
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['language'], $context['route'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 229
                    echo "                            </ul>
                        ";
                }
                // line 231
                echo "                    </div>
                ";
            }
            // line 233
            echo "
                ";
            // line 234
            if ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "blueprints", array()), "fields", array())) {
                // line 235
                echo "                ";
                $context["normalText"] = $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NORMAL");
                // line 236
                echo "                ";
                $context["expertText"] = $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EXPERT");
                // line 237
                echo "                ";
                $context["maxLen"] = max(array(0 => twig_length_filter($this->env, (isset($context["normalText"]) ? $context["normalText"] : null)), 1 => twig_length_filter($this->env, (isset($context["expertText"]) ? $context["expertText"] : null))));
                // line 238
                echo "                ";
                $context["normalText"] = $this->getAttribute($this, "spanToggle", array(0 => (isset($context["normalText"]) ? $context["normalText"] : null), 1 => (isset($context["maxLen"]) ? $context["maxLen"] : null)), "method");
                // line 239
                echo "                ";
                $context["expertText"] = $this->getAttribute($this, "spanToggle", array(0 => (isset($context["expertText"]) ? $context["expertText"] : null), 1 => (isset($context["maxLen"]) ? $context["maxLen"] : null)), "method");
                // line 240
                echo "                <form id=\"admin-mode-toggle\">
                    <div class=\"switch-toggle switch-grav\">
                        <input type=\"radio\" value=\"normal\" data-leave-url=\"";
                // line 242
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo "/pages/";
                echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), "/"), "html", null, true);
                echo "/mode";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array()), "html", null, true);
                echo "normal\" id=\"normal\" name=\"mode-switch\" class=\"highlight\" ";
                if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "expert", array()) == "0")) {
                    echo " checked=\"checked\"";
                }
                echo ">
                        <label for=\"normal\">";
                // line 243
                echo (isset($context["normalText"]) ? $context["normalText"] : null);
                echo "</label>
                        <input type=\"radio\" value=\"expert\" data-leave-url=\"";
                // line 244
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo "/pages/";
                echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), "/"), "html", null, true);
                echo "/mode";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array()), "html", null, true);
                echo "expert\" id=\"expert\" name=\"mode-switch\" class=\"highlight\" ";
                if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "expert", array()) == "1")) {
                    echo " checked=\"checked\"";
                }
                echo ">
                        <label for=\"expert\">";
                // line 245
                echo (isset($context["expertText"]) ? $context["expertText"] : null);
                echo "</label>
                        <a></a>
                    </div>
                </form>
                ";
            }
            // line 250
            echo "
            </div>

            ";
            // line 253
            if (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "blueprints", array()), "fields", array()) && ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "expert", array()) == "0"))) {
                // line 254
                echo "                ";
                $this->loadTemplate("partials/blueprints.html.twig", "pages.html.twig", 254)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "blueprints", array()), "data" => (isset($context["context"]) ? $context["context"] : null))));
                // line 255
                echo "            ";
            } else {
                // line 256
                echo "                ";
                $this->loadTemplate("partials/blueprints-raw.html.twig", "pages.html.twig", 256)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => (("admin/pages/" . (isset($context["modular"]) ? $context["modular"] : null)) . "raw")), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
                // line 257
                echo "            ";
            }
            // line 258
            echo "        </div>
    ";
        } else {
            // line 260
            echo "        <form id=\"page-filtering\">
            <div class=\"page-filters\">
                <input type=\"text\" data-filter-labels=\"";
            // line 262
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array(0 => array("id" => "mode", "name" => $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE_MODES")), 1 => array("id" => "type", "name" => $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE_TYPES")), 2 => array("id" => "access", "name" => $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ACCESS_LEVELS")))), "html_attr");
            echo "\" data-filter-types=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "types", array()), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modularTypes", array()))), "html_attr");
            echo "\" data-filter-access-levels=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "accessLevels", array())), "html_attr");
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_FILTERS"), "html", null, true);
            echo "\" class=\"page-filter\" name=\"page-filter\" />
            </div>
            <div class=\"page-search\">
                <input type=\"text\" placeholder=\"";
            // line 265
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SEARCH_PAGES"), "html", null, true);
            echo "\" name=\"page-search\" />
            </div>
            <div class=\"page-shortcuts\">
                <span class=\"button button-x-small\" data-page-toggleall=\"expand\"><i class=\"fa fa-fw fa-plus-circle\"></i> ";
            // line 268
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EXPAND_ALL"), "html", null, true);
            echo "</span>
                <span class=\"button button-x-small\" data-page-toggleall=\"collapse\"><i class=\"fa fa-fw fa-minus-circle\"></i> ";
            // line 269
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.COLLAPSE_ALL"), "html", null, true);
            echo "</span>
            </div>
        </form>
        <div class=\"pages-list\">
            <ul class=\"depth-0\">
                ";
            // line 274
            echo $this->getAttribute($this, "loop", array(0 => (isset($context["pages"]) ? $context["pages"] : null), 1 => 0, 2 => $context), "method");
            echo "
            </ul>
            ";
            // line 276
            $this->loadTemplate("partials/page-legend.html.twig", "pages.html.twig", 276)->display($context);
            // line 277
            echo "        </div>
    ";
        }
        // line 279
        echo "    </div>

    ";
        // line 281
        if (((isset($context["mode"]) ? $context["mode"] : null) == "list")) {
            // line 282
            echo "
        <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false\">
            ";
            // line 284
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 284)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => "admin/pages/new"), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
            // line 285
            echo "        </div>

        <div class=\"remodal\" data-remodal-id=\"modal-folder\" data-remodal-options=\"hashTracking: false\">
            ";
            // line 288
            $this->loadTemplate("partials/blueprints-new-folder.html.twig", "pages.html.twig", 288)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => "admin/pages/new_folder"), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
            // line 289
            echo "        </div>

        <div class=\"remodal\" data-remodal-id=\"modular\" data-remodal-options=\"hashTracking: false\">
            ";
            // line 292
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 292)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => "admin/pages/modular_new"), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
            // line 293
            echo "        </div>

    ";
        }
        // line 296
        echo "
    ";
        // line 297
        if (((isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 298
            echo "    <div class=\"remodal\" data-remodal-id=\"move\" data-remodal-options=\"hashTracking: false\">

        ";
            // line 300
            $this->loadTemplate("partials/page-move.html.twig", "pages.html.twig", 300)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => "admin/pages/move"), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
            // line 301
            echo "    </div>
    <div class=\"remodal\" data-remodal-id=\"revisions\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 303
            $this->loadTemplate(array(0 => "partials/page-revisions.html.twig", 1 => "empty.html.twig"), "pages.html.twig", 303)->display(array_merge($context, array("data" => (isset($context["context"]) ? $context["context"] : null))));
            // line 304
            echo "    </div>
    ";
        }
        // line 306
        echo "
    ";
        // line 307
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "pages.html.twig", 307)->display($context);
        // line 308
        echo "
    <div class=\"remodal\" data-remodal-id=\"delete\" data-remodal-options=\"hashTracking: false\">
        <form>
            <h1>";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_TITLE"), "html", null, true);
        echo "</h1>
            <p class=\"bigger\">
                ";
        // line 313
        if ((isset($context["context"]) ? $context["context"] : null)) {
            // line 314
            echo "                    <strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "title", array()), "html", null, true);
            echo "</strong>
                ";
        }
        // line 316
        echo "            </p>
            <p class=\"bigger\">
              ";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_DESC"), "html", null, true);
        echo "
            </p>
            <br>
            <div class=\"button-bar\">
            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</button>
            <a class=\"button disable-after-click\" data-delete-action href=\"#\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</a>
            </div>
        </form>
    </div>

    ";
        // line 328
        try {
            $this->loadTemplate("partials/admin-pro-pages-addons.html.twig", "pages.html.twig", 328)->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 329
        echo "
";
    }

    // line 3
    public function getspanToggle($__input__ = null, $__length__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "input" => $__input__,
            "length" => $__length__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "    ";
            echo (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->repeatFunc("&nbsp;&nbsp;", (((isset($context["length"]) ? $context["length"] : null) - twig_length_filter($this->env, (isset($context["input"]) ? $context["input"] : null))) / 2)) . (isset($context["input"]) ? $context["input"] : null)) . $this->env->getExtension('Grav\Common\Twig\TwigExtension')->repeatFunc("&nbsp;&nbsp;", (((isset($context["length"]) ? $context["length"] : null) - twig_length_filter($this->env, (isset($context["input"]) ? $context["input"] : null))) / 2)));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 47
    public function getloop($__page__ = null, $__depth__ = null, $__twig_vars__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "depth" => $__depth__,
            "twig_vars" => $__twig_vars__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 48
            echo "    ";
            $context["separator"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "config", array(), "array"), "system", array()), "param_sep", array());
            // line 49
            echo "    ";
            $context["base_url"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "base_url_relative", array(), "array");
            // line 50
            echo "    ";
            $context["base_url_simple"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "base_url_simple", array(), "array");
            // line 51
            echo "    ";
            $context["admin_route"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "admin_route", array(), "array");
            // line 52
            echo "    ";
            $context["admin_lang"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "admin_lang", array(), "array");
            // line 53
            echo "    ";
            $context["warn"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "warn", array(), "array");
            // line 54
            echo "    ";
            $context["uri"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "uri", array(), "array");
            // line 55
            echo "
    ";
            // line 56
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "content", array()), "order", array()), "by", array())) {
                // line 57
                echo "        ";
                $context["pcol"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array(), "method"), "order", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "content", array()), "order", array()), "by", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "content", array()), "order", array()), "dir", array())), "method");
                // line 58
                echo "    ";
            } elseif ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "order_by", array())) {
                // line 59
                echo "        ";
                $context["pcol"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array(), "method"), "order", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "order_by", array()), 1 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "order_dir", array())), "method");
                // line 60
                echo "    ";
            } else {
                // line 61
                echo "        ";
                $context["pcol"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array(), "method");
                // line 62
                echo "    ";
            }
            // line 63
            echo "
    ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pcol"]) ? $context["pcol"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 65
                echo "        ";
                $context["description"] = (((((( !$this->getAttribute($context["p"], "page", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.FOLDER") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE") . " &bull; "))) . (($this->getAttribute(                // line 66
$context["p"], "modular", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODULAR") . " &bull; ")) : (""))) . (($this->getAttribute(                // line 67
$context["p"], "routable", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ROUTABLE") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NON_ROUTABLE") . " &bull; ")))) . (($this->getAttribute(                // line 68
$context["p"], "visible", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.VISIBLE") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NON_VISIBLE") . " &bull; ")))) . (($this->getAttribute(                // line 69
$context["p"], "published", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PUBLISHED") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NON_PUBLISHED") . " &bull; "))));
                // line 70
                echo "        ";
                $context["page_route"] = trim($this->getAttribute($context["p"], "rawRoute", array()), "/");
                // line 71
                echo "        ";
                if (($this->getAttribute($context["p"], "language", array()) && ($this->getAttribute($context["p"], "language", array()) != (isset($context["admin_lang"]) ? $context["admin_lang"] : null)))) {
                    // line 72
                    echo "            ";
                    $context["page_url"] = (((((((isset($context["base_url_simple"]) ? $context["base_url_simple"] : null) . "/") . $this->getAttribute($context["p"], "language", array())) . "/") . (isset($context["admin_route"]) ? $context["admin_route"] : null)) . "/pages/") . (isset($context["page_route"]) ? $context["page_route"] : null));
                    // line 73
                    echo "        ";
                } else {
                    // line 74
                    echo "            ";
                    $context["page_url"] = (((isset($context["base_url"]) ? $context["base_url"] : null) . "/pages/") . (isset($context["page_route"]) ? $context["page_route"] : null));
                    // line 75
                    echo "        ";
                }
                // line 76
                echo "
        <li class=\"page-item\" data-nav-id=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "route", array()), "html", null, true);
                echo "\">
            <div class=\"row\">
                <span ";
                // line 79
                echo ((($this->getAttribute($this->getAttribute($context["p"], "children", array(0 => 0), "method"), "count", array()) > 0)) ? ("data-toggle=\"children\"") : (""));
                echo ">
                <i class=\"page-icon fa fa-fw fa-circle-o ";
                // line 80
                echo ((($this->getAttribute($this->getAttribute($context["p"], "children", array(0 => 0), "method"), "count", array()) > 0)) ? ("children-closed") : (""));
                echo " ";
                echo (($this->getAttribute($context["p"], "modular", array())) ? ("modular") : ((( !$this->getAttribute($context["p"], "routable", array())) ? ("not-routable") : ((( !$this->getAttribute($context["p"], "visible", array())) ? ("not-visible") : ((( !$this->getAttribute($context["p"], "page", array())) ? ("folder") : (""))))))));
                echo "\"></i>
                </span>
                <span data-hint=\"";
                // line 82
                echo trim((isset($context["description"]) ? $context["description"] : null), " &bull; ");
                echo "\" class=\"hint--right\">
                <a href=\"";
                // line 83
                echo twig_escape_filter($this->env, (isset($context["page_url"]) ? $context["page_url"] : null), "html", null, true);
                echo "\" class=\"page-edit\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "title", array()));
                echo "</a>
                </span>
                ";
                // line 85
                if ($this->getAttribute($context["p"], "language", array())) {
                    // line 86
                    echo "                    <span class=\"badge lang ";
                    if (($this->getAttribute($context["p"], "language", array()) == (isset($context["admin_lang"]) ? $context["admin_lang"] : null))) {
                        echo "info";
                    }
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "language", array()), "html", null, true);
                    echo "</span>
                ";
                }
                // line 88
                echo "                <span class=\"page-home\">";
                echo (($this->getAttribute($context["p"], "home", array())) ? ("<i class=\"fa fa-home\"></i>") : (""));
                echo "</span>
                <span class=\"page-tools\">

                    ";
                // line 91
                if ((isset($context["warn"]) ? $context["warn"] : null)) {
                    // line 92
                    echo "                    <a href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((isset($context["page_url"]) ? $context["page_url"] : null) . "/task") . (isset($context["separator"]) ? $context["separator"] : null)) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                    echo "\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                    ";
                } else {
                    // line 94
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((isset($context["page_url"]) ? $context["page_url"] : null) . "/task") . (isset($context["separator"]) ? $context["separator"] : null)) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                    echo "\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                    ";
                }
                // line 96
                echo "                </span>
                <p class=\"page-route\">";
                // line 97
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", array()), "routes", array()), "default", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", array()), "routes", array()), "default", array())) : ($this->getAttribute($context["p"], "route", array()))), "html", null, true);
                echo " <span class=\"spacer\"><i class=\"fa fa-long-arrow-right\"></i></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "template", array(), "method"), "html", null, true);
                echo "</p>
            </div>
            ";
                // line 99
                if (($this->getAttribute($this->getAttribute($context["p"], "children", array(), "method"), "count", array()) > 0)) {
                    // line 100
                    echo "
            <ul class=\"depth-";
                    // line 101
                    echo twig_escape_filter($this->env, ((isset($context["depth"]) ? $context["depth"] : null) + 1), "html", null, true);
                    echo "\" style=\"display:none;\">
                ";
                    // line 102
                    echo $this->getAttribute($this, "loop", array(0 => $context["p"], 1 => ((isset($context["depth"]) ? $context["depth"] : null) + 1), 2 => (isset($context["twig_vars"]) ? $context["twig_vars"] : null)), "method");
                    echo "
            </ul>
            ";
                }
                // line 105
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  882 => 105,  876 => 102,  872 => 101,  869 => 100,  867 => 99,  860 => 97,  857 => 96,  851 => 94,  845 => 92,  843 => 91,  836 => 88,  826 => 86,  824 => 85,  817 => 83,  813 => 82,  806 => 80,  802 => 79,  797 => 77,  794 => 76,  791 => 75,  788 => 74,  785 => 73,  782 => 72,  779 => 71,  776 => 70,  774 => 69,  773 => 68,  772 => 67,  771 => 66,  769 => 65,  765 => 64,  762 => 63,  759 => 62,  756 => 61,  753 => 60,  750 => 59,  747 => 58,  744 => 57,  742 => 56,  739 => 55,  736 => 54,  733 => 53,  730 => 52,  727 => 51,  724 => 50,  721 => 49,  718 => 48,  704 => 47,  686 => 4,  673 => 3,  668 => 329,  661 => 328,  653 => 323,  649 => 322,  642 => 318,  638 => 316,  630 => 314,  628 => 313,  623 => 311,  618 => 308,  616 => 307,  613 => 306,  609 => 304,  607 => 303,  603 => 301,  601 => 300,  597 => 298,  595 => 297,  592 => 296,  587 => 293,  585 => 292,  580 => 289,  578 => 288,  573 => 285,  571 => 284,  567 => 282,  565 => 281,  561 => 279,  557 => 277,  555 => 276,  550 => 274,  542 => 269,  538 => 268,  532 => 265,  520 => 262,  516 => 260,  512 => 258,  509 => 257,  506 => 256,  503 => 255,  500 => 254,  498 => 253,  493 => 250,  485 => 245,  473 => 244,  469 => 243,  457 => 242,  453 => 240,  450 => 239,  447 => 238,  444 => 237,  441 => 236,  438 => 235,  436 => 234,  433 => 233,  429 => 231,  425 => 229,  419 => 228,  409 => 226,  406 => 225,  402 => 224,  396 => 220,  394 => 219,  391 => 218,  385 => 216,  379 => 214,  377 => 213,  373 => 211,  371 => 210,  366 => 207,  363 => 206,  360 => 205,  358 => 204,  355 => 203,  352 => 202,  344 => 198,  336 => 195,  333 => 194,  331 => 193,  326 => 192,  324 => 191,  321 => 190,  315 => 186,  312 => 185,  308 => 183,  302 => 182,  292 => 180,  289 => 179,  286 => 178,  282 => 177,  276 => 173,  273 => 172,  271 => 171,  267 => 170,  263 => 168,  260 => 167,  254 => 165,  246 => 163,  243 => 162,  237 => 160,  235 => 159,  231 => 158,  224 => 157,  222 => 156,  216 => 155,  212 => 154,  209 => 153,  207 => 152,  204 => 151,  200 => 149,  196 => 147,  190 => 146,  182 => 144,  179 => 143,  176 => 142,  172 => 141,  166 => 137,  164 => 136,  158 => 134,  156 => 133,  151 => 130,  149 => 129,  145 => 127,  139 => 125,  137 => 124,  133 => 123,  124 => 117,  114 => 113,  112 => 112,  109 => 111,  106 => 110,  99 => 41,  96 => 40,  89 => 37,  86 => 36,  83 => 35,  80 => 34,  77 => 33,  73 => 1,  71 => 45,  69 => 44,  67 => 31,  65 => 30,  63 => 29,  61 => 28,  59 => 27,  56 => 24,  54 => 23,  50 => 20,  47 => 18,  45 => 17,  43 => 16,  41 => 15,  39 => 14,  37 => 13,  35 => 12,  33 => 11,  30 => 8,  28 => 7,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% macro spanToggle(input, length) %}
    {{ (repeat('&nbsp;&nbsp;', (length - input|length) / 2) ~ input ~ repeat('&nbsp;&nbsp;', (length - input|length) / 2))|raw }}
{% endmacro %}

{% if admin.route %}
    {% set context = admin.page(true) %}
{% endif %}

{% if uri.param('new') %}
    {% set mode = 'new' %}
{%  elseif context %}
    {% set mode = 'edit' %}
    {% if context.exists %}
        {% set page_url = base_url ~ '/pages' ~ (context.header.routes.default ?: context.rawRoute) %}
        {% set exists = true %}
        {% set title = (context.exists ? \"PLUGIN_ADMIN.EDIT\"|tu : \"PLUGIN_ADMIN.CREATE\"|tu ) ~ \" \" ~ (context.header.title ?: context.title) %}
    {% else %}
        {% set title = \"PLUGIN_ADMIN.ADD_PAGE\"|tu %}
    {% endif %}
{% else %}
    {% set mode = 'list' %}
    {% set title = \"PLUGIN_ADMIN.PAGES\"|tu %}
{% endif %}

{% set modular = context.modular ? 'modular_' : '' %}
{% set warn = config.plugins.admin.warnings.delete_page %}
{% set admin_lang = admin.session.admin_lang ?: 'en' %}
{% set page_lang = context.language %}
{% set type = 'page' %}

{% block stylesheets %}
    {% if mode == 'edit' %}
        {% do assets.addCss(theme_url~'/css/codemirror/codemirror.css') %}
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}

{% set preview_html = (base_url_relative_frontend|rtrim('/') ~ (context.home ? '' : context.route)) ?: '/' %}
{% set preview_link = context.routable ? '<a class=\"button\" target=\"_blank\" href=\"' ~ preview_html ~ '\"> <i class=\"fa fa-fw fa-eye\" style=\"font-size:18px;margin-right:0;\"></i></a>' : '' %}

{% macro loop(page, depth, twig_vars) %}
    {% set separator = twig_vars['config'].system.param_sep %}
    {% set base_url = twig_vars['base_url_relative'] %}
    {% set base_url_simple = twig_vars['base_url_simple'] %}
    {% set admin_route = twig_vars['admin_route'] %}
    {% set admin_lang = twig_vars['admin_lang'] %}
    {% set warn = twig_vars['warn'] %}
    {% set uri = twig_vars['uri'] %}

    {% if page.header.content.order.by %}
        {% set pcol = page.children().order(page.header.content.order.by, page.header.content.order.dir) %}
    {% elseif page.order_by %}
        {% set pcol = page.children().order(page.order_by, page.order_dir) %}
    {% else %}
        {% set pcol = page.children() %}
    {% endif %}

    {% for p in pcol %}
        {% set description = (not p.page ? \"PLUGIN_ADMIN.FOLDER\"|tu ~ ' &bull; ' : \"PLUGIN_ADMIN.PAGE\"|tu ~ ' &bull; ') ~
                             (p.modular ? \"PLUGIN_ADMIN.MODULAR\"|tu ~ ' &bull; ' : '') ~
                             (p.routable ? \"PLUGIN_ADMIN.ROUTABLE\"|tu ~ ' &bull; ' : \"PLUGIN_ADMIN.NON_ROUTABLE\"|tu ~ ' &bull; ') ~
                             (p.visible ? \"PLUGIN_ADMIN.VISIBLE\"|tu ~ ' &bull; ' : \"PLUGIN_ADMIN.NON_VISIBLE\"|tu ~ ' &bull; ') ~
                             (p.published ? \"PLUGIN_ADMIN.PUBLISHED\"|tu ~ ' &bull; ' : \"PLUGIN_ADMIN.NON_PUBLISHED\"|tu ~ ' &bull; ') %}
        {% set page_route =  p.rawRoute|trim('/') %}
        {% if p.language and p.language != admin_lang %}
            {% set page_url = base_url_simple ~ '/' ~ p.language ~ '/' ~ admin_route ~ '/pages/' ~ page_route %}
        {% else %}
            {% set page_url = base_url ~ '/pages/' ~ page_route  %}
        {% endif %}

        <li class=\"page-item\" data-nav-id=\"{{ p.route }}\">
            <div class=\"row\">
                <span {{ p.children(0).count > 0 ? 'data-toggle=\"children\"' : ''}}>
                <i class=\"page-icon fa fa-fw fa-circle-o {{ p.children(0).count > 0 ? 'children-closed' : ''}} {{ p.modular ? 'modular' : (not p.routable ? 'not-routable' : (not p.visible ? 'not-visible' : (not p.page ? 'folder' :  ''))) }}\"></i>
                </span>
                <span data-hint=\"{{ description|trim(' &bull; ')|raw }}\" class=\"hint--right\">
                <a href=\"{{ page_url }}\" class=\"page-edit\">{{ p.title|e }}</a>
                </span>
                {% if p.language %}
                    <span class=\"badge lang {% if p.language == admin_lang %}info{% endif %}\">{{p.language}}</span>
                {% endif %}
                <span class=\"page-home\">{{ p.home ? '<i class=\"fa fa-home\"></i>' }}</span>
                <span class=\"page-tools\">

                    {% if warn %}
                    <a href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"{{ uri.addNonce(page_url ~ '/task' ~ separator ~ 'delete', 'admin-form', 'admin-nonce') }}\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                    {% else %}
                    <a href=\"{{ uri.addNonce(page_url ~ '/task' ~ separator ~ 'delete', 'admin-form', 'admin-nonce') }}\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                    {% endif %}
                </span>
                <p class=\"page-route\">{{ p.header.routes.default ?: p.route }} <span class=\"spacer\"><i class=\"fa fa-long-arrow-right\"></i></span> {{ p.template() }}</p>
            </div>
            {% if p.children().count > 0 %}

            <ul class=\"depth-{{ depth + 1 }}\" style=\"display:none;\">
                {{ _self.loop(p, depth + 1, twig_vars) }}
            </ul>
            {% endif %}
        </li>
    {% endfor %}
{% endmacro %}


{% block titlebar %}
    <div class=\"button-bar\">
        {% if mode == 'list' %}
            <a class=\"button\" href=\"{{ base_url }}\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|tu }}</a>

            <div class=\"button-group\">
                <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
                    <i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.ADD_PAGE\"|tu }}
                </button>
                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a class=\"button\" href=\"#modal-folder\" data-remodal-target=\"modal-folder\">{{ \"PLUGIN_ADMIN.ADD_FOLDER\"|tu }}</a></li>
                    {% if admin.modularTypes is not empty %}
                        <li><a class=\"button\" href=\"#modular\" data-remodal-target=\"modular\">{{ \"PLUGIN_ADMIN.ADD_MODULAR\"|tu }}</a></li>
                    {% endif %}
                </ul>
            </div>
            {% if admin.multilang %}
                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\">
                        <i class=\"fa fa-flag-o\"></i>
                        {% set langName = admin.siteLanguages[admin_lang] %}
                        {{ langName[:1]|upper ~ langName[1:] }}
                    </button>
                    {%  if admin.languages_enabled|length > 1 %}
                    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu language-switcher\">
                        {% for langCode in admin.languages_enabled %}
                            {% set langName = admin.siteLanguages[langCode] %}
                            {% if langCode != admin_lang %}
                                <li><a href=\"{{ uri.addNonce(base_url_relative ~ theme.slug ~ '/pages/task' ~ config.system.param_sep ~ 'switchlanguage/lang' ~ config.system.param_sep ~ langCode, 'admin-form', 'admin-nonce') }}\">{{ langName[:1]|upper ~ langName[1:] }}</a></li>
                            {% endif %}
                        {% endfor %}
                    </ul>
                    {% endif %}
                </div>
            {% endif %}

        {% elseif mode == 'edit' %}

            {{ preview_link|raw }}
            <a class=\"button\" href=\"{{ base_url }}/pages\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|tu }}</a>
            {% if exists %}
                <a class=\"button disable-after-click\" href=\"{{ uri.addNonce(page_url ~ '/task' ~ config.system.param_sep ~ 'copy', 'admin-form', 'admin-nonce') }}\" class=\"page-copy\" ><i class=\"fa fa-copy\"></i> {{ \"PLUGIN_ADMIN.COPY\"|tu }}</a>
                <a class=\"button\" href=\"#\" data-remodal-target=\"move\"><i class=\"fa fa-arrows\"></i> {{ \"PLUGIN_ADMIN.MOVE\"|tu }}</a>
                {% if config.plugins['admin-pro'].enabled %}
                    <a class=\"button\" href=\"#\" data-remodal-target=\"revisions\"><i class=\"fa fa-history\"></i> {{ \"PLUGIN_ADMIN_PRO.REVISIONS\"|tu }}</a>
                {% endif %}
                {% if warn %}
                    <a class=\"button\" href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"{{ uri.addNonce(page_url ~ '/task' ~ config.system.param_sep ~ 'delete', 'admin-form', 'admin-nonce') }}\"><i class=\"fa fa-close\"></i> {{ \"PLUGIN_ADMIN.DELETE\"|tu }}</a>
                {% else %}
                    <a class=\"button disable-after-click\" href=\"{{ uri.addNonce(uri.route(true) ~ '/task' ~ config.system.param_sep ~ 'delete', 'admin-form', 'admin-nonce') }}\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                {% endif %}
            {% endif %}

            <div class=\"button-group\">
                <button class=\"button\" name=\"task\" value=\"save\" form=\"blueprints\" type=\"submit\"><i class=\"fa fa-check\"></i> {{ \"PLUGIN_ADMIN.SAVE\"|tu }}</button>
                {% if exists and admin.multilang %}
                    {% if context.untranslatedLanguages %}
                        <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-caret-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu lang-switcher\">
                            {% for langCode in context.untranslatedLanguages %}
                                {% set langName = admin.siteLanguages[langCode] %}
                                {% if langCode != page_lang %}
                                    <li><button class=\"button task\" name=\"task\" value=\"saveas\" lang=\"{{langCode}}\" form=\"blueprints\" type=\"submit\">{{ \"PLUGIN_ADMIN.SAVE_AS\"|tu }} {{ langName[:1]|upper ~ langName[1:] }}</button>
                                {% endif %}
                            {% endfor %}
                        </ul>
                    {% endif %}
                {% endif %}
            </div>


        {% endif %}
    </div>
    {% if mode == 'new' %}
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> {{ \"PLUGIN_ADMIN.ADD_PAGE\"|tu }}</h1>
    {% elseif mode == 'edit' %}
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i>
            {{ context.exists ? \"PLUGIN_ADMIN.EDIT\"|tu : \"PLUGIN_ADMIN.CREATE\"|tu }} <i>{{ context.menu }}</i>
        </h1>
    {% else %}
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> {{ \"PLUGIN_ADMIN.MANAGE_PAGES\"|tu }}</h1>
    {% endif %}
{% endblock %}

{% block content %}
    <div class=\"clear\">
    {% if mode == 'new' %}
        {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('pages/page'), data: context } %}
    {% elseif mode == 'edit' %}
        <div class=\"admin-form-wrapper\">
            <div id=\"admin-topbar\">

                {% if admin.multilang and page_lang %}
                    <div id=\"admin-lang-toggle\" class=\"button-group\">
                        <button type=\"button\" class=\"button disabled\">
                            {% if exists %}
                                {{ page_lang }}
                            {% else %}
                                {{ admin_lang }}
                            {% endif %}
                        </button>
                        {% if exists and context.translatedLanguages|length > 1 %}
                            <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-caret-down\"></i>
                            </button>
                            <ul class=\"dropdown-menu language-switcher\">
                                {% for language, route in context.translatedLanguages %}
                                    {% if language != page_lang %}
                                    <li><button class=\"task\" name=\"task\" value=\"switchlanguage\" lang=\"{{language}}\" redirect=\"{{context.rawRoute|trim('/')}}\" form=\"blueprints\">{{ language }}</button>
                                    {% endif %}
                                {% endfor %}
                            </ul>
                        {% endif %}
                    </div>
                {% endif %}

                {% if context.blueprints.fields %}
                {% set normalText = \"PLUGIN_ADMIN.NORMAL\"|tu %}
                {% set expertText = \"PLUGIN_ADMIN.EXPERT\"|tu %}
                {% set maxLen = max([normalText|length, expertText|length]) %}
                {% set normalText = _self.spanToggle(normalText, maxLen) %}
                {% set expertText = _self.spanToggle(expertText, maxLen) %}
                <form id=\"admin-mode-toggle\">
                    <div class=\"switch-toggle switch-grav\">
                        <input type=\"radio\" value=\"normal\" data-leave-url=\"{{ base_url }}/pages/{{ admin.route|trim('/') }}/mode{{ config.system.param_sep }}normal\" id=\"normal\" name=\"mode-switch\" class=\"highlight\" {% if admin.session.expert == '0' %} checked=\"checked\"{% endif %}>
                        <label for=\"normal\">{{ normalText|raw }}</label>
                        <input type=\"radio\" value=\"expert\" data-leave-url=\"{{ base_url }}/pages/{{ admin.route|trim('/') }}/mode{{ config.system.param_sep }}expert\" id=\"expert\" name=\"mode-switch\" class=\"highlight\" {% if admin.session.expert == '1' %} checked=\"checked\"{% endif %}>
                        <label for=\"expert\">{{ expertText|raw }}</label>
                        <a></a>
                    </div>
                </form>
                {% endif %}

            </div>

            {% if context.blueprints.fields and admin.session.expert == '0' %}
                {% include 'partials/blueprints.html.twig' with { blueprints: context.blueprints, data: context } %}
            {% else %}
                {% include 'partials/blueprints-raw.html.twig' with { blueprints: admin.blueprints('admin/pages/'~modular~'raw'), data: context } %}
            {% endif %}
        </div>
    {% else %}
        <form id=\"page-filtering\">
            <div class=\"page-filters\">
                <input type=\"text\" data-filter-labels=\"{{ [{'id': 'mode', 'name': 'PLUGIN_ADMIN.PAGE_MODES'|tu}, {'id': 'type', 'name': 'PLUGIN_ADMIN.PAGE_TYPES'|tu}, {'id': 'access', 'name': 'PLUGIN_ADMIN.ACCESS_LEVELS'|tu}] |json_encode|e('html_attr')}}\" data-filter-types=\"{{ admin.types|merge(admin.modularTypes)|json_encode|e('html_attr') }}\" data-filter-access-levels=\"{{ admin.accessLevels|json_encode|e('html_attr') }}\" placeholder=\"{{ \"PLUGIN_ADMIN.ADD_FILTERS\"|tu }}\" class=\"page-filter\" name=\"page-filter\" />
            </div>
            <div class=\"page-search\">
                <input type=\"text\" placeholder=\"{{ \"PLUGIN_ADMIN.SEARCH_PAGES\"|tu }}\" name=\"page-search\" />
            </div>
            <div class=\"page-shortcuts\">
                <span class=\"button button-x-small\" data-page-toggleall=\"expand\"><i class=\"fa fa-fw fa-plus-circle\"></i> {{ \"PLUGIN_ADMIN.EXPAND_ALL\"|tu }}</span>
                <span class=\"button button-x-small\" data-page-toggleall=\"collapse\"><i class=\"fa fa-fw fa-minus-circle\"></i> {{ \"PLUGIN_ADMIN.COLLAPSE_ALL\"|tu }}</span>
            </div>
        </form>
        <div class=\"pages-list\">
            <ul class=\"depth-0\">
                {{ _self.loop(pages, 0, _context) }}
            </ul>
            {% include 'partials/page-legend.html.twig' %}
        </div>
    {% endif %}
    </div>

    {% if mode == 'list' %}

        <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false\">
            {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('admin/pages/new'), data: context } %}
        </div>

        <div class=\"remodal\" data-remodal-id=\"modal-folder\" data-remodal-options=\"hashTracking: false\">
            {% include 'partials/blueprints-new-folder.html.twig' with { blueprints: admin.blueprints('admin/pages/new_folder'), data: context } %}
        </div>

        <div class=\"remodal\" data-remodal-id=\"modular\" data-remodal-options=\"hashTracking: false\">
            {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('admin/pages/modular_new'), data: context } %}
        </div>

    {% endif %}

    {% if mode == 'edit' %}
    <div class=\"remodal\" data-remodal-id=\"move\" data-remodal-options=\"hashTracking: false\">

        {% include 'partials/page-move.html.twig' with { blueprints: admin.blueprints('admin/pages/move'), data: context } %}
    </div>
    <div class=\"remodal\" data-remodal-id=\"revisions\" data-remodal-options=\"hashTracking: false\">
        {% include ['partials/page-revisions.html.twig', 'empty.html.twig'] with { data: context } %}
    </div>
    {% endif %}

    {% include 'partials/modal-changes-detected.html.twig' %}

    <div class=\"remodal\" data-remodal-id=\"delete\" data-remodal-options=\"hashTracking: false\">
        <form>
            <h1>{{ \"PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_TITLE\"|tu }}</h1>
            <p class=\"bigger\">
                {% if context %}
                    <strong>{{ \"PLUGIN_ADMIN.PAGE\"|tu }}: {{ context.title }}</strong>
                {% endif %}
            </p>
            <p class=\"bigger\">
              {{ \"PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_DESC\"|tu }}
            </p>
            <br>
            <div class=\"button-bar\">
            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|tu }}</button>
            <a class=\"button disable-after-click\" data-delete-action href=\"#\"><i class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</a>
            </div>
        </form>
    </div>

    {% include 'partials/admin-pro-pages-addons.html.twig' ignore missing %}

{% endblock %}
", "pages.html.twig", "/home/ubuntu/workspace/user/plugins/admin/themes/grav/templates/pages.html.twig");
    }
}
