<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_kGMbzN5HLz1CboaKsow03Qsp",
  "publishable_key" => "pk_test_dkadOuCOjk2M8wBCI9iXK3FJ"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>
