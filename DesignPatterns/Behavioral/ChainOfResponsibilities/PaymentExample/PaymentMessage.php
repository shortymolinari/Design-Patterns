<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\PaymentExample;


class PaymentMessage {

    public static $message = [];

    public static function addMessage(string $message){

        self::$message[] = $message;

    }

    public static function getMessages():array{
        return self::$message;
    }

    public static function getUniqueMessages():array{
        return array_unique(self::$message);
    }
}