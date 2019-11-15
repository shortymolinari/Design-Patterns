<?php
declare(strict_types=1);

namespace Tests\Creational\Prototype;

use DesignPatterns\Creational\Prototype\BookExample\BarBookPrototype;
use DesignPatterns\Creational\Prototype\BookExample\FooBookPrototype;
use PHPUnit\Framework\TestCase;

class BookTest extends TestCase
{
    public function testCanGetFooBook()
    {
        $fooPrototype = new FooBookPrototype();
        $barPrototype = new BarBookPrototype();

        for ($i = 0; $i < 10; $i++) {
            $book = clone $fooPrototype;
            $book->setTitle('Foo Book No ' . $i);
            $this->assertInstanceOf(FooBookPrototype::class, $book);
        }

        for ($i = 0; $i < 5; $i++) {
            $book = clone $barPrototype;
            $book->setTitle('Bar Book No ' . $i);
            $this->assertInstanceOf(BarBookPrototype::class, $book);
        }
    }
}
