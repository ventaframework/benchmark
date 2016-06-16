<?php

namespace Venta\Benchmark;


class F implements InterfaceF
{
    protected $e;

    public function __construct(E $e)
    {
        $this->e = $e;
    }

    /**
     * @return E
     */
    public function getE() : E
    {
        return $this->e;
    }

}