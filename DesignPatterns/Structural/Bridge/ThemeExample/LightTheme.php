<?php

namespace DesignPatterns\Structural\Bridge\ThemeExample;

class LightTheme implements Theme
{
    public function getColor()
    {
        return 'Off white';
    }
}