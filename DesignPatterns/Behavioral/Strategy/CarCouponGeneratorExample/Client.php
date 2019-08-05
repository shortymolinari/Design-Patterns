<?php

namespace DesignPatterns\Behavioral\Strategy\CarCouponGeneratorExample;

require "../../../../vendor/autoload.php";

use DesignPatterns\Behavioral\Strategy\CarCouponGeneratorExample\CouponGenerator;
use DesignPatterns\Behavioral\Strategy\CarCouponGeneratorExample\BmwCouponGenerator;
use DesignPatterns\Behavioral\Strategy\CarCouponGeneratorExample\MercedesCouponGenerator;


function couponObjectGenerator($car) {

    switch ($car) {
        case "bmw": return new BmwCouponGenerator;
        case "mercedes": return new MercedesCouponGenerator;
    }
}

$car = "bmw";
$carObj = couponObjectGenerator($car);
$couponGenerator = new CouponGenerator($carObj);
echo $couponGenerator->getCoupon(); //. PHP_EOL
  
//echo "\n";
    
$car = "mercedes";
$carObj = couponObjectGenerator($car);
$couponGenerator = new CouponGenerator($carObj);
echo $couponGenerator->getCoupon();