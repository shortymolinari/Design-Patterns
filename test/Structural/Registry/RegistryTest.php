<?php

namespace Test\Structural\Registry;

use DesignPatterns\Structural\Registry\Registry;
use stdClass;
use PHPUnit\Framework\TestCase;

class RegistryTest extends TestCase
{

    /**
     * @group Registry
     * @test
     */
    public function set_and_get_logger()
    {
        $key = Registry::LOGGER;
        $logger = new stdClass();

        Registry::set($key, $logger);
        $storedLogger = Registry::get($key);

        $this->assertSame($logger, $storedLogger);
        $this->assertInstanceOf(stdClass::class, $storedLogger);
    }

    /**
     * 
     */
    public function testThrowsExceptionWhenTryingToSetInvalidKey()
    {
        $this->expectExceptionMessage('Invalid key given');
        Registry::set('foobar', new stdClass());
    }

    /**
     * notice @runInSeparateProcess here: without it, a previous test might have set it already and
     * testing would not be possible. That's why you should implement Dependency Injection where an
     * injected class may easily be replaced by a mockup
     *
     * @runInSeparateProcess
     * 
     */
    public function testThrowsExceptionWhenTryingToGetNotSetKey()
    {
        $this->expectExceptionMessage('Invalid key given');
        Registry::get(Registry::LOGGER);
    }
}