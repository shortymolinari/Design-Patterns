<?php

namespace DesignPatterns\Behavioral\Visitor\ElementExample;

interface Visitor {
    public function visit(VisitedArray $elements);
} 