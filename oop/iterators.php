<?php
/**
 * User: Inna Beschastnaya (inna.beschastnaya@gmail.com)
 * Gorilla
 * Date: 2/2/14
 * Time: 11:19 PM
  */

class MyClass
{
    public $var1 = 'value 1';
    public $var2 = 'value 2';
    public $var3 = 'value 3';

    protected $protected = 'protected var';
    private   $private   = 'private var';

    function iterateVisible() {
        echo "MyClass::iterateVisible:\n";
        foreach($this as $key => $value) {
            print "$key => $value\n";
        }
    }
}

$class = new MyClass();

foreach($class as $key => $value) {
    print "$key => $value\n";
}
echo "\n";


$class->iterateVisible();


class MyIterator implements Iterator
{
    private $var = array();

    public function __construct($array)
    {
        if (is_array($array)) {
            $this->var = $array;
        }
    }

    public function rewind()
    {
        echo "перемотка в начало\n";
        reset($this->var);
    }

    public function current()
    {
        $var = current($this->var);
        echo "текущий: $var\n";
        return $var;
    }

    public function key()
    {
        $var = key($this->var);
        echo "ключ: $var\n";
        return $var;
    }

    public function next()
    {
        $var = next($this->var);
        echo "следующий: $var\n";
        return $var;
    }

    public function valid()
    {
        $key = key($this->var);
        $var = ($key !== NULL && $key !== FALSE);
        echo "верный: $var\n";
        return $var;
    }

}

$values = array(1,2,3);
$it = new MyIterator($values);

foreach ($it as $a => $b) {
    print "$a: $b\n";
}