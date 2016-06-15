<?php

use Venta\Benchmark\{A, D};
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

    public function benchResolveDependency()
    {
        $container = new Container();
        $d = $container->make(D::class);
        assert($d instanceof D);
    }

}