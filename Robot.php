<?php


class Robot
{
    // protected чтобы побыстрому, позже переделаю на private и get set
    protected $weight;
    protected $high;
    protected $speed;

    /**
     * Robot constructor.
     * @param $weight
     * @param $high
     * @param $speed
     */

    protected function __construct($weight, $high, $speed)
    {
        $this->weight = $weight;
        $this->high = $high;
        $this->speed = $speed;
    }
}