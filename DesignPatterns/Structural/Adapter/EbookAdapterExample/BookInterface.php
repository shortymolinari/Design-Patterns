<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Adapter\EbookAdapterExample;

interface BookInterface
{
    public function turnPage();

    public function open();

    public function getPage(): int;
}