<?php
declare(strict_types=1);

namespace Tests\Structural\Bridge;

use DesignPatterns\Structural\Bridge\FormatterExample\HelloWorldService;
use DesignPatterns\Structural\Bridge\FormatterExample\HtmlFormatter;
use DesignPatterns\Structural\Bridge\FormatterExample\PlainTextFormatter;
use PHPUnit\Framework\TestCase;

class FormatterTest extends TestCase
{
    public function testCanPrintUsingThePlainTextFormatter()
    {
        $service = new HelloWorldService(new PlainTextFormatter());

        $this->assertSame('Hello World', $service->get());
    }

    public function testCanPrintUsingTheHtmlFormatter()
    {
        $service = new HelloWorldService(new HtmlFormatter());

        $this->assertSame('<p>Hello World</p>', $service->get());
    }
}
