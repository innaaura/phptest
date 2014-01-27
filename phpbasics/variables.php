<?php
/**
 * User: Inna Beschastnaya (inna.beschastnaya@gmail.com)
 * Gorilla
 * Date: 1/6/14
 * Time: 8:09 PM
 */

$var = 'Bob';
$Var = 'Joe';
echo "$var, $Var";      // выведет "Bob, Joe"
echo '<br/>';
//$4site = 'not yet';     // Parse error: syntax error, unexpected T_LNUMBER, expecting T_VARIABLE or '$' in C:\localhost\phptest\phpbasics\variables.php on line 13
$_4site = 'not yet';    // верно; начинается с символа подчеркивания
echo $_4site;
echo '<br/>';
$täyte = 'mansikka';    // верно; 'ä' это (Расширенный) ASCII 228.
echo $täyte;
echo '<br/>';
$foo = 'Bob';              // Присваивает $foo значение 'Боб'
$bar = &$foo;              // Ссылка на $foo через $bar.
$bar = "My name $bar";  // Изменение $bar...
echo $bar;
echo '<br/>';
echo $foo;
echo '<br/>';
$foo = 25;
$bar = &$foo;      // Это верное присвоение.
//$bar = &(24 * 7);  // Неверно; ссылка на неименованное выражение. Parse error: syntax error, unexpected '(' in C:\localhost\phptest\phpbasics\variables.php on line 29
function test()
{
    return 25;
}
$bar = &test();    // Неверно. work
echo $bar;
echo '<br/>';
/*
// Неустановленная И не имеющая ссылок (т.е. без контекста использования) переменная; выведет NULL
var_dump($unset_var);Notice: Undefined variable: unset_var in C:\localhost\phptest\phpbasics\variables.php on line 38

// Булевое применение; выведет 'false' (Подробнее по этому синтаксису смотрите раздел о тернарном операторе)
echo($unset_bool ? "true\n" : "false\n");

// Строковое использование; выведет 'string(3) "abc"'
$unset_str .= 'abc';
var_dump($unset_str);

// Целочисленное использование; выведет 'int(25)'
$unset_int += 25; // 0 + 25 => 25
var_dump($unset_int);

// Использование в качестве числа с плавающей точкой (float/double); выведет 'float(1.25)'
$unset_float += 1.25;
var_dump($unset_float);

// Использование в качестве массива; выведет array(1) {  [3]=>  string(3) "def" }
$unset_arr[3] = "def"; // array() + array(3 => "def") => array(3 => "def")
var_dump($unset_arr);

// Использование в качестве объекта; создает новый объект stdClass (см. http://www.php.net/manual/en/reserved.classes.php)
// Выведет: object(stdClass)#1 (1) {  ["foo"]=>  string(3) "bar" }
$unset_obj->foo = 'bar';
var_dump($unset_obj);
*/
echo '<br/>';
$name="20011aa";
if(!preg_match('/^[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*/',$name))
    echo $name.' is not a valid PHP variable name';
else
    echo $name.' is valid PHP variable name';
echo '<br/>';
$a = 1; /* глобальная область видимости */

function test1()
{
    $a =1;
    echo $a; /* ссылка на переменную локальной области видимости */
}

test();
echo '<br/>';
$a = 1;
$b = 2;

function Sum()
{
    global $a, $b;
    $b = $a + $b;
}

Sum();
echo $b;
echo '<br/>';
$a = 1;
$b = 2;

function Sum1()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}

Sum1();
echo $b;
function test_global()
{
    // Большинство предопределенных переменных не являются
    // "супер", и чтобы быть доступными в локальной области
    // видимости, функции требуют указания 'global'.
    global $HTTP_POST_VARS;

    echo $HTTP_POST_VARS['name'];

    // Суперглобальные переменные доступны в любой области
    // видимости и не требуют указания 'global'.
    // Суперглобальные переменные доступны, начиная с PHP 4.1.0, а
    // использование HTTP_POST_VARS считается устаревшим.
    echo $_POST['name'];
}
echo '<br/>';
function teststatic1()
{
    $a = 0;
    echo $a;
    $a++;
}
function teststatic2()
{
    static $a = 0;
    echo $a;
    $a++;
}
echo '<br/>';
function teststaticrecursive()
{
    static $count = 0;

    $count++;
    echo $count;
    if ($count < 10) {
        test();
    }
    $count--;
}
echo '<br/>';
function foo(){
    static $int = 0;          // верно
    //static $int = 1+2;        // неверно  (поскольку это выражение)
    //static $int = sqrt(121);  // неверно  (поскольку это тоже выражение)

    $int++;
    echo $int;
}
echo '<br/>';
echo 'GLOBAL<br/>';
function test_global_ref() {
    global $obj;
    $obj = &new stdclass;
}

function test_global_noref() {
    global $obj;
    $obj = new stdclass;
}

test_global_ref();
var_dump($obj);
test_global_noref();
var_dump($obj);
echo '<br/>';
echo 'STATIC<br/>';
function &get_instance_ref() {
    static $obj;

    echo 'static object: ';
    var_dump($obj);
    echo '<br/>';
    if (!isset($obj)) {
        // Присвоить ссылку статической переменной
        $obj = &new stdclass;
    }
    $obj->property++;
    return $obj;
}

function &get_instance_noref() {
    static $obj;

    echo 'static object: ';
    var_dump($obj);
    echo '<br/>';
    if (!isset($obj)) {
        // Присвоить объект статической переменной
        $obj = new stdclass;
    }
    $obj->property++;
    return $obj;
}

$obj1 = get_instance_ref();
$still_obj1 = get_instance_ref();
echo '<br/>';
$obj2 = get_instance_noref();
$still_obj2 = get_instance_noref();
echo '<br/>';
class sample_class
{
    public function func_having_static_var($x = NULL)
    {
        static $var = 0;
        if ($x === NULL)
        { return $var; }
        $var = $x;
    }
}

$a = new sample_class();
$b = new sample_class();

echo $a->func_having_static_var()."\n";
echo $b->func_having_static_var()."\n";
// this will output (as expected):
//  0
//  0

$a->func_having_static_var(3);

echo $a->func_having_static_var()."\n";
echo $b->func_having_static_var()."\n";
// this will output:
//  3
//  3
// maybe you expected:
//  3
//  0
echo '<br/>';
class test1{}
class test2{}
class test3{}

function cache( $class )
{
    static $loaders = array();

    $loaders[ $class ] = new $class();

    var_dump( $loaders );
}
print '<pre>';
cache( 'test1' );
cache( 'test2' );
cache( 'test3' );
echo '<br/>';
class fooclass {
    var $bar = 'I am bar.';
    var $arr = array('I am A.', 'I am B.', 'I am C.');
    var $r   = 'I am r.';
}

$fooclass = new fooclass();
$bar = 'bar';
$baz = array('fooclass', 'bar', 'baz', 'quux');
echo $fooclass->$bar . "\n";
echo $fooclass->$baz[1] . "\n";

$start = 'b';
$end   = 'ar';
echo $fooclass->{$start . $end} . "\n";

$arr = 'arr';
echo $fooclass->$arr[1] . "\n";
echo $fooclass->{$arr}[1] . "\n";
echo '<br/>';
echo '<br/>';