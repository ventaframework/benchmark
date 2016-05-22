<?php

use Venta\Benchmark\A;
use Venta\Container\Container;

class VentaBench
{
    public function benchCreateSingleObject()
    {
        $container = new Container;
        $container->bind('a', function () {
            return new A;
        });
        $a = $container->make('a');
    }
}