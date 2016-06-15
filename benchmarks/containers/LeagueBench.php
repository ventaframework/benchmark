<?php

use League\Container\Container;
use Venta\Benchmark\{A, D};

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

    public function benchResolveDependency()
    {
        $container = new Container;
        $container->delegate(
            new League\Container\ReflectionContainer
        );
        $d = $container->get(D::class);
        assert($d instanceof D);
    }

}