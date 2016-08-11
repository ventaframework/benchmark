<?php
namespace Venta\Benchmark\Container;

use League\Container\Container;
use League\Container\ReflectionContainer;
use Venta\Benchmark\{A, D};

class LeagueBench
{
    public function benchCreateSingleObject()
    {
        $container = new Container;
        $container->add('a', function () {
            return new A;
        });
        $container->get('a');
    }

    public function benchResolveDependency()
    {
        $container = new Container;
        $container->delegate(
            new ReflectionContainer
        );
        $d = $container->get(D::class);
        assert($d instanceof D);
    }

}