<?php

namespace DesignPatterns\Structural\Bridge\ThemeExample;

interface WebPage
{
    public function __construct(Theme $theme);
    public function getContent();
}