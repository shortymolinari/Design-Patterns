<?php

namespace DesignPatterns\Creational\FactoryMethod\ManagerExample;


class Developer implements Interviewer
{
    public function askQuestions()
    {
        return 'Asking about design patterns!';
    }
}