<?php
namespace Venta\Benchmark\Container;

use Auryn\Injector;
use Venta\Benchmark\{A, D};

class AurynBench
{
    public function benchCreateSingleObject()
    {
        $injector = new Injector();
        $injector->delegate('a', function () {
            return new A;
        });
        $injector->make('a');
    }

    public function benchResolveDependency()
    {
        $injector = new Injector();
        $d = $injector->make(D::class);
        assert($d instanceof D);
    }

}