---
title: 'My Account'
visible: false
body_classes: 'user-details'
---

{% if grav.user.fullname %}

<script>
function copyToClipboard(element) {
 var $temp = $("<input>");
 $("body").append($temp);
 $temp.val($(element).html()).select();
 document.execCommand("copy");
 $temp.remove();
}
</script>
<div class="logout-bit"><a class="logout" href="{{ uri.addNonce((base_url_relative ~ uri.path)|trim('/') ~ '/task' ~ config.system.param_sep ~ 'login.logout', 'logout-form', 'logout-nonce')|e }}" >{{ 'PLUGIN_LOGIN.BTN_LOGOUT'|t }}</a></div>
<h2>{{ grav.user.firstname }}'s Profile</h2>
<h5>Client Information</h5>

Full Name<br /><span>{{ grav.user.fullname }}</span>

Email<br /><span>{{ grav.user.email }}</span>

Plan<br /><span>{{ grav.user.userplan }} (<a href="support">Change/Cancel</a>)</span>

Cost<br /><span>${{ grav.user.usercost }}, recurs {{ grav.user.planrenew }}</span>

{% if grav.user.datacenter %}
Data Center<br /><span>{{ grav.user.datacenter }}</span>
{% endif %}
<h5><br />Server Log-in Credentials</h5>
<p class="display-none"></p>
Computer Name/IP Address<br /><button onclick="copyToClipboard('#ip-address')" tooltip="copy IP address to clipboard" tooltip-position="top"><i class="fas fa-copy"></i></button><span id="ip-address">{{ grav.user.planIP }}</span>

Username<br /><button onclick="copyToClipboard('#user-name')" tooltip="copy Username to clipboard" tooltip-position="top"><i class="fas fa-copy"></i></button><span id="user-name">{{ grav.user.planuser }}</span>

Password<br /><button onclick="copyToClipboard('#pass-word')" tooltip="copy Password to clipboard" tooltip-position="top"><i class="fas fa-copy"></i></button><span id="pass-word">{{ grav.user.planpassword }}</span>

<div class="log-on-instructions"><strong>Connecting to your server</strong><br><br><strong>Windows:</strong> Use the built-in Remote Desktop app (click on Start, search for Remote Desktop)<br><br>
    <strong>Mac OS:</strong> Download and install the Remote Desktop app via <strong><a href="https://itunes.apple.com/ca/app/microsoft-remote-desktop/id715768417?mt=12">app store page</a></strong><br><br><strong>iOS (iPhone/iPad):</strong> Download and install the Remote Desktop app via  <strong><a href="https://itunes.apple.com/ca/app/microsoft-remote-desktop/id714464092">app store page</a></strong><br><br><strong>Android:</strong> Download and install the Remote Desktop app via <strong><a href="https://play.google.com/store/apps/details?id=com.microsoft.rdc.android">Google Play page</a></strong><br><br><strong>Browser:</strong> If you don't have access to a Remote Desktop app, we offer the Web Remote Desktop (see button below) that you can use to access your server via any modern browser</div>


{% if grav.user.affiliateclients is not empty%}
<h5><br />Affiliate Information</h5>
<p class="display-none"></p>
Referred Monthly Clients<br /><span>{{ grav.user.affiliateclients }}</span>

Estimated Monthly Commission<br /><span>${{ grav.user.affiliateincome }}</span>
{% endif %}

<div class="logout-bit client-actions"><div><a class="logout" href="tools">Trader's Toolbox
</a></div><div><a class="logout" href="http://{{ grav.user.planIP }}:8000" target="_blank">Web Remote Desktop</a></div><div><a class="logout" href="support">Change/Cancel Plan</a></div>{% if grav.user.affiliateclients is empty %}<div><a class="logout" href="affiliates">Become an Affiliate
</a></div>{% endif %}</div>

{% endif %}

{% if grav.user.fullname is empty %}

<a href="login">log in</a> to see content

{% endif %}