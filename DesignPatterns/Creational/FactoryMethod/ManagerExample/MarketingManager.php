<?php

namespace DesignPatterns\Creational\FactoryMethod\ManagerExample;

class MarketingManager extends HiringManager
{
    protected function makeInterviewer(): Interviewer
    {
        return new CommunityExecutive();
    }
}