<?php

namespace Venta\Benchmark;


class B
{
    protected $a;

    protected $calculations = 0;

    public function __construct(A $a)
    {
        $this->a = $a;
    }

    /**
     * @return A
     */
    public function getA()
    {
        return $this->a;
    }

    public function getCalculations()
    {
        return $this->calculations;
    }

    public function makeCalculations()
    {
        $this->calculations = 2 + 2;
    }

}