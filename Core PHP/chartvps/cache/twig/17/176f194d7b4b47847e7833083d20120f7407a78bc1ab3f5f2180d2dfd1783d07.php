<?php

/* login.html.twig */
class __TwigTemplate_fc8df728cfd10ff9fa6d74b17de61682bac53ca66d03048d74325c6d1bb50d33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "login.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->loadTemplate("partials/messages.html.twig", "login.html.twig", 4)->display($context);
        // line 5
        echo "    ";
        $this->loadTemplate("partials/login-form.html.twig", "login.html.twig", 5)->display($context);
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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

{% block content %}
    {% include 'partials/messages.html.twig' %}
    {% include 'partials/login-form.html.twig' %}
{% endblock %}
", "login.html.twig", "D:\\xampp7.3\\htdocs\\chartvps\\user\\plugins\\login\\templates\\login.html.twig");
    }
}
