<?php

namespace DesignPatterns\Behavioral\Strategy\Tests;

use DesignPatterns\Behavioral\Strategy\CarCouponGeneratorExample\CouponGenerator;
use DesignPatterns\Behavioral\Strategy\CarCouponGeneratorExample\BmwCouponGenerator;
use DesignPatterns\Behavioral\Strategy\CarCouponGeneratorExample\MercedesCouponGenerator;
use PHPUnit\Framework\TestCase;

class StrategyCarTest extends TestCase
{
    
    public function messageAndCarProvider():array {

        return [
            ["Get 12% off the price of your new car.", "bmw"],
            ["Get 14% off the price of your new car.", "mercedes"]
        ];
    }
    
    public function couponObjectGenerator($car) {

        switch ($car) {
            case "bmw": return new BmwCouponGenerator;
            case "mercedes": return new MercedesCouponGenerator;
        }
    }



    /**
     * @dataProvider messageAndCarProvider
     * @group Strategy
     * @test
     */
    public function can_set_coupon_for_a_diferent_car($message, $car) {

        $couponGenerator = new CouponGenerator($this->couponObjectGenerator($car));
        $this->assertEquals($message, $couponGenerator->getCoupon());

    }
     
    
}