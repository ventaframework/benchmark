<?php

namespace Venta\Benchmark\Event;

use Symfony\Component\EventDispatcher\EventDispatcher;

/**
 * @BeforeMethods({"init"})
 */
class SymfonyBench
{
    private $dispatcher;

    public function init()
    {
        $this->dispatcher = new EventDispatcher;
    }

    public function benchManyEvents()
    {
        for ($i = 0; $i < 1000; ++$i) {
            $this->dispatcher->addListener(uniqid('event_'), function () {});
        }
    }

    public function benchManyListeners()
    {
        for ($i = 0; $i < 1000; ++$i) {
            $this->dispatcher->addListener('event.name', function () {});
        }
    }
}