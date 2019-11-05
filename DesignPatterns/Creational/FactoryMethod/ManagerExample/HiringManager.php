<?php

namespace DesignPatterns\Creational\FactoryMethod\ManagerExample;

abstract class HiringManager
{
    // Factory method
    abstract protected function makeInterviewer(): Interviewer;

    public function takeInterview()
    {
        $interviewer = $this->makeInterviewer();
        return $interviewer->askQuestions();
    }
}