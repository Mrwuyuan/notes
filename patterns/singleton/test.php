<?php
//注册自动加载
//spl_autoload_register('autoload');
//function autoload($class)
//{
//    require dirname($_SERVER['SCRIPT_FILENAME']) . '//..//' . str_replace('\\','/',$class) . '.php';
//}
//use singleton\Singleton;
//$a = Singleton::getInstance();
//$b = Singleton::getInstance();
//var_dump($a);
//var_dump($b);
class A
{
    public   $nosta = 'nosta';
    public static  $sta = 'static';
    public function __construct()
    {
        echo "This is class A";
    }
    public function noStatic(){
        return "This is noStatic function";
    }
    public static function yesStatic(){
        return "This is yesStatic function";
    }
}
//类调用
//var_dump(A::$nosta);//类外调用成员变量报错 Fatal error: Access to undeclared static property: A::$nosta in
//var_dump(A::$sta);//类外调用静态成员变量正常
//var_dump(A::noStatic());//类外调用成员函数报错Strict standards: Non-static method A::noStatic() should not be called statically
//var_dump(A::yesStatic());//类外调用静态函数正常

//$obj = new A;
//var_dump($obj->nosta);//yes
//var_dump($obj->sta);//no
//var_dump($obj->noStatic());//yes
//var_dump($obj->yesStatic());//no

//静态方法或属性，在类初始化的时候就加载到内存中，就算实例化多个对象，在栈中的静态方法依然只是一个，共所有对象使用
//调用事直接通过类名来调用静态方法

