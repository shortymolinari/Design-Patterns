<?php

namespace DesignPatterns\Structural\Bridge\ThemeExample;

class AquaTheme implements Theme
{
    public function getColor()
    {
        return 'Light blue';
    }
}