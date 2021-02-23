<?php

/* partials/navigation.html.twig */
class __TwigTemplate_6609a00452f6633827e288ac985d6db25cf7668b42e1dcf6ddc69a990f69c125 extends Twig_Template
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
        // line 22
        echo "
<ul ";
        // line 23
        echo ((($context["tree"] ?? null)) ? ("class=\"tree\"") : (""));
        echo ">
    ";
        // line 24
        echo $this->getAttribute($this, "nav_loop", array(0 => ($context["pages"] ?? null)), "method");
        echo "
    <!-- MN: this block shows the my account page only if the user is logged in -->
    ";
        // line 26
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "login", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "username", array()))) {
            echo " 
    <li><a href=\"/client\" class=\"";
            // line 27
            echo ($context["active_page"] ?? null);
            echo "\">
                    My Account
                </a>
    </li>
    ";
        }
        // line 32
        echo "
<!-- MN: this block shows the log in page only if the user is logged out -->
    ";
        // line 34
        if (twig_test_empty($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "fullname", array()))) {
            // line 35
            echo "    <li><a href=\"login\" class=\"";
            echo ($context["active_page"] ?? null);
            echo "\">
                    Log In
                </a>
    </li>
    ";
        }
        // line 40
        echo "
</ul>

";
    }

    // line 1
    public function getnav_loop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "        ";
                $context["active_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("active") : (""));
                // line 4
                echo "        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()), "count", array()) > 0)) {
                    // line 5
                    echo "            <li>
                <a href=\"";
                    // line 6
                    echo $this->getAttribute($context["p"], "url", array());
                    echo "\" class=\"";
                    echo ($context["active_page"] ?? null);
                    echo "\">
                    ";
                    // line 7
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "
                </a>
                <ul>
                    ";
                    // line 10
                    echo $this->getAttribute($this, "nav_loop", array(0 => $context["p"]), "method");
                    echo "
                </ul>
            </li>
        ";
                } else {
                    // line 14
                    echo "            <li>
                <a href=\"";
                    // line 15
                    echo $this->getAttribute($context["p"], "url", array());
                    echo "\" class=\"";
                    echo ($context["active_page"] ?? null);
                    echo "\">
                    ";
                    // line 16
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "
                </a>
            </li>
        ";
                }
                // line 20
                echo "    ";
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
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 20,  119 => 16,  113 => 15,  110 => 14,  103 => 10,  97 => 7,  91 => 6,  88 => 5,  85 => 4,  82 => 3,  77 => 2,  65 => 1,  58 => 40,  49 => 35,  47 => 34,  43 => 32,  35 => 27,  31 => 26,  26 => 24,  22 => 23,  19 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro nav_loop(page) %}
    {% for p in page.children.visible %}
        {% set active_page = (p.active or p.activeChild) ? 'active' : '' %}
        {% if p.children.visible.count > 0 %}
            <li>
                <a href=\"{{ p.url }}\" class=\"{{ active_page }}\">
                    {{ p.menu }}
                </a>
                <ul>
                    {{ _self.nav_loop(p) }}
                </ul>
            </li>
        {% else %}
            <li>
                <a href=\"{{ p.url }}\" class=\"{{ active_page }}\">
                    {{ p.menu }}
                </a>
            </li>
        {% endif %}
    {% endfor %}
{% endmacro %}

<ul {{ tree ? 'class=\"tree\"' : '' }}>
    {{ _self.nav_loop(pages) }}
    <!-- MN: this block shows the my account page only if the user is logged in -->
    {% if config.plugins.login.enabled and grav.user.username %} 
    <li><a href=\"/client\" class=\"{{ active_page }}\">
                    My Account
                </a>
    </li>
    {% endif %}

<!-- MN: this block shows the log in page only if the user is logged out -->
    {% if grav.user.fullname is empty %}
    <li><a href=\"login\" class=\"{{ active_page }}\">
                    Log In
                </a>
    </li>
    {% endif %}

</ul>

", "partials/navigation.html.twig", "D:\\xampp7.3\\htdocs\\chartvps\\user\\themes\\quark\\templates\\partials\\navigation.html.twig");
    }
}
