<?php
namespace Venta\Benchmark\Container;

use Aura\Di\ContainerBuilder;
use Venta\Benchmark\{A, D};

class AuraDiBench
{
    public function benchCreateSingleObject()
    {
        $builder = new ContainerBuilder;
        $container = $builder->newInstance();
        $container->set('a', function () {
            return new A;
        });
        $container->get('a');
    }

    public function benchResolveDependency()
    {
        $builder = new ContainerBuilder();
        $di = $builder->newInstance($builder::AUTO_RESOLVE);
        $d = $di->newInstance(D::class);
        assert($d instanceof D);
    }
}