<?php

namespace DesignPatterns\Behavioral\Visitor\RoleExample;

interface Role
{
    public function accept(RoleVisitorInterface $visitor);
}