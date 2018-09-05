<?php 

require_once('../vendor/autoload.php');

\Stripe\Stripe::setApiKey("sk_test_SAX11eb85vHPbSCpW4yrIpBE");

if(isset($_POST['submit']) && isset($_POST['amount']) && isset($_POST['connect_id']) && isset($_POST['fee']) ){

$fee = $_POST['amount'] * $_POST['fee'] / 100;

  $charge =  \Stripe\Charge::create(
    array(
      'amount' => $_POST['amount'],
      'currency' => 'usd',
      'application_fee' => $fee,
      'source' => 'tok_visa' // maybe need to change your source
    ),
    array('stripe_account' => $_POST['connect_id']) //'acct_1CzHhIDKSfSO1T37'
  );
  // echo "<pre>";
  // $charge = $charge->__toArray(true);
  // print_r($charge);
  // echo "</pre>";
  
  if($charge['paid']){
    include('success.php');
  }else{
    include('fail.php');
  }

}