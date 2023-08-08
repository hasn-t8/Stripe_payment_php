<?php
require('stripe-php-master/init.php');

$pk
="pk_test_51NV9MkHOD4RpVJrhxGHJhWAx85jkml8cMgalgepcWzbGDLVT6BwsrrBo5jxKJleEqJ3m2Rr0DrY938jLzcIEzDuK00juWigla8";
$secretkey
="sk_test_51NV9MkHOD4RpVJrhUfZlWKu4j1XLx6v5SvouLvPWl0VDvlJvP5Q0ewWRltH7vYPQFzMvB3GfkLVAS0MSdTTZDApl00pDOxfEZ9";
\Stripe\Stripe::setApiKey($secretkey);

?>