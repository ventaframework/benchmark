<?php

use Dice\Dice;
use Venta\Benchmark\A;

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
}