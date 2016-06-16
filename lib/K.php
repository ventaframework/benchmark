<?php


namespace Venta\Benchmark;


class K
{
    protected $j;
    protected $i;
    protected $h;
    protected $g;

    public function __construct(J $j, I $i, H $h, G $g)
    {
        $this->j = $j;
        $this->i = $i;
        $this->h = $h;
        $this->g = $g;
    }

    /**
     * @return J
     */
    public function getJ()
    {
        return $this->j;
    }

    /**
     * @return I
     */
    public function getI()
    {
        return $this->i;
    }

    /**
     * @return H
     */
    public function getH()
    {
        return $this->h;
    }

    /**
     * @return G
     */
    public function getG()
    {
        return $this->g;
    }

}