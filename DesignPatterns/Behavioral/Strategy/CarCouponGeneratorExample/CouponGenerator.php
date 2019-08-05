<?php

namespace DesignPatterns\Behavioral\Strategy\CarCouponGeneratorExample;

use DesignPatterns\Behavioral\Strategy\CarCouponGeneratorExample\CarCouponGenerator;

class CouponGenerator {
    private $carCoupon;
    
    // Get only objects that belong to the interface.  
    public function __construct(CarCouponGenerator $carCoupon) {
        $this->carCoupon = $carCoupon;
    }
    
    // Use the object's methods to generate the coupon. 
    public function getCoupon() {
        $discount = $this->carCoupon->addSeasonDiscount();
        $discount = $this->carCoupon->addStockDiscount();
        
        return $coupon = "Get {$discount}% off the price of your new car.";
    }
}