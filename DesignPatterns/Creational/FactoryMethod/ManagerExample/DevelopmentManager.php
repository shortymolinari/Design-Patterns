<?php

namespace DesignPatterns\Creational\FactoryMethod\ManagerExample;

class DevelopmentManager extends HiringManager
{
    protected function makeInterviewer(): Interviewer
    {
        return new Developer();
    }
}