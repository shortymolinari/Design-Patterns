<?php

namespace DesignPatterns\Behavioral\Visitor\ElementExample;

/**
 * Visitor design pattern (example of implementation)
 * 
 * @author Enrico Zimuel (enrico@zimuel.it) 
 * @see    http://en.wikipedia.org/wiki/Visitor_pattern
 */
interface Visited {
    public function accept(Visitor $visitor);
}