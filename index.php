<?php
// автозагрузку классов реализовал простейшую, так как для данного задания другая не требуется
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$factory=new Factory();
$factory->addType(new MyHydra1());
$factory->addType(new MyHydra2());
var_dump( $factory->create('MyHydra1',5));
echo '<br><hr>';
var_dump( $factory->create('MyHydra2',2));
echo '<br><hr>';
$unionRobot = new UnionRobot();
$unionRobot->addRobot(new MyHydra2());
$unionRobot->addRobot(new MyHydra1());
$unionRobot->addRobot($factory->create('MyHydra2',2));

$factory->addType($unionRobot);

$res = reset($factory->create($unionRobot,1));
echo '<br>';
echo 'min speed - '.$res->getSpeed();
echo '<br>sum weight - '.$res->getWeight();

