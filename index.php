<?php
include_once 'Robot.php';
include_once 'Factory.php';
include_once 'MyHydra1.php';
include_once 'MyHydra2.php';
include_once 'UnionRobot.php';

$factory=new Factory();
$factory->addType(new MyHydra1());
$factory->addType(new MyHydra2());
var_dump( $factory->create('MyHydra1',5));
echo '<br>';
var_dump( $factory->create('MyHydra2',2));
echo '<br>';
$unionRobot = new UnionRobot();
$unionRobot->addRobot(new MyHydra2());
$unionRobot->addRobot(new MyHydra1());
$unionRobot->addRobot($factory->create('MyHydra2',2));

var_dump($unionRobot);
echo '<br>';
$factory->addType($unionRobot);
var_dump($factory->typeRobots);
$res = reset($factory->create($unionRobot,1));
echo '<br>';
echo 'min speed - '.$res->getSpeed();
echo '<br>sum weight - '.$res->getWeight();




?>
