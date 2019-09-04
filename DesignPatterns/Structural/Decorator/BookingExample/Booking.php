<?php
declare(strict_types=1);

namespace DesignPatterns\Structural\Decorator\BookingExample;

interface Booking
{
    public function calculatePrice(): int;

    public function getDescription(): string;
}