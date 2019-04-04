<?php
//适配器
//定义 将一个类的接口转换成客户希望的另外的一个接口，使原本不兼容的而且不能在一起工作的那些类可以在一起工作。
//微博类含有myLogion方法（http://www.dahouduan.com/2017/08/29/php-design-pattern-adapter/）
class Weibo
{
    public function wbLogin($username,$password)
    {
        echo $username.' is logining weibo with password '. $password. PHP_EOL;
    }
}
class Weixin
{
    public function wxlogin($config){
        echo $config['username'].' is logining weixin with password '. $config['password']. PHP_EOL;
    }
}
//定义适配器接口
interface Adapter
{
    function login();
}
//定义微博适配器类继承微博类实现适配器接口
class WeiboAdapter extends Weibo implements Adapter
{
    public function login()
    {
        $this->myLogin();
    }
}
//定义微信适配器类继承微信类实现适配器接口
class WeixinAdapter extends Weixin implements Adapter {

    public function login($username, $password) {
        $this->wxlogin(['username'=>$username, 'password'=> $password]);
    }
}
class User
{
    private $adapter;
    public function __construct(Adapter $Adapter)
    {
        $this->adapter = $Adapter;
    }
    public function login($username, $password){
        $this->adapter->login($username, $password);
    }
}
$user = new User();
// 实例化微博适配器
$adapter = new WeiboAdapter();
// 设置适配器
$user->setAdapter($adapter);
$user->login('yangbing', '123123');
