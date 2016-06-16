<?php

namespace Venta\Benchmark;


class E
{
    protected $d;

    public function __construct(D $d)
    {
        $this->d = $d;
    }

    /**
     * @return D
     */
    public function getD()
    {
        return $this->d;
    }

}