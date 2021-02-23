<?php

/* partials/login-form.html.twig */
class __TwigTemplate_1dbbe3a6dca8fddac68056094036b8e112122cd758a0e8ee6ac690f634c1fc3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<section id=\"grav-login\">

    ";
        // line 3
        if ((($this->getAttribute(($context["page"] ?? null), "template", array()) == "login") || ($context["show_login_form"] ?? null))) {
            // line 4
            echo "        ";
            $context["user"] = $this->getAttribute(($context["grav"] ?? null), "user", array());
            // line 5
            echo "        ";
            if (($this->getAttribute(($context["user"] ?? null), "authenticated", array()) && $this->getAttribute(($context["user"] ?? null), "authorized", array()))) {
                // line 6
                echo "            <h4>";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_LOGIN.WELCOME");
                echo " <strong>";
                echo (($this->getAttribute(($context["user"] ?? null), "fullname", array())) ? ($this->getAttribute(($context["user"] ?? null), "fullname", array())) : ($this->getAttribute(($context["user"] ?? null), "username", array())));
                echo "</strong></h4>
            <hr>
            <a class=\"button logout\" href=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => ((((($context["base_url_relative"] ?? null) . $this->getAttribute(($context["uri"] ?? null), "path", array())) . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "login.logout"), 1 => "logout-form", 2 => "logout-nonce"), "method"));
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_LOGIN.BTN_LOGOUT");
                echo "</a>

        ";
            } elseif (($this->getAttribute(            // line 10
($context["user"] ?? null), "authenticated", array()) && $this->getAttribute(($context["user"] ?? null), "twofa_enabled", array()))) {
                // line 11
                echo "            ";
                $this->loadTemplate("partials/login-twofa.html.twig", "partials/login-form.html.twig", 11)->display($context);
                // line 12
                echo "
        ";
            } else {
                // line 14
                echo "            ";
                echo ($context["content"] ?? null);
                echo "

            ";
                // line 17
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "login", array()), "getProviderLoginTemplates", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
                    // line 18
                    echo "                ";
                    $this->loadTemplate($context["template"], "partials/login-form.html.twig", 18)->display($context);
                    // line 19
                    echo "            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "
            <form method=\"post\" action=\"";
                // line 21
                echo twig_escape_filter($this->env, (($context["base_url_relative"] ?? null) . $this->getAttribute(($context["uri"] ?? null), "path", array())));
                echo "\" class=\"";
                echo ($context["form_outer_classes"] ?? null);
                echo "\">        

                ";
                // line 24
                echo "                ";
                if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "plugins_hooked_loginPage", array())) {
                    // line 25
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "plugins_hooked_loginPage", array()));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                        // line 26
                        echo "                        ";
                        $this->loadTemplate($context["label"], "partials/login-form.html.twig", 26)->display($context);
                        // line 27
                        echo "                    ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 28
                    echo "                ";
                }
                // line 29
                echo "
                ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 31
                    echo "                    ";
                    $context["value"] = ((($this->getAttribute($context["field"], "name", array()) == "username")) ? (($context["username"] ?? null)) : (""));
                    // line 32
                    echo "                    ";
                    if ($this->getAttribute($context["field"], "type", array())) {
                        // line 33
                        echo "                        ";
                        $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "partials/login-form.html.twig", 33)->display($context);
                        // line 34
                        echo "                    ";
                    }
                    // line 35
                    echo "                ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "
                <div class=\"";
                // line 37
                echo ((($context["form_button_outer_classes"] ?? null)) ? (($context["form_button_outer_classes"] ?? null)) : ("form-actions secondary-accent"));
                echo "\">
                    ";
                // line 38
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "login", array()), "rememberme", array()), "enabled", array()) && ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "form", array(), "any", false, true), "login", array(), "any", false, true), "rememberme", array(), "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "form", array(), "any", false, true), "login", array(), "any", false, true), "rememberme", array())))) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "form", array(), "any", false, true), "login", array(), "any", false, true), "rememberme", array())) : (true)))) {
                    // line 39
                    echo "                        <div class=\"form-data rememberme\" data-grav-default=\"null\" data-grav-disabled=\"true\" data-grav-field=\"checkbox\">
                            <div class=\"form-input-wrapper\">
                                <input type=\"checkbox\" value=\"1\" name=\"rememberme\" id=\"#rememberme\">
                                <label class=\"inline\" for=\"#rememberme\" title=\"";
                    // line 42
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_LOGIN.REMEMBER_ME_HELP");
                    echo "\">";
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_LOGIN.REMEMBER_ME");
                    echo "</label>
                            </div>
                        </div>
                    ";
                }
                // line 46
                echo "
                    ";
                // line 47
                if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "form", array(), "any", false, true), "login", array(), "any", false, true), "forgot_button", array(), "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "form", array(), "any", false, true), "login", array(), "any", false, true), "forgot_button", array())))) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "form", array(), "any", false, true), "login", array(), "any", false, true), "forgot_button", array())) : (true))) {
                    // line 48
                    echo "                    <a class=\"";
                    echo ((($context["form_button_classes"] ?? null)) ? (($context["form_button_classes"] ?? null)) : ("button secondary"));
                    echo "\" href=\"";
                    echo ($context["base_url_relative"] ?? null);
                    echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "login", array()), "route_forgot", array());
                    echo "\"><i class=\"fa fa-exclamation-circle\"></i> ";
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_LOGIN.BTN_FORGOT");
                    echo "</a>
                    ";
                }
                // line 50
                echo "
                    <button class=\"";
                // line 51
                echo ((($context["form_button_classes"] ?? null)) ? (($context["form_button_classes"] ?? null)) : ("button primary"));
                echo "\" type=\"submit\"  name=\"task\" value=\"login.login\"><i class=\"fas fa-sign-in-alt\"></i> ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_LOGIN.BTN_LOGIN");
                echo "</button>
                </div>

                ";
                // line 54
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("login-form", "login-form-nonce");
                echo "
            </form>

        ";
            }
            // line 58
            echo "
    ";
        }
        // line 60
        echo "
