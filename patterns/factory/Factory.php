<?php
////简单工厂 Start
//abstract class Cat
//{
//    abstract protected function voice();
//}
//
//class WhiteCat extends Cat
//{
//    public function voice()
//    {
//        // TODO: Implement voice() method.
//        echo "白喵喵。。。";
//    }
//}
//class BlackCat extends Cat
//{
//    public function voice()
//    {
//        // TODO: Implement voice() method.
//        echo "黑喵喵。。。";
//    }
//}
//class Factory
//{
//    public static function create($color)
//    {
//        switch ($color) {
//            case "white":
//                return new WhiteCat();
//                break;
//            case "black":
//                return new BlackCat();
//                break;
//        }
//    }
//}
//class Client
//{
//    public static function main()
//    {
//        $whiteObj = Factory::create("white");
//        $whiteObj->voice();
//        $blackObj = Factory::create("black");
//        $blackObj->voice();
//    }
//}
//Client::main();
//简单工厂 End


//工厂方法 Start
//abstract class  Cat
//{
//    abstract protected function voice();
//}
//class WhiteCat extends Cat
//{
//    public function voice()
//    {
//        // TODO: Implement voice() method.
//        echo "白喵喵..";
//    }
//}
//class BlackCat extends Cat
//{
//    public function voice()
//    {
//        // TODO: Implement voice() method.
//        echo "黑喵喵..";
//    }
//}
//interface Factory
//{
//    public static function create();
//}
//class WhiteCatFactory implements Factory
//{
//    public static function create()
//    {
//        // TODO: Implement create() method.
//        return new WhiteCat();
//    }
//}
//class BlackCatFactory implements Factory
//{
//    public static function create()
//    {
//        // TODO: Implement create() method.
//        return new BlackCat();
//    }
//}
//class Client
//{
//    public static function main(){
//        $whiteCat = WhiteCatFactory::create();
//        $whiteCat->voice();
//        $blackCat = BlackCatFactory::create();
//        $blackCat->voice();
//    }
//}
//Client::main();
//工厂方法 End


//工厂抽象 Start
//abstract class  Cat
//{
//    abstract protected function voice();
//}
//class WhiteCat extends Cat
//{
//    public function voice()
//    {
//        // TODO: Implement voice() method.
//        echo "白喵喵..";
//    }
//}
//class BlackCat extends Cat
//{
//    public function voice()
//    {
//        // TODO: Implement voice() method.
//        echo "黑喵喵..";
//    }
//}
//abstract class  Dog
//{
//    abstract protected function voice();
//}
//class WhiteDog extends Dog
//{
//    public function voice()
//    {
//        // TODO: Implement voice() method.
//        echo "白wangwang...";
//    }
//}
//class BlackDog extends Dog
//{
//    public function voice()
//    {
//        // TODO: Implement voice() method.
//        echo "黑wangwang...";
//    }
//}
//interface Factory
//{
//    public static function createCat();
//    public static function createDog();
//}
//class WhiteAnimalFactory implements Factory
//{
//    public static function createCat()
//    {
//        // TODO: Implement create() method.
//        return new WhiteCat();
//    }
//    public static function createDog()
//    {
//        // TODO: Implement create() method.
//        return new WhiteDog();
//    }
//}
//class BlackAnimalFactory implements Factory
//{
//    public static function createCat()
//    {
//        // TODO: Implement create() method.
//        return new BlackCat();
//    }
//    public static function createDog()
//    {
//        // TODO: Implement create() method.
//        return new BlackDog();
//    }
//}
//class Client
//{
//    public static function main(){
//        $whiteCat = WhiteAnimalFactory::createCat();
//        $whiteDog = WhiteAnimalFactory::createDog();
//        $whiteCat->voice();
//        $whiteDog->voice();
//        $blackCat = BlackAnimalFactory::createCat();
//        $blackDog = BlackAnimalFactory::createDog();
//        $blackCat->voice();
//        $blackDog->voice();
//    }
//}
//Client::main();
//工厂抽象 End
