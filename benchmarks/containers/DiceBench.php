<?php

use Dice\Dice;
use Venta\Benchmark\{A, D};

class DiceBench
{
    public function benchCreateSingleObject()
    {
        $container = new Dice;
        $rule = [
            'substitutions' => [
                A::class => [
                    'instance' => function () {
                        return new A;
                    },
                ],
            ],
        ];
        $container->addRule(A::class, $rule);
        $a = $container->create(A::class);
    }

    public function benchResolveDependency()
    {
        $container = new Dice;
        $d = $container->create(D::class);
        assert($d instanceof D);
    }

}