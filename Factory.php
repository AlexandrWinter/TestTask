<?php


class Factory
{
    public $typeRobots = array();

    public function addType($robot)
    {
        $nameClass = get_class($robot);
        $this->typeRobots[$nameClass] = true;

    }

    public function create($objectName, $quantity)
    {
        $result = array();
        for ($i = 0; $i < $quantity; $i++) {
            if (is_object($objectName)) {
                $result[] = clone $objectName;

            } else {
                $result[] = new $objectName();
            }
        }
        return $result;
    }
}