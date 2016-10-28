<?php
namespace Venta\Benchmark\Container;

use Venta\Container\Container;
use Venta\Benchmark\{
    A, B, D, F, InterfaceA, InterfaceF, K, S
};

class VentaBench
{
    public function benchCreateSingleObject()
    {
        $container = new Container;
        $container->set(InterfaceA::class, A::class);
        $container->get(InterfaceA::class);
    }

    public function benchFullCycle()
    {
        $container = new Container;
        $container->set(InterfaceF::class, F::class);
        $container->factory(B::class, function () {
            $b = new B(new A);
            $b->getCalculations();

            return $b;
        });
        $container->set(S::class, S::class, true);

        /** @var K $k */
        $k = $container->get(K::class);
        assert($k instanceof K);
        $b = $k->getG()->getF()->getE()->getD()->getC()->getB();
        assert($b instanceof $b);
        assert($b->getCalculations() == 4);
        assert($b->getA() instanceof A);
        assert($k->getH() === $k->getI());
        assert($k->getH() === $k->getJ());
        assert($k->getJ() === $k->getI());
    }

    public function benchResolveDependency()
    {
        $container = new Container();
        $d = $container->get(D::class);
        assert($d instanceof D);
    }

}