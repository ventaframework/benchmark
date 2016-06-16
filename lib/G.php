<?php

namespace Venta\Benchmark;


class G
{
    protected $f;

    public function __construct(InterfaceF $f)
    {
        $this->f = $f;
    }

    /**
     * @return F
     */
    public function getF()
    {
        return $this->f;
    }

}