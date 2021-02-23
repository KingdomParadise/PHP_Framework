<?php

/* @Page:D:\xampp7.3\htdocs\chartvps\user\plugins\login/pages */
class __TwigTemplate_677ed28ef2dfb61a57eafaf7351c89e863302fa5d5440ecf3721a15770b83124 extends Twig_Template
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
        echo "<h1>Welcome</h1>";
    }

    public function getTemplateName()
    {
        return "@Page:D:\\xampp7.3\\htdocs\\chartvps\\user\\plugins\\login/pages";
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
        return new Twig_Source("<h1>Welcome</h1>", "@Page:D:\\xampp7.3\\htdocs\\chartvps\\user\\plugins\\login/pages", "");
    }
}
