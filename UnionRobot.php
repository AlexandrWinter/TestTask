<?php


class UnionRobot extends Robot
{
    public $unionRobot = array();

    /**
     * UnionRobot constructor.
     * @param array $unionRobot
     */
    public function __construct()
    {
        parent::__construct(0, 0, 0);
    }

    public function addRobot($robot)
    {
        if (is_array($robot)) {
            $this->unionRobot = array_merge($this->unionRobot, $robot);


        } else {
            $this->unionRobot[] = $robot;
        }
    }

    public function getSpeed()
    {
        foreach ($this->unionRobot as $item) {
            if ($this->speed > $item->speed || $this->speed == 0) {
                $this->speed = $item->speed;
            }
        }
        return $this->speed;
    }

    public function getWeight()
    {
        foreach ($this->unionRobot as $item) {
            $this->weight += $item->weight;
        }
        return $this->weight;
    }
}