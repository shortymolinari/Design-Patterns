<?php

namespace DesignPatterns\Structural\Bridge\ThemeExample;

class DarkTheme implements Theme
{
    public function getColor()
    {
        return 'Dark Black';
    }
}