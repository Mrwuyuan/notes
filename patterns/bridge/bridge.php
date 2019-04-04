<?php
//桥接模式就是把抽象部分与实现部分分离；使他们都可以有独立的变化组合；（https://blog.csdn.net/jhq0113/article/details/45441793）
abstract class AbstractRoad
{
    public $icar;
    abstract function Run();
}
class SpeedRoad extends AbstractRoad
{
    function Run()
    {
        // TODO: Implement Run() method.
        $this->icar->Run();
        echo ":在高速公路上。";
    }
}
class Street extends AbstractRoad
{
    function Run()
    {
        // TODO: Implement Run() method.
        $this->icar->Run();
        echo ":在乡村街道上。";
    }
}
interface ICar
{
    function Run();
}
class Jeep implements ICar
{
    public function Run()
    {
        // TODO: Implement Run() method.
        echo "吉普快跑";
    }
}
class Car implements ICar
{
    public function Run()
    {
        // TODO: Implement Run() method.
        echo "小汽车快跑";
    }
}

$speedRoad = new SpeedRoad();
$speedRoad->icar = new Car();
$speedRoad->Run();
echo "<br />";

$street = new Street();
$street->icar = new Car();
$street->Run();



