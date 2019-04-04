<?php
namespace singleton;
class Singleton
{
    private static $obj = NULL;
    //私有的构造方法 防止new对象
    private function __construct()
    {

    }
    //私有的克隆方法 防止单例被克隆
    private function __clone()
    {

    }
    //公共的方法 提供单例
    public static function getInstance()
    {
        if(!self::$obj instanceof self){
            self::$obj = new self;
        }
        return self::$obj;
    }
}