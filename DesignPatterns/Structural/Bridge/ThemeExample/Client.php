<?php

namespace DesignPatterns\Structural\Bridge\ThemeExample;

require "../../../../vendor/autoload.php";

use DesignPatterns\Structural\Bridge\ThemeExample\DarkTheme;
use DesignPatterns\Structural\Bridge\ThemeExample\About;
use DesignPatterns\Structural\Bridge\ThemeExample\Careers;

$darkTheme = new DarkTheme();

$about = new About($darkTheme);
$careers = new Careers($darkTheme);

echo $about->getContent() . PHP_EOL; // "About page in Dark Black";
echo $careers->getContent(); // "Careers page in Dark Black";