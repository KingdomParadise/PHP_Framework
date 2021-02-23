<?php

/* @Page:D:/xampp7.3/htdocs/chartvps/user/pages/05.client */
class __TwigTemplate_7fa20c6c8d4f8ecf08eaa6b007a8cd75c4c9a79851b6154e7bbfab227b503b79 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "fullname", array())) {
            // line 2
            echo "<script>
function copyToClipboard(element) {
 var \$temp = \$(\"<input>\");
 \$(\"body\").append(\$temp);
 \$temp.val(\$(element).html()).select();
 document.execCommand(\"copy\");
 \$temp.remove();
}
</script>
<div class=\"logout-bit\"><a class=\"logout\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((twig_trim_filter((($context["base_url_relative"] ?? null) . $this->getAttribute(($context["uri"] ?? null), "path", array())), "/") . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "login.logout"), 1 => "logout-form", 2 => "logout-nonce"), "method"));
            echo "\" >";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_LOGIN.BTN_LOGOUT");
            echo "</a></div>
<h2>";
            // line 12
            echo $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "firstname", array());
            echo "'s Profile</h2>
<h5>Client Information</h5>
<p>Full Name<br /><span>";
            // line 14
            echo $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "fullname", array());
            echo "</span></p>
<p>Email<br /><span>";
            // line 15
            echo $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "email", array());
            echo "</span></p>
<p>Plan<br /><span>";
            // line 16
            echo $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "userplan", array());
            echo " (<a href=\"support\">Change/Cancel</a>)</span></p>
<p>Cost<br /><span>\$";
            // line 17
            echo $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "usercost", array());
            echo ", recurs ";
            echo $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "planrenew", array());
            echo "</span></p>
";
            // line 18
            if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "datacenter", array())) {
                // line 19
                echo "<p>Data Center<br /><span>";
                echo $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "datacenter", array());
                echo "</span></p>
";
            }
            // line 21
            echo "<h5><br />Server Log-in Credentials</h5>
<p class=\"display-none\"></p>
<p>Computer Name/IP Address<br /><button onclick=\"copyToClipboard('#ip-address')\" tooltip=\"copy IP address to clipboard\" tooltip-position=\"top\"><i class=\"fas fa-copy\"></i></button><span id=\"ip-address\">";
            // line 23
            echo $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "planIP", array());
            echo "</span></p>
<p>Username<br /><button onclick=\"copyToClipboard('#user-name')\" tooltip=\"copy Username to clipboard\" tooltip-position=\"top\"><i class=\"fas fa-copy\"></i></button><span id=\"user-name\">";
            // line 24
            echo $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "planuser", array());
            echo "</span></p>
<p>Password<br /><button onclick=\"copyToClipboard('#pass-word')\" tooltip=\"copy Password to clipboard\" tooltip-position=\"top\"><i class=\"fas fa-copy\"></i></button><span id=\"pass-word\">";
            // line 25
            echo $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "planpassword", array());
            echo "</span></p>
<div class=\"log-on-instructions\"><strong>Connecting to your server</strong><br><br><strong>Windows:</strong> Use the built-in Remote Desktop app (click on Start, search for Remote Desktop)<br><br>
    <strong>Mac OS:</strong> Download and install the Remote Desktop app via <strong><a href=\"https://itunes.apple.com/ca/app/microsoft-remote-desktop/id715768417?mt=12\">app store page</a></strong><br><br><strong>iOS (iPhone/iPad):</strong> Download and install the Remote Desktop app via  <strong><a href=\"https://itunes.apple.com/ca/app/microsoft-remote-desktop/id714464092\">app store page</a></strong><br><br><strong>Android:</strong> Download and install the Remote Desktop app via <strong><a href=\"https://play.google.com/store/apps/details?id=com.microsoft.rdc.android\">Google Play page</a></strong><br><br><strong>Browser:</strong> If you don't have access to a Remote Desktop app, we offer the Web Remote Desktop (see button below) that you can use to access your server via any modern browser</div>
";
            // line 28
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "affiliateclients", array()))) {
                // line 29
                echo "<h5><br />Affiliate Information</h5>
<p class=\"display-none\"></p>
<p>Referred Monthly Clients<br /><span>";
                // line 31
                echo $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "affiliateclients", array());
                echo "</span></p>
<p>Estimated Monthly Commission<br /><span>\$";
                // line 32
                echo $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "affiliateincome", array());
                echo "</span></p>
";
            }
            // line 34
            echo "<div class=\"logout-bit client-actions\"><div><a class=\"logout\" href=\"tools\">Trader's Toolbox
</a></div><div><a class=\"logout\" href=\"http://";
            // line 35
            echo $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "planIP", array());
            echo ":8000\" target=\"_blank\">Web Remote Desktop</a></div><div><a class=\"logout\" href=\"support\">Change/Cancel Plan</a></div>";
            if (twig_test_empty($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "affiliateclients", array()))) {
                echo "<div><a class=\"logout\" href=\"affiliates\">Become an Affiliate
</a></div>";
            }
            // line 36
            echo "</div>
