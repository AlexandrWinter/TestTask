<?php


class UnionRobot extends Robot
{
    public $unionRobot = array();

    public function __construct()
    {
        parent::__construct(0, 0, 0);
    }
    // Добавляет робота в сборный робот и сразу считает его скорость и массу, высоту не считаю,
    // так как неизвестно как он будет собран
    public function addRobot($robot)
    {
        if (is_array($robot)) {
            $this->unionRobot = array_merge($this->unionRobot, $robot);
        } else {
            $this->unionRobot[] = $robot;
        }
        $this->setSpeed($robot);
        $this->setWeight($robot);
    }
    // если массив то прохожу по одному и слаживаю массу, если один, то тоже слаживаю
    public function setWeight($robot): void
    {
        if (is_array($robot)) {
            foreach ($robot as $value) {
                parent::setWeight(parent::getWeight() + $value->getWeight());
            }
        } else {
            parent::setWeight(parent::getWeight() + $robot->getWeight());
        }
    }

    public function setSpeed($robot): void
    {
        if (is_array($robot)) {
            foreach ($robot as $value) {
                if ($this->getSpeed() > $value->getSpeed() || $this->getSpeed() == 0) {
                    parent::setSpeed($value->getSpeed());
                }
            }
        } else {
            if ($this->getSpeed() > $robot->getSpeed() || $this->getSpeed() == 0) {
                parent::setSpeed($robot->getSpeed());
            }
        }
    }
}