<?php

use DI\ContainerBuilder;
use Venta\Benchmark\A;

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
}