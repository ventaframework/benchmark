<?php

use Venta\Benchmark\A;
use Zend\Di\Di;

class ZendDiBench
{
    public function benchCreateSingleObject()
    {
        $container = new Di;
        $container->instanceManager()->addTypePreference(A::class, function () {
            return new A;
        });
        $a = $container->get(A::class);
    }
}