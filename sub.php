<?php
require('Connection.php');

\Stripe\Stripe::setVerifySslCerts(false);
echo "hello";
// echo '<pre>';
// print_r($_POST);

$token=$_POST['stripeToken'];
$data=\Stripe\Charge::create(array(
   "amount"=>500,
   "currency=>usd",
   "description"=>"hassan talha",
   "source"=>$token,

));
echo "<pre>";
print_r($data);
?>