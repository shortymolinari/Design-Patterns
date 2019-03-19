<?php

namespace DesignPatterns\Structural\Proxy\ProxyProtector;

use DesignPatterns\Structural\Proxy\ProxyProtector\Door;

class LabDoor implements Door {
    
    public function open()
    {
        echo "Opening lab door";
    }

    public function close()
    {
        echo "Closing the lab door";
    }
}