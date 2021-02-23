<?php
require_once('stripe/vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_ExTaFMBBKVklfHuCAVg8zcxr",
  "publishable_key" => "pk_test_EjMTHJoHPgCXGTfz69Ad56su"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>