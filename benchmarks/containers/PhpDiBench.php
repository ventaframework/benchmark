<?php

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
        $a = $builder->build()->get('a');
    }

    public function benchResolveDependency()
    {
        $builder = new DI\ContainerBuilder();
        $container = $builder->build();
        $d = $container->get(D::class);
        assert($d instanceof D);
    }
}