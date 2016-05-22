<?php

namespace Venta\Benchmark;


class C
{
    protected $b;

    public function __construct(B $b)
    {
        $this->b = $b;
    }

}