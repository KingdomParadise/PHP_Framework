<?php

/* @Page:D:\xampp7.3\htdocs\chartvps\user\plugins\error/pages */
class __TwigTemplate_1b7a573c08e6bbb3de390e0f3fbb9c87d481f81b3680b0908b80348c5ef0ee9d extends Twig_Template
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
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_ERROR.ERROR_MESSAGE");
    }

    public function getTemplateName()
    {
        return "@Page:D:\\xampp7.3\\htdocs\\chartvps\\user\\plugins\\error/pages";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ 'PLUGIN_ERROR.ERROR_MESSAGE'|t }}", "@Page:D:\\xampp7.3\\htdocs\\chartvps\\user\\plugins\\error/pages", "");
    }
}
