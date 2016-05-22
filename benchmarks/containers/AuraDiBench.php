<?php

use Aura\Di\ContainerBuilder;
use Venta\Benchmark\A;

class AuraDiBench
{
    public function benchCreateSingleObject()
    {
        $builder = new ContainerBuilder;
        $container = $builder->newInstance();
        $container->set('a', function () {
            return new A;
        });
        $a = $container->get('a');
    }
}