</section>";
    }

    public function getTemplateName()
    {
        return "partials/login-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 60,  250 => 58,  243 => 54,  235 => 51,  232 => 50,  221 => 48,  219 => 47,  216 => 46,  207 => 42,  202 => 39,  200 => 38,  196 => 37,  193 => 36,  179 => 35,  176 => 34,  173 => 33,  170 => 32,  167 => 31,  150 => 30,  147 => 29,  144 => 28,  130 => 27,  127 => 26,  109 => 25,  106 => 24,  99 => 21,  96 => 20,  82 => 19,  79 => 18,  61 => 17,  55 => 14,  51 => 12,  48 => 11,  46 => 10,  39 => 8,  31 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"grav-login\">

    {% if page.template == 'login' or show_login_form %}
        {% set user = grav.user %}
        {% if user.authenticated and user.authorized %}
            <h4>{{ 'PLUGIN_LOGIN.WELCOME'|t }} <strong>{{ user.fullname ?: user.username }}</strong></h4>
            <hr>
            <a class=\"button logout\" href=\"{{ uri.addNonce(base_url_relative ~ uri.path ~ '/task' ~ config.system.param_sep ~ 'login.logout', 'logout-form', 'logout-nonce')|e }}\">{{ 'PLUGIN_LOGIN.BTN_LOGOUT'|t }}</a>

        {% elseif user.authenticated and user.twofa_enabled %}
            {% include 'partials/login-twofa.html.twig' %}

        {% else %}
            {{ content|raw }}

            {# NEW WAY OF INCLUDING 3RD PARTY LOGIN OPTIONS #}
            {% for template in grav.login.getProviderLoginTemplates %}
                {% include template %}
            {% endfor %}

            <form method=\"post\" action=\"{{ (base_url_relative ~ uri.path)|e }}\" class=\"{{ form_outer_classes }}\">        

                {# OLD WAY OF INCLUDING 3RD PARTY LOGIN OPTIONS #}
                {% if grav.twig.plugins_hooked_loginPage %}
                    {% for label in grav.twig.plugins_hooked_loginPage %}
                        {% include label %}
                    {% endfor %}
                {% endif %}

                {% for field in form.fields %}
                    {% set value = field.name == 'username' ? username : '' %}
                    {% if field.type %}
                        {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
                    {% endif %}
                {% endfor %}

                <div class=\"{{ form_button_outer_classes ?: 'form-actions secondary-accent' }}\">
                    {% if config.plugins.login.rememberme.enabled and page.header.form.login.rememberme ?? true %}
                        <div class=\"form-data rememberme\" data-grav-default=\"null\" data-grav-disabled=\"true\" data-grav-field=\"checkbox\">
                            <div class=\"form-input-wrapper\">
                                <input type=\"checkbox\" value=\"1\" name=\"rememberme\" id=\"#rememberme\">
                                <label class=\"inline\" for=\"#rememberme\" title=\"{{ 'PLUGIN_LOGIN.REMEMBER_ME_HELP'|t }}\">{{ 'PLUGIN_LOGIN.REMEMBER_ME'|t }}</label>
                            </div>
                        </div>
                    {% endif %}

                    {% if page.header.form.login.forgot_button ?? true %}
                    <a class=\"{{ form_button_classes ?: 'button secondary' }}\" href=\"{{ base_url_relative }}{{ config.plugins.login.route_forgot }}\"><i class=\"fa fa-exclamation-circle\"></i> {{ 'PLUGIN_LOGIN.BTN_FORGOT'|t }}</a>
                    {% endif %}

                    <button class=\"{{ form_button_classes ?: 'button primary' }}\" type=\"submit\"  name=\"task\" value=\"login.login\"><i class=\"fas fa-sign-in-alt\"></i> {{ 'PLUGIN_LOGIN.BTN_LOGIN'|t }}</button>
                </div>

                {{ nonce_field('login-form', 'login-form-nonce')|raw }}
            </form>

        {% endif %}

    {% endif %}

</section>", "partials/login-form.html.twig", "D:\\xampp7.3\\htdocs\\chartvps\\user\\plugins\\login\\templates\\partials\\login-form.html.twig");
    }
}
