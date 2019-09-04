<?php
declare(strict_types=1);

namespace DesignPatterns\Structural\Decorator\BookingExample;

abstract class BookingDecorator implements Booking
{
    /**
     * @var Booking
     */
    protected $booking;

    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
    }
}