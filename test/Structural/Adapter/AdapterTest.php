<?php
declare(strict_types=1);

namespace Tests\Structural\Adapter;

use DesignPatterns\Structural\Adapter\EbookAdapterExample\Book;
use DesignPatterns\Structural\Adapter\EbookAdapterExample\EBookAdapter;
use DesignPatterns\Structural\Adapter\EbookAdapterExample\Kindle;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testCanTurnPageOnBook()
    {
        $book = new Book();
        $book->open();
        $book->turnPage();

        $this->assertSame(2, $book->getPage());
    }

    public function testCanTurnPageOnKindleLikeInANormalBook()
    {
        $kindle = new Kindle();
        $book = new EBookAdapter($kindle);

        $book->open();
        $book->turnPage();

        $this->assertSame(2, $book->getPage());
    }
}