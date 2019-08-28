<?php
declare(strict_types=1);

namespace Tests\Structural\Bridge;

use DesignPatterns\Structural\Bridge\ThemeExample\DarkTheme;
use DesignPatterns\Structural\Bridge\ThemeExample\AquaTheme;
use DesignPatterns\Structural\Bridge\ThemeExample\About;
use DesignPatterns\Structural\Bridge\ThemeExample\Careers;
use PHPUnit\Framework\TestCase;

class ThemeTest extends TestCase
{

    public function setUp() :void {
        $this->darkTheme = new DarkTheme();
        $this->aquaTheme = new AquaTheme();
    }

    public function testCanChangesColorThemeForAboutPage()
    {
        $about = new About($this->darkTheme);
        $this->assertSame('About page in Dark Black', $about->getContent());
    }

    public function testCanChangesColorThemeForCareersPage()
    {
        $careers = new Careers($this->aquaTheme);
        $this->assertSame('Careers page in Light blue', $careers->getContent());
    }
}
