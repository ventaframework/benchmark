<?php

namespace Venta\Benchmark;


class I
{
    protected $s;

    public function __construct(S $s)
    {
        $this->s = $s;
    }

    /**
     * @return S
     */
    public function getS()
    {
        return $this->s;
    }

}