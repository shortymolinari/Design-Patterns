<?php

namespace DesignPatterns\Creational\FactoryMethod\ManagerExample;

class CommunityExecutive implements Interviewer
{
    public function askQuestions()
    {
        return 'Asking about community building';
    }
}