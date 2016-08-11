<?php
namespace Venta\Benchmark\Container;

use Venta\Benchmark\{A, D};
use Zend\Di\Di;

class ZendDiBench
{
    public function benchCreateSingleObject()
    {
        $container = new Di;
        $container->instanceManager()->addTypePreference(A::class, function () {
            return new A;
        });
        $container->get(A::class);
    }

    public function benchResolveDependency()
    {
        $container = new Di();
        $d = $container->newInstance(D::class);
        assert($d instanceof D);
    }
}