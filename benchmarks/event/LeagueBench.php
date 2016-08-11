<?php

namespace Venta\Benchmark\Event;

use League\Event\Emitter;

/**
 * @BeforeMethods({"init"})
 */
class LeagueBench
{
    private $emitter;

    public function init()
    {
        $this->emitter = new Emitter;
    }

    public function benchManyEvents()
    {
        for ($i = 0; $i < 1000; ++$i) {
            $this->emitter->addListener(uniqid('event_'), function () {});
        }
    }

    public function benchManyListeners()
    {
        for ($i = 0; $i < 1000; ++$i) {
            $this->emitter->addListener('event.name', function () {});
        }
    }
}