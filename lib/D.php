<?php

namespace Venta\Benchmark;


class D
{
    protected $c;

    public function __construct(C $c)
    {
        $this->c = $c;
    }

    /**
     * @return C
     */
    public function getC()
    {
        return $this->c;
    }
}