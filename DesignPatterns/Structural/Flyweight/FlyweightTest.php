<?php

namespace DesignPatterns\Structural\Flyweight;

require "../../../vendor/autoload.php";

use DesignPatterns\Structural\Flyweight\FlyweightFactory;

class FlyweightTest
{
    private $characters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k',
        'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    private $fonts = ['Arial', 'Times New Roman', 'Verdana', 'Helvetica'];

    public function testFlyweight()
    {
        $factory = new FlyweightFactory();

        foreach ($this->characters as $char) {
            foreach ($this->fonts as $font) {
                $flyweight = $factory->get($char);
                $rendered = $flyweight->render($font);

                echo sprintf('Character %s with font %s', $char, $font) . PHP_EOL;
            }
        }

        // Flyweight pattern ensures that instances are shared
        // instead of having hundreds of thousands of individual objects
        // there must be one instance for every char that has been reused for displaying in different fonts
       // $this->assertCount(count($this->characters), $factory);

        echo "Factory: " . count($factory) . PHP_EOL;
        echo "Characters: " . count($this->characters);
    }
}

/*$flyweightTest = new FlyweightTest;
$flyweightTest->testFlyweight();*/