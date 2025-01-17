<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Adapter\EbookAdapterExample;

interface EBookInterface
{
    public function unlock();

    public function pressNext();

    /**
     * returns current page and total number of pages, like [10, 100] is page 10 of 100
     *
     * @return int[]
     */
    public function getPage(): array;
}