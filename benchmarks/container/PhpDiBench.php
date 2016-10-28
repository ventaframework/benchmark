<?php
namespace Venta\Benchmark\Container;

use DI\ContainerBuilder;
use Venta\Benchmark\{A, D};

class PhpDiBench
{
    public function benchCreateSingleObject()
    {
        $builder = new ContainerBuilder;
        $builder->addDefinitions([
            'a' => function () {
                return new A;
            },
        ]);
        $builder->build()->get('a');
    }

    public function benchResolveDependency()
    {
        $builder = new ContainerBuilder;
        $container = $builder->build();
        $d = $container->get(D::class);
        assert($d instanceof D);
    }
}