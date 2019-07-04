<?php


class Factory
{
    public $typeRobots = array();
// мой addType складывает типы роботов в массив, но я его нигде не использую
    public function addType($robot)
    {
        $nameClass = get_class($robot);
        $this->typeRobots[$nameClass] = true;
    }
    // я не сумел реализовать create так чтобы createObject для любого обьекта, но мой вариант тоже работает,
    // если подскажите как надо я сделаю, я бістро учусь
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