";
        }
        // line 38
        if (twig_test_empty($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "fullname", array()))) {
            // line 39
            echo "<p><a href=\"login\">log in</a> to see content</p>
";
        }
    }

    public function getTemplateName()
    {
        return "@Page:D:/xampp7.3/htdocs/chartvps/user/pages/05.client";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 39,  116 => 38,  112 => 36,  105 => 35,  102 => 34,  97 => 32,  93 => 31,  89 => 29,  87 => 28,  81 => 25,  77 => 24,  73 => 23,  69 => 21,  63 => 19,  61 => 18,  55 => 17,  51 => 16,  47 => 15,  43 => 14,  38 => 12,  32 => 11,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if grav.user.fullname %}
<script>
function copyToClipboard(element) {
 var \$temp = \$(\"<input>\");
 \$(\"body\").append(\$temp);
 \$temp.val(\$(element).html()).select();
 document.execCommand(\"copy\");
 \$temp.remove();
}
</script>
<div class=\"logout-bit\"><a class=\"logout\" href=\"{{ uri.addNonce((base_url_relative ~ uri.path)|trim('/') ~ '/task' ~ config.system.param_sep ~ 'login.logout', 'logout-form', 'logout-nonce')|e }}\" >{{ 'PLUGIN_LOGIN.BTN_LOGOUT'|t }}</a></div>
<h2>{{ grav.user.firstname }}'s Profile</h2>
<h5>Client Information</h5>
<p>Full Name<br /><span>{{ grav.user.fullname }}</span></p>
<p>Email<br /><span>{{ grav.user.email }}</span></p>
<p>Plan<br /><span>{{ grav.user.userplan }} (<a href=\"support\">Change/Cancel</a>)</span></p>
<p>Cost<br /><span>\${{ grav.user.usercost }}, recurs {{ grav.user.planrenew }}</span></p>
{% if grav.user.datacenter %}
<p>Data Center<br /><span>{{ grav.user.datacenter }}</span></p>
{% endif %}
<h5><br />Server Log-in Credentials</h5>
<p class=\"display-none\"></p>
<p>Computer Name/IP Address<br /><button onclick=\"copyToClipboard('#ip-address')\" tooltip=\"copy IP address to clipboard\" tooltip-position=\"top\"><i class=\"fas fa-copy\"></i></button><span id=\"ip-address\">{{ grav.user.planIP }}</span></p>
<p>Username<br /><button onclick=\"copyToClipboard('#user-name')\" tooltip=\"copy Username to clipboard\" tooltip-position=\"top\"><i class=\"fas fa-copy\"></i></button><span id=\"user-name\">{{ grav.user.planuser }}</span></p>
<p>Password<br /><button onclick=\"copyToClipboard('#pass-word')\" tooltip=\"copy Password to clipboard\" tooltip-position=\"top\"><i class=\"fas fa-copy\"></i></button><span id=\"pass-word\">{{ grav.user.planpassword }}</span></p>
<div class=\"log-on-instructions\"><strong>Connecting to your server</strong><br><br><strong>Windows:</strong> Use the built-in Remote Desktop app (click on Start, search for Remote Desktop)<br><br>
    <strong>Mac OS:</strong> Download and install the Remote Desktop app via <strong><a href=\"https://itunes.apple.com/ca/app/microsoft-remote-desktop/id715768417?mt=12\">app store page</a></strong><br><br><strong>iOS (iPhone/iPad):</strong> Download and install the Remote Desktop app via  <strong><a href=\"https://itunes.apple.com/ca/app/microsoft-remote-desktop/id714464092\">app store page</a></strong><br><br><strong>Android:</strong> Download and install the Remote Desktop app via <strong><a href=\"https://play.google.com/store/apps/details?id=com.microsoft.rdc.android\">Google Play page</a></strong><br><br><strong>Browser:</strong> If you don't have access to a Remote Desktop app, we offer the Web Remote Desktop (see button below) that you can use to access your server via any modern browser</div>
{% if grav.user.affiliateclients is not empty%}
<h5><br />Affiliate Information</h5>
<p class=\"display-none\"></p>
<p>Referred Monthly Clients<br /><span>{{ grav.user.affiliateclients }}</span></p>
<p>Estimated Monthly Commission<br /><span>\${{ grav.user.affiliateincome }}</span></p>
{% endif %}
<div class=\"logout-bit client-actions\"><div><a class=\"logout\" href=\"tools\">Trader's Toolbox
</a></div><div><a class=\"logout\" href=\"http://{{ grav.user.planIP }}:8000\" target=\"_blank\">Web Remote Desktop</a></div><div><a class=\"logout\" href=\"support\">Change/Cancel Plan</a></div>{% if grav.user.affiliateclients is empty %}<div><a class=\"logout\" href=\"affiliates\">Become an Affiliate
</a></div>{% endif %}</div>
{% endif %}
{% if grav.user.fullname is empty %}
<p><a href=\"login\">log in</a> to see content</p>
{% endif %}", "@Page:D:/xampp7.3/htdocs/chartvps/user/pages/05.client", "");
    }
}
