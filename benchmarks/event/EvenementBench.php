<?php

namespace Venta\Benchmark\Event;

use Evenement\EventEmitter;

/**
 * @BeforeMethods({"init"})
 */
class EvenementBench
{
    private $emitter;

    public function init()
    {
        $this->emitter = new EventEmitter;
    }


    public function benchManyEvents()
    {
        for ($i = 0; $i < 1000; ++$i) {
            $this->emitter->on(uniqid('event_'), function () {});
        }
    }

    public function benchManyListeners()
    {
        for ($i = 0; $i < 1000; ++$i) {
            $this->emitter->on('event.name', function () {});
        }
    }
}