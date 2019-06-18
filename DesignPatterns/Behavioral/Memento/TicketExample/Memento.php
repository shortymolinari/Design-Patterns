<?php

namespace DesignPatterns\Behavioral\Memento\TicketExample;

class Memento
{

    private $state;

    public function __construct(State $stateToSave) {
        $this->state = $stateToSave;
    }

    public function getState() {
        return $this->state;
    }
}