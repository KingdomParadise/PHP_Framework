<?php

/* partials/base.html.twig */
class __TwigTemplate_1b15a2f50ea093744181d10b4ee0d611e92eca2e39c556a7f654ad2d9804538f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body_classes' => array($this, 'block_body_classes'),
            'header' => array($this, 'block_header'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'hero' => array($this, 'block_hero'),
            'body' => array($this, 'block_body'),
            'messages' => array($this, 'block_messages'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["body_classes"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->bodyClassFunc(array(0 => "header-fixed", 1 => "header-animated", 2 => "header-dark", 3 => "header-transparent", 4 => "sticky-footer"));
        // line 2
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("grid-size");
        // line 3
        $context["compress"] = (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("production_mode")) ? (".min.css") : (".css"));
        // line 4
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", array()), "site", array()), "default_lang", array())));
        echo "\">
<head>
";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 38
        echo "<!-- MN -->
<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">

<script type=\"text/javascript\">function Reveal() {
  var x = document.getElementById(\"toggleMe\");
  var y = document.getElementById(\"toggleBut\");
  var z = document.getElementById(\"toggleSpan\");
  if (x.style.display === \"none\") {
    x.style.display = \"flex\";
    y.style.backgroundColor = \"#FFFFFF\";
    y.style.color = \"#444444\";
    y.style.fontSize = \"1.5rem\";
    z.innerHTML = \"All Supported Platforms\";
  } else {
    x.style.display = \"none\";
    y.style.backgroundColor = \"#3a81a4\";
    y.style.color = \"#FFFFFF\";
    z.innerHTML = \"Show All Platforms\";
    y.style.fontSize = \"1rem\";
  }
}</script>

</head>
<body id=\"top\" class=\"";
        // line 61
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\">
    <div id=\"page-wrapper\">
    ";
        // line 63
        $this->displayBlock('header', $context, $blocks);
        // line 94
        echo "
    ";
        // line 95
        $this->displayBlock('hero', $context, $blocks);
        // line 96
        echo "
        <section id=\"start\" class=\"pagebg\">
        ";
        // line 98
        $this->displayBlock('body', $context, $blocks);
        // line 108
        echo "        </section>

    </div>

";
        // line 112
        $this->displayBlock('footer', $context, $blocks);
        // line 173
        echo "
    
    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                ";
        // line 178
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 178)->display(array_merge($context, array("mobile" => true)));
        // line 179
        echo "            </div>
            <nav class=\"overlay-menu\">
                ";
        // line 181
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 181)->display(array_merge($context, array("tree" => true)));
        // line 182
        echo "            </nav>
        </div>
    </div>

";
        // line 186
        $this->displayBlock('bottom', $context, $blocks);
        // line 189
        echo "<script type=\"text/javascript\">
var myCrisp = function() {
  window.\$crisp=[];window.CRISP_WEBSITE_ID=\"efccc6c1-2ca5-45bd-bbbe-c7823a0aaf4b\";(function(){d=document;s=d.createElement(\"script\");s.src=\"https://client.crisp.chat/l.js\";s.async=1;d.getElementsByTagName(\"head\")[0].appendChild(s);})();
}
window.onload = function() {
  setTimeout(myCrisp, 3000);
}
</script>
</body>
";
    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        // line 8
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 9
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 13
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 13)->display($context);
        // line 14
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 15
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,500,700,300&amp;subset=latin-ext,latin\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"canonical\" href=\"";
        // line 17
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

    ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

";
    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 20
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => ("theme://css-compiled/spectre" . ($context["compress"] ?? null))), "method");
        // line 21
        echo "        ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("spectre.exp")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => ("theme://css-compiled/spectre-exp" . ($context["compress"] ?? null))), "method");
        }
        // line 22
        echo "        ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("spectre.icons")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => ("theme://css-compiled/spectre-icons" . ($context["compress"] ?? null))), "method");
        }
        // line 23
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => ("theme://css-compiled/theme" . ($context["compress"] ?? null))), "method");
        // line 24
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/custom.css"), "method");
        // line 25
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/chartvps.css"), "method");
        // line 26
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/line-awesome.min.css"), "method");
        // line 27
        echo "    ";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 32
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.treemenu.js", 1 => array("group" => "bottom")), "method");
        // line 33
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/site.js", 1 => array("group" => "bottom")), "method");
        // line 34
        echo "    ";
    }

    // line 61
    public function block_body_classes($context, array $blocks = array())
    {
        echo ($context["body_classes"] ?? null);
    }

    // line 63
    public function block_header($context, array $blocks = array())
    {
        // line 64
        echo "        <section id=\"header\" class=\"section\">
            <section class=\"container ";
        // line 65
        echo ($context["grid_size"] ?? null);
        echo "\">
                <nav class=\"navbar\">
                    <section class=\"navbar-section logo\">
                        ";
        // line 68
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 68)->display($context);
        // line 69
        echo "                    </section>
                    <section class=\"navbar-section\">

                        <nav class=\"dropmenu animated\">
                            ";
        // line 73
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 76
        echo "                        </nav>

                        ";
        // line 78
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "login", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "username", array()))) {
            // line 79
            echo "                            <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> ";
            $this->loadTemplate("partials/login-status.html.twig", "partials/base.html.twig", 79)->display($context);
            echo "</span>
                        ";
        }
        // line 81
        echo "
                    </section>
                </nav>
            </section>
        </section>
        <div class=\"mobile-menu\">
            <div class=\"button_container\" id=\"toggle\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </div>
        </div>
    ";
    }

    // line 73
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 74
        echo "                        ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 74)->display($context);
        // line 75
        echo "                            ";
    }

    // line 95
    public function block_hero($context, array $blocks = array())
    {
    }

    // line 98
    public function block_body($context, array $blocks = array())
    {
        // line 99
        echo "            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container ";
        // line 100
        echo ($context["grid_size"] ?? null);
        echo "\">
                    ";
        // line 101
        $this->displayBlock('messages', $context, $blocks);
        // line 104
        echo "                    ";
        $this->displayBlock('content', $context, $blocks);
        // line 105
        echo "                </section>
            </section>
        ";
    }

    // line 101
    public function block_messages($context, array $blocks = array())
    {
        // line 102
        echo "                        ";
        try {
            $this->loadTemplate("partials/messages.html.twig", "partials/base.html.twig", 102)->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 103
        echo "                    ";
    }

    // line 104
    public function block_content($context, array $blocks = array())
    {
    }

    // line 112
    public function block_footer($context, array $blocks = array())
    {
        // line 113
        echo "    <section id=\"footer\" class=\"section bg-gray\">
        <section class=\"container ";
        // line 114
        echo ($context["grid_size"] ?? null);
        echo " footsey\">
        <div class=\"wrapper-footer-top\">
  <div class=\"footer-top\">
      
    <div>
      <h4>Support</h4>
<ul class=\"contact-footer\"><li> <a href=\"/contact\"><i class=\"fas fa-envelope\"></i> Email Us</a></li><li><a href=\"#support\" onclick=\"\$crisp.push(['do', 'chat:open'])\"><i class=\"fas fa-comment-dots\"></i> Live Chat</a></li>
<li><a href=\"tel:+1-888-237-7606\"><i class=\"fas fa-phone\"></i> Call toll-free 1 (888) 237-7606</a></li>
<li><a href=\"/company#all-inclusive-support\"><i class=\"fas fa-sync-alt\"></i> All-Inclusive Support</a></li><li><a href=\"/uptime\"><i class=\"fas fa-cloud-upload-alt\"></i> 100% Uptime Guarantee</a></li></ul>
      <h4>About ChartVPS</h4>
<ul style=\"
    text-align: left;
\">
        <li style=\"
\"><a href=\"company\">The company, technology and infrastructure</a></li>
        <li><a href=\"/tour\">VPS services in trading action</a></li>
        <li><a href=\"/#trading-platforms\">Support for all trading platforms</a></li>
        <li><a href=\"/tools\">Tools included with every subscription</a></li>
        <li><a href=\"/company#data-centers\">Choice of datacenter locations</a></li>
        <li><a href=\"/affiliates\">Become an affiliate, get 5% per month</a></li>
        

      </ul>
    </div>
        <div>
      <h4>Plans</h4>
      <ul style=\"
    text-align: left;
\">      <li><a href=\"/#pricing\">Compare ChartVPS plans</a></li>
        <li><a href=\"/standard\">Standard VPS (\$35/mo)</a></li>
        <li><a href=\"/standard#x-performance\">Standard X-Performance VPS (\$45/mo)</a></li>
        <li><a href=\"/personal\">Personal VPS (\$50/mo)</a></li>
        <li><a href=\"/scalper\">Scalper VPS (\$65/mo)</a></li>
        <li><a href=\"/daytrader\">Daytrader VPS (\$80/mo)</a></li>
        <li><a href=\"/professional\">Professional VPS (\$140/mo)</a></li>
        <li><a href=\"/institutional-alpha\">Institutional Alpha (\$170/mo)</a></li>
        <li><a href=\"/institutional-prime\">Institutional Prime (\$190/mo)</a></li>
        <li><a href=\"/quant\">Quant Server (\$260/mo)</a></li>
          <li><a href=\"/server-specials\">Server Specials + Custom Builds</a></li>
<li class=\"social-bit\">
    <span>
     For latest news and service updates:<br>
    <a href=\"https://twitter.com/chartvps\" target=\"_blank\" style=\"
    margin-right: 5px;
\"><i class=\"fab fa-twitter-square\"></i>follow @chartvps</a><a href=\"https://facebook.com/chartvps\" target=\"_blank\"><i class=\"fab fa-facebook-square\"></i> like us</a>
</span>
</li>
      </ul>
    </div>
    <div class=\"risk-note\">Trading (especially futures and forex) contains substantial risk and is not for every investor. An investor could
potentially lose all or more than the initial investment. Risk capital is money that can be lost without
jeopardizing ones’ financial security or life style. Only risk capital should be used for trading and only
      those with sufficient risk capital should consider trading. </div>
  </div>
</div>
            <p>&copy;<script>document.write(new Date().getFullYear())</script> <a href=\"https://chartvps.com\">ChartVPS Technologies</a>, a Nitrode Corporation company. Please read our <a href=\"/privacy\">Privacy Policy</a>, <a href=\"/terms-of-service\">Terms of Service</a>, and <a href=\"/disclaimer\">Disclaimer / Risk Disclosure</a>.</p>
        </section>
    </section>
";
    }

    // line 186
    public function block_bottom($context, array $blocks = array())
    {
        // line 187
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(0 => "bottom"), "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  416 => 187,  413 => 186,  350 => 114,  347 => 113,  344 => 112,  339 => 104,  335 => 103,  327 => 102,  324 => 101,  318 => 105,  315 => 104,  313 => 101,  309 => 100,  306 => 99,  303 => 98,  298 => 95,  294 => 75,  291 => 74,  288 => 73,  272 => 81,  266 => 79,  264 => 78,  260 => 76,  258 => 73,  252 => 69,  250 => 68,  244 => 65,  241 => 64,  238 => 63,  232 => 61,  228 => 34,  225 => 33,  222 => 32,  219 => 31,  216 => 30,  212 => 27,  209 => 26,  206 => 25,  203 => 24,  200 => 23,  195 => 22,  190 => 21,  187 => 20,  184 => 19,  176 => 35,  174 => 30,  168 => 28,  166 => 19,  161 => 17,  156 => 15,  153 => 14,  151 => 13,  140 => 9,  137 => 8,  134 => 7,  121 => 189,  119 => 186,  113 => 182,  111 => 181,  107 => 179,  105 => 178,  98 => 173,  96 => 112,  90 => 108,  88 => 98,  84 => 96,  82 => 95,  79 => 94,  77 => 63,  72 => 61,  47 => 38,  45 => 7,  40 => 5,  37 => 4,  35 => 3,  33 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set body_classes = body_class(['header-fixed', 'header-animated', 'header-dark', 'header-transparent', 'sticky-footer']) %}
{% set grid_size = theme_var('grid-size') %}
{% set compress = theme_var('production_mode') ? '.min.css' : '.css' %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,500,700,300&amp;subset=latin-ext,latin\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {% block stylesheets %}
        {% do assets.addCss('theme://css-compiled/spectre'~compress) %}
        {% if theme_var('spectre.exp') %}{% do assets.addCss('theme://css-compiled/spectre-exp'~compress)  %}{% endif %}
        {% if theme_var('spectre.icons') %}{%  do assets.addCss('theme://css-compiled/spectre-icons'~compress) %}{% endif %}
        {% do assets.addCss('theme://css-compiled/theme'~compress) %}
        {% do assets.addCss('theme://css/custom.css') %}
        {% do assets.addCss('theme://css/chartvps.css') %}
        {% do assets.addCss('theme://css/line-awesome.min.css') %}
    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.addJs('jquery', 101) %}
        {% do assets.addJs('theme://js/jquery.treemenu.js', {group:'bottom'}) %}
        {% do assets.addJs('theme://js/site.js', {group:'bottom'}) %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head %}
<!-- MN -->
<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">

<script type=\"text/javascript\">function Reveal() {
  var x = document.getElementById(\"toggleMe\");
  var y = document.getElementById(\"toggleBut\");
  var z = document.getElementById(\"toggleSpan\");
  if (x.style.display === \"none\") {
    x.style.display = \"flex\";
    y.style.backgroundColor = \"#FFFFFF\";
    y.style.color = \"#444444\";
    y.style.fontSize = \"1.5rem\";
    z.innerHTML = \"All Supported Platforms\";
  } else {
    x.style.display = \"none\";
    y.style.backgroundColor = \"#3a81a4\";
    y.style.color = \"#FFFFFF\";
    z.innerHTML = \"Show All Platforms\";
    y.style.fontSize = \"1rem\";
  }
}</script>

</head>
<body id=\"top\" class=\"{% block body_classes %}{{ body_classes }}{% endblock %}\">
    <div id=\"page-wrapper\">
    {% block header %}
        <section id=\"header\" class=\"section\">
            <section class=\"container {{ grid_size }}\">
                <nav class=\"navbar\">
                    <section class=\"navbar-section logo\">
                        {% include 'partials/logo.html.twig' %}
                    </section>
                    <section class=\"navbar-section\">

                        <nav class=\"dropmenu animated\">
                            {% block header_navigation %}
                        {% include 'partials/navigation.html.twig' %}
                            {% endblock %}
                        </nav>

                        {% if config.plugins.login.enabled and grav.user.username %}
                            <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> {% include 'partials/login-status.html.twig' %}</span>
                        {% endif %}

                    </section>
                </nav>
            </section>
        </section>
        <div class=\"mobile-menu\">
            <div class=\"button_container\" id=\"toggle\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </div>
        </div>
    {% endblock %}

    {% block hero %}{% endblock %}

        <section id=\"start\" class=\"pagebg\">
        {% block body %}
            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container {{ grid_size }}\">
                    {% block messages %}
                        {% include 'partials/messages.html.twig' ignore missing %}
                    {% endblock %}
                    {% block content %}{% endblock %}
                </section>
            </section>
        {% endblock %}
        </section>

    </div>

{% block footer %}
    <section id=\"footer\" class=\"section bg-gray\">
        <section class=\"container {{ grid_size }} footsey\">
        <div class=\"wrapper-footer-top\">
  <div class=\"footer-top\">
      
    <div>
      <h4>Support</h4>
<ul class=\"contact-footer\"><li> <a href=\"/contact\"><i class=\"fas fa-envelope\"></i> Email Us</a></li><li><a href=\"#support\" onclick=\"\$crisp.push(['do', 'chat:open'])\"><i class=\"fas fa-comment-dots\"></i> Live Chat</a></li>
<li><a href=\"tel:+1-888-237-7606\"><i class=\"fas fa-phone\"></i> Call toll-free 1 (888) 237-7606</a></li>
<li><a href=\"/company#all-inclusive-support\"><i class=\"fas fa-sync-alt\"></i> All-Inclusive Support</a></li><li><a href=\"/uptime\"><i class=\"fas fa-cloud-upload-alt\"></i> 100% Uptime Guarantee</a></li></ul>
      <h4>About ChartVPS</h4>
<ul style=\"
    text-align: left;
\">
        <li style=\"
\"><a href=\"company\">The company, technology and infrastructure</a></li>
        <li><a href=\"/tour\">VPS services in trading action</a></li>
        <li><a href=\"/#trading-platforms\">Support for all trading platforms</a></li>
        <li><a href=\"/tools\">Tools included with every subscription</a></li>
        <li><a href=\"/company#data-centers\">Choice of datacenter locations</a></li>
        <li><a href=\"/affiliates\">Become an affiliate, get 5% per month</a></li>
        

      </ul>
    </div>
        <div>
      <h4>Plans</h4>
      <ul style=\"
    text-align: left;
\">      <li><a href=\"/#pricing\">Compare ChartVPS plans</a></li>
        <li><a href=\"/standard\">Standard VPS (\$35/mo)</a></li>
        <li><a href=\"/standard#x-performance\">Standard X-Performance VPS (\$45/mo)</a></li>
        <li><a href=\"/personal\">Personal VPS (\$50/mo)</a></li>
        <li><a href=\"/scalper\">Scalper VPS (\$65/mo)</a></li>
        <li><a href=\"/daytrader\">Daytrader VPS (\$80/mo)</a></li>
        <li><a href=\"/professional\">Professional VPS (\$140/mo)</a></li>
        <li><a href=\"/institutional-alpha\">Institutional Alpha (\$170/mo)</a></li>
        <li><a href=\"/institutional-prime\">Institutional Prime (\$190/mo)</a></li>
        <li><a href=\"/quant\">Quant Server (\$260/mo)</a></li>
          <li><a href=\"/server-specials\">Server Specials + Custom Builds</a></li>
<li class=\"social-bit\">
    <span>
     For latest news and service updates:<br>
    <a href=\"https://twitter.com/chartvps\" target=\"_blank\" style=\"
    margin-right: 5px;
\"><i class=\"fab fa-twitter-square\"></i>follow @chartvps</a><a href=\"https://facebook.com/chartvps\" target=\"_blank\"><i class=\"fab fa-facebook-square\"></i> like us</a>
</span>
</li>
      </ul>
    </div>
    <div class=\"risk-note\">Trading (especially futures and forex) contains substantial risk and is not for every investor. An investor could
potentially lose all or more than the initial investment. Risk capital is money that can be lost without
jeopardizing ones’ financial security or life style. Only risk capital should be used for trading and only
      those with sufficient risk capital should consider trading. </div>
  </div>
</div>
            <p>&copy;<script>document.write(new Date().getFullYear())</script> <a href=\"https://chartvps.com\">ChartVPS Technologies</a>, a Nitrode Corporation company. Please read our <a href=\"/privacy\">Privacy Policy</a>, <a href=\"/terms-of-service\">Terms of Service</a>, and <a href=\"/disclaimer\">Disclaimer / Risk Disclosure</a>.</p>
        </section>
    </section>
{% endblock %}

    
    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                {% include 'partials/logo.html.twig' with {mobile: true} %}
            </div>
            <nav class=\"overlay-menu\">
                {% include 'partials/navigation.html.twig' with {tree: true} %}
            </nav>
        </div>
    </div>

{% block bottom %}
    {{ assets.js('bottom') }}
{% endblock %}
<script type=\"text/javascript\">
var myCrisp = function() {
  window.\$crisp=[];window.CRISP_WEBSITE_ID=\"efccc6c1-2ca5-45bd-bbbe-c7823a0aaf4b\";(function(){d=document;s=d.createElement(\"script\");s.src=\"https://client.crisp.chat/l.js\";s.async=1;d.getElementsByTagName(\"head\")[0].appendChild(s);})();
}
window.onload = function() {
  setTimeout(myCrisp, 3000);
}
</script>
</body>
", "partials/base.html.twig", "D:\\xampp7.3\\htdocs\\chartvps\\user\\themes\\quark\\templates\\partials\\base.html.twig");
    }
}
