<?php 

require_once('vendor/autoload.php');

\Stripe\Stripe::setApiKey("sk_test_SAX11eb85vHPbSCpW4yrIpBE");

// Create a Charge:
/*$charge = \Stripe\Charge::create(array(
  "amount" => 10,
  "currency" => "usd",
  "source" => "tok_visa",
  "transfer_group" => "{ORDER10}",
));

// Create a Transfer to a connected account (later):
$transfer = \Stripe\Transfer::create(array(
  "amount" => '0.17',
  "currency" => "usd",
  "destination" => "acct_1CzHhIDKSfSO1T37",
  "transfer_group" => "{ORDER10}",
));

// // Create a second Transfer to another connected account (later):
// $transfer = \Stripe\Transfer::create(array(
//   "amount" => 2000,
//   "currency" => "usd",
//   "destination" => "tok_189fqt2eZvKYlo2CTGBeg6Ue",
//   "transfer_group" => "{ORDER10}",
// ));*/


$charge =  \Stripe\Charge::create(
  array(
    'amount' => 1000,
    'currency' => 'usd',
    'application_fee' => 100,
    'source' => 'tok_visa'
  ),
  array('stripe_account' => 'acct_1CzHhIDKSfSO1T37')
);

print_r($charge);