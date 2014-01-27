<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Inna
 * Date: 1/6/14
 * Time: 8:01 PM
 * To change this template use File | Settings | File Templates.
 */

// An example callback function
function my_callback_function() {
    echo 'hello world!';
}

// An example callback method
class MyClass {
    static function myCallbackMethod() {
        echo 'Hello World!';
    }
}

// Type 1: Simple callback
call_user_func('my_callback_function');

// Type 2: Static class method call
call_user_func(array('MyClass', 'myCallbackMethod'));

// Type 3: Object method call
$obj = new MyClass();
call_user_func(array($obj, 'myCallbackMethod'));

// Type 4: Static class method call (As of PHP 5.2.3)
call_user_func('MyClass::myCallbackMethod');

// Type 5: Relative static class method call (As of PHP 5.3.0)
class A {
    public static function who() {
        echo "A\n";
    }
}

class B extends A {
    public static function who() {
        echo "B\n";
    }
}

call_user_func(array('B', 'parent::who')); // A


//=============================================================================//
//=============================================================================//
//=============================================================================//

// Our closure
$double = function($a) {
    return $a * 2;
};

// This is our range of numbers
$numbers = range(1, 5);

// Use the closure as a callback here to
// double the size of each element in our
// range
$new_numbers = array_map($double, $numbers);

print implode(' ', $new_numbers);

//=============================================================================//
//=============================================================================//
//=============================================================================//

class MyClass1 {

    public $property = 'Hello World!';

    public function MyMethod()
    {
        call_user_func(array($this, 'myCallbackMethod'));
    }

    public function MyCallbackMethod()
    {
        echo $this->property;
    }

}

//=============================================================================//
//=============================================================================//
//=============================================================================//


class mc {
    public function go(array $arr) {
        array_walk($arr, array($this, "walkIt"));
    }

    private function walkIt($val) {
        echo $val . "<br />";
    }

    public function export() {
        return array($this, 'walkIt');
    }
}

$data = array(1,2,3,4);

$m = new mc;
$m->go($data); // valid

array_walk($data, $m->export()); // will generate warning


//=============================================================================//
//=============================================================================//
//=============================================================================//


class FooController
{
    public function show($msg){
        echo "\nFoo",$msg;
    }

}
class BarController{
    public function show($msg){
        echo "\nFoo",$msg;
    }

}

$controller = new FooController;
call_user_func_array(array(new $controller, 'show'),'Hello Wordl');

$controller = new BarControllerController;
call_user_func_array(array(new $controller, 'show'),'Hello Wordl');

?>