<?php
//建造者模式  将一个复杂对象的构造与它的表示分离，使同样的构建过程可以创建不同的表示。
//建造者模式是一步一步创建一个复杂的对象，它允许用户只通过指定复杂对象的类型和内容就可以构建它们，用户不需要知道内部的具体构建细节。建造者模式属于对象创建型模式。根据中文翻译的不同，建造者模式又可以称为生成器模式。
//
//
//
//目的：
//　　消除其他对象复杂的创建过程
//建造者模式包含如下角色：
//　　1.产品角色，产品角色定义自身的组成属性
//　　2.抽象建造者，抽象建造者定义了产品的创建过程以及如何返回一个产品
//　　3.具体建造者，具体建造者实现了抽象建造者创建产品过程的方法，给产品的具体属性进行赋值定义
//　　4.指挥者，指挥者负责与调用客户端交互，决定创建什么样的产品
class Person
{
    public $age;
    public $speed;
    public $knowledge;
}
//抽象建造者类
abstract class Builder
{
    public $_person;
    public abstract function setAge();
    public abstract function setSpeed();
    public abstract function setKnowledge();
    public function __construct(Person $person)
    {
        $this->_person = $person;
    }
    public function getPerson()
    {
        return $this->_person;
    }
}
//长者建造者
class OldBuilder extends Builder
{
    public function setAge()
    {
        // TODO: Implement setAge() method.
        $this->_person->age = 70;
    }
    public function setSpeed()
    {
        // TODO: Implement setSpeed() method.
        $this->_person->speed = "low";
    }
    public function  setKnowledge()
    {
        // TODO: Implement setKnowledge() method.
        $this->_person->knowledge = "more";
    }
}
//小孩构造者
class ChildBuilder extends Builder
{
    public function setAge()
    {
        // TODO: Implement setAge() method.
        $this->_person->age = 10;
    }
    public function setSpeed()
    {
        // TODO: Implement setAge() method.
        $this->_person->speed = "fast";
    }
    public function setKnowledge()
    {
        // TODO: Implement setKnowledge() method.
        $this->_person->knowledge="litte";
    }
}
//建造指挥者
class Director
{
    private $_builder;
    public function __construct(Builder $builder)
    {
        $this->_builder = $builder;
    }
    public function built()
    {
        $this->_builder->setAge();
        $this->_builder->setSpeed();
        $this->_builder->setKnowledge();
    }
}
//实例化一个长者建造者
$oldB = new OldBuilder(new Person);
//实例化一个建造指挥者
$director = new Director($oldB);
//指挥建造
$director->built();
//得到长者
$older = $oldB->getPerson();
var_dump($older);

