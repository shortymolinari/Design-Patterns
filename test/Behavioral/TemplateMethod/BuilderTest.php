<?php

namespace Test\Behavioral\TemplateMethod;

use DesignPatterns\Behavioral\TemplateMethod\BuilderExample\Builder;
use DesignPatterns\Behavioral\TemplateMethod\BuilderExample\AndroidBuilder;
use DesignPatterns\Behavioral\TemplateMethod\BuilderExample\IosBuilder;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    public function testCanBuildAndroidApp()
    {
        $androidBuilder = new AndroidBuilder();
        
        $this->assertEquals(
            ['Running android tests', 'Linting the android code', 'Assembling the android build', 'Deploying android build to server'],
            $androidBuilder->build('a')
        );
    }

    public function testCanBuildIosApp()
    {
        $iosBuilder = new IosBuilder();
        
        $this->assertEquals(
            ['Running ios tests', 'Linting the ios code', 'Assembling the ios build', 'Deploying ios build to server'],
            $iosBuilder->build('a')
        );   
    }
}