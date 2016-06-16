<?php

use Illuminate\Container\Container;
use Venta\Benchmark\{A, B, C, D, E, F, G, H, I, J, K, S, InterfaceF};

class IlluminateBench
{
    public function benchCreateSingleObject()
    {
        $container = new Container;
        $container->bind('a', function () {
            return new A;
        });
        $a = $container->make('a');
    }

    public function benchResolveDependency()
    {
        $container = new Container;
        $d = $container->make(D::class);
        assert($d instanceof D);
    }

    public function benchFullCycle()
    {
        $container = new Container();
        $container->bind(InterfaceF::class, F::class);
        $container->bind(B::class, function () {
            $b = new B(new A);
            $b->makeCalculations();
            return $b;
        });
        $container->singleton(S::class, S::class);
        /** @var K $k */
        $k = $container->make(K::class);
        assert($k instanceof K);
        $b = $k->getG()->getF()->getE()->getD()->getC()->getB();
        assert($b instanceof $b);
        assert($b->getCalculations() == 4);
        assert($b->getA() instanceof A);
        assert($k->getH() === $k->getI());
        assert($k->getH() === $k->getJ());
        assert($k->getJ() === $k->getI());
    }

}