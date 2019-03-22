<?php

namespace DesignPatterns\Creational\Pool;

require "../../../vendor/autoload.php";

use DesignPatterns\Creational\Pool\WorkerPool;

class PoolTest {

    public function testCanGetNewInstancesWithGet()
    {
        $pool = new WorkerPool();
        $worker1 = $pool->get();
        $worker2 = $pool->get();

        echo "\$pool debe terner 2, y \$pool tiene: " . count($pool) . PHP_EOL;
        echo ($worker1 === $worker2) 
            ? '$worker1 & $worker2 son iguales' 
            : '$worker1 & $worker2 no son iguales' . PHP_EOL;

        //var_dump($worker1);
        //var_dump($worker2);
    }

    public function testCanGetSameInstanceTwiceWhenDisposingItFirst()
    {
        $pool = new WorkerPool();
        $worker1 = $pool->get();
        $pool->dispose($worker1);
        $worker2 = $pool->get();

        echo "\$pool debe terner 1, y \$pool tiene: " . count($pool) . PHP_EOL;
        echo ($worker1 === $worker2) 
            ? '$worker1 & $worker2 son iguales' 
            : '$worker1 & $worker2 no son iguales' . PHP_EOL;
        //$this->assertCount(1, $pool);
        //$this->assertSame($worker1, $worker2);
    }
}

/*
$objectPool = new PoolTest();
$objectPool->testCanGetNewInstancesWithGet();
$objectPool->testCanGetSameInstanceTwiceWhenDisposingItFirst();
*/
//var_dump($objectPool);
