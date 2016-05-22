<?php

use Illuminate\Container\Container;
use Venta\Benchmark\A;

class IlluminateBench
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