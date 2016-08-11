<?php

namespace Venta\Benchmark\Event;

use Illuminate\Events\Dispatcher;

/**
 * @BeforeMethods({"init"})
 */
class IlluminateBench
{
    private $dispatcher;

    public function init()
    {
        $this->dispatcher = new Dispatcher;
    }

    public function benchManyEvents()
    {
        for ($i = 0; $i < 1000; ++$i) {
            $this->dispatcher->listen(uniqid('event_'), function () {});
        }
    }

    public function benchManyListeners()
    {
        for ($i = 0; $i < 1000; ++$i) {
            $this->dispatcher->listen('event.name', function () {});
        }
    }
}