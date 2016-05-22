<?php

use League\Container\Container;
use Venta\Benchmark\A;

class LeagueBench
{
    public function benchCreateSingleObject()
    {
        $container = new Container;
        $container->add('a', function () {
            return new A;
        });
        $a = $container->get('a');
    }
}