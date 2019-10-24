<?php

namespace Test\Structural\DataMapper;

use DesignPatterns\Structural\DataMapper\StorageAdapter;
use DesignPatterns\Structural\DataMapper\User;
use DesignPatterns\Structural\DataMapper\UserMapper;
use DesignPatterns\Structural\DataMapper\InvalidArgumentException;

use PHPUnit\Framework\TestCase;

class DataMapperTest extends TestCase
{
    public function testCanMapUserFromStorage()
    {
        $storage = new StorageAdapter([1 => ['username' => 'domnikl', 'email' => 'liebler.dominik@gmail.com']]);
        $mapper = new UserMapper($storage);

        $user = $mapper->findById(1);
        //var_dump($user);
        $this->assertInstanceOf(User::class, $user);
    }


    public function testWillNotMapInvalidData()
    {
        $storage = new StorageAdapter([]);
        $mapper = new UserMapper($storage);
        $this->expectExceptionMessage('User #1 not found');
       
        $mapper->findById(1);    
    }
}