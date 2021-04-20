<?php

class A
{

    public $name;

    function foo()
    {
        //判断是否为null 是否unset
        if (isset($this)) {
            echo '$this is defined (';
            echo get_class($this);
            echo ")\n";
        } else {
            echo "\$this is not defined.\n";
        }
    }
}

class B
{
    function bar()
    {
        A::foo();
    }
}

//实例 空构造函数 可以省略括号
$a = new A();
$a->foo();

//A::foo();//不可以

//$b = new B();
//$b->bar();//异常
$a = new A();
$a->name = "huang";
var_dump($a);

//指向同一个实例
$b = $a;
$b->name = "gang";
var_dump($a);
var_dump($b);

$instance = new A();

//指向同一个对象
$assigned = $instance;
//复制变量 值等于$instance
$reference =& $instance;

//对象值存在
$instance->var = '$assigned will have this value';

//将指向的位置设置为null
$instance = null; // $instance and $reference become null
echo "<br>---------<br>";
var_dump($instance);//null
var_dump($reference);//null
var_dump($assigned);//不是null

//自动加载函数
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

$obj = new MyClass1;
$obj2 = new MyClass2();

class MyClass
{
    protected function myFunc()
    {
        echo "MyClass::myFunc()<br>";
    }
}

class OtherClass extends MyClass
{
    // 覆盖了父类的定义
    public function myFunc()
    {
        // 但还是可以调用父类中被覆盖的方法
        parent::myFunc();
        echo "OtherClass::myFunc()<br>";
    }
}

$class = new OtherClass();
$class->myFunc();

echo "<br>---------<br>";

class PropertyTest
{
    /**  被重载的数据保存在此  */
    private $data = array();


    /**  重载不能被用在已经定义的属性  */
    public $declared = 1;

    /**  只有从类外部访问这个属性时，重载才会发生 */
    private $hidden = 2;

    public function __set($name, $value)
    {
        echo "Setting '$name' to '$value'\n";
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        echo "Getting '$name'\n";
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }

        $trace = debug_backtrace();
        trigger_error(
            'Undefined property via __get(): ' . $name .
            ' in ' . $trace[0]['file'] .
            ' on line ' . $trace[0]['line'],
            E_USER_NOTICE);
        return null;
    }

    /**  PHP 5.1.0之后版本 */
    public function __isset($name)
    {
        echo "Is '$name' set?\n";
        return isset($this->data[$name]);
    }

    /**  PHP 5.1.0之后版本 */
    public function __unset($name)
    {
        echo "Unsetting '$name'\n";
        unset($this->data[$name]);
    }

    /**  非魔术方法  */
    public function getHidden()
    {
        return $this->hidden;
    }
}


echo "<pre>\n";

$obj = new PropertyTest;

//未定义a
$obj->a = 1;// Setting 'a' to '1'
echo $obj->a . "\n\n";//Getting 'a' 1

var_dump(isset($obj->a));//true
unset($obj->a);//Unsetting 'a'
var_dump(isset($obj->a));//false

echo $obj->declared . "\n\n";//1

echo "Let's experiment with the private property named 'hidden':\n";
echo "Privates are visible inside the class, so __get() not used...\n";
echo $obj->getHidden() . "\n";//2
echo "Privates not visible outside of class, so __get() is used...\n";
//echo $obj->hidden . "\n";//报错

$a = new A();
$a->name = "huang";
$b = clone $a;
var_dump($a === $b);
$b->name = "gang";
var_dump($a);