<?php

use Pimple\Container;
use Venta\Benchmark\A;

class PimpleBench
{
    public function benchCreateSingleObject()
    {
        $container = new Container;
        $container['a'] = $container->factory(function () {
            return new A;
        });
        $a = $container['a'];
    }
}