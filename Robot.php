<?php


class Robot
{

    private $weight;
    private $high;
    private $speed;

    protected function __construct($weight, $high, $speed)
    {
        $this->weight = $weight;
        $this->high = $high;
        $this->speed = $speed;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return mixed
     */
    public function getHigh()
    {
        return $this->high;
    }

    /**
     * @param mixed $high
     */
    public function setHigh($high): void
    {
        $this->high = $high;
    }

    /**
     * @return mixed
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param mixed $speed
     */
    public function setSpeed($speed): void
    {
        $this->speed = $speed;
    }
}