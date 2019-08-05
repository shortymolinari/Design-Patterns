<?php

namespace DesignPatterns\Behavioral\Strategy\CarCouponGeneratorExample;

interface CarCouponGenerator {

    function addSeasonDiscount();
    function addStockDiscount();

}