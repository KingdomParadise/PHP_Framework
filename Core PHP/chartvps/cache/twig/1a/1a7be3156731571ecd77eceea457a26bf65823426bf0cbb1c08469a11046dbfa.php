<?php

/* @Page:D:/xampp7.3/htdocs/chartvps/user/pages/11.personal/01._hero */
class __TwigTemplate_03dbe04da23c84c3e0d3d10295b4d3fb1a6f53f0976fc1ba26cce5a2894e0265 extends Twig_Template
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
        echo "
<section id=\"\" class=\"section modular-hero hero parallax text-light plan-details \" style=\"background-image: url(/chartvps/user/pages/11.personal/01._hero/chartvps-data-center.jpg);\">
    <div class=\"image-overlay\"></div>
    <section class=\"container grid-lg\" style=\"text-align: center\">
        <div class=\"intro-wrapper\">
  <div class=\"intro\">
    <h1>Personal VPS</h1>
    <h2>trade up to 40 charts</h2>
</div>
</div>
    </section>
</section>";
    }

    public function getTemplateName()
    {
        return "@Page:D:/xampp7.3/htdocs/chartvps/user/pages/11.personal/01._hero";
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
        return new Twig_Source("
<section id=\"\" class=\"section modular-hero hero parallax text-light plan-details \" style=\"background-image: url(/chartvps/user/pages/11.personal/01._hero/chartvps-data-center.jpg);\">
    <div class=\"image-overlay\"></div>
    <section class=\"container grid-lg\" style=\"text-align: center\">
        <div class=\"intro-wrapper\">
  <div class=\"intro\">
    <h1>Personal VPS</h1>
    <h2>trade up to 40 charts</h2>
</div>
</div>
    </section>
</section>", "@Page:D:/xampp7.3/htdocs/chartvps/user/pages/11.personal/01._hero", "");
    }
}
