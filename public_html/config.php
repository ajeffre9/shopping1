<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_PnEIQV00rQ5jjyrndkHmVg7h",
  "publishable_key" => "pk_test_LyY79UgsDxLQJJCzwwMEz3Ik"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
