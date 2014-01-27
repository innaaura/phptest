<?php

// Single line comment

# Single line comment

/* Multi-line
comment
*/

/**
 * API Documentation Example
 *
 * @param string $bar
 */

//echo 10; // 10
//print(10); // 10
//var_dump(echo 10); //Parse error: syntax error, unexpected T_ECHO, expecting ')' in C:\localhost\phptest\phpbasics.php on line 19
//var_dump(print (10)); // int(1)
//die(10); //empty
//die('10'); // 10
//var_dump(die('10')); // 10
echo (int) ((0.1 + 0.7) * 10); //7
echo '<br/>';
echo ((0.1 + 0.7) * 10); //8
echo '<br/>';
echo '3' + '0.5'; //3.5
echo '<br/>';
echo print('2');//21
echo '<br/>';
echo print('2') + 1; //31
echo '<br/>';
echo '3' + '0.5' , print('2') + 1;//3.531
echo '<br/>';
$a = 'Test';
echo ++$a; //Tesu
echo '<br/>';
$x = 1;
echo $x << 32; // 1
echo '<br/>';
echo $x * pow (2, 32); //4294967296
echo '<br/>';
$x = 10.88;
echo (int) $x;//10
echo '<br/>';
$name = 'foo';
$$name = 'bar';
echo $foo; // Displays ’bar’
echo '<br/>';
$name = '123';/* 123 is your variable name, this would normally be invalid. */
$$name = '456';// Again, you assign a value
echo ${'123'};// Finally, using curly braces you can output ’456’
echo '<br/>';
function myFunc() {
    echo 'myFunc!';
}
$f = 'myFunc';
$f(); // will call myFunc();
echo '<br/>';
echo isset ($xyz);//empty
echo '<br/>';
define('EMAIL', 'davey@php.net'); // Valid name
echo EMAIL; // Displays ’davey@php.net’
echo '<br/>';
//$a = int('Test'); //Fatal error: Call to undefined function int() in C:\localhost\phptest\phpbasics.php on line 66 Call Stack: 0.0017 341448 1. {main}() C:\localhost\phptest\phpbasics.php:0
//echo ++$a;
echo '<br/>';
$x = 0;
echo ~$x; // will output -1
echo '<br/>';
$x = 1;
echo $x << 1; // Outputs 2
echo '<br/>';
echo $x << 2; // Outputs 4
echo '<br/>';
$x = 8;
echo $x >> 1; // Outputs 4
echo '<br/>';
echo $x >> 2; // Outputs 2
echo '<br/>';
$x = 1;
echo $x << 32;
echo '<br/>';
echo $x * pow (2, 32);
echo '<br/>';
$left = "ABC";
$right = "ABD";
echo (int) ($left > $right);
echo '<br/>';
$left = 'apple';
$right = 'Apple';
echo (int) ($left > $right);
echo '<br/>';
$a_bool = TRUE;   // логический
$a_str  = "foo";  // строковый
$a_str2 = 'foo';  // строковый
$an_int = 12;     // целочисленный
echo gettype($a_bool); // выводит: boolean
echo '<br/>';
echo gettype($a_str);  // выводит: string
echo '<br/>';
// Если это целое, увеличить на четыре
if (is_int($an_int)) {
    $an_int += 4;
    echo $an_int;
    echo '<br/>';
}
// Если $a_bool - это строка, вывести ее (ничего не выводит)
if (is_string($a_bool)) {
    echo "Строка: $a_bool";
}
echo '<br/>';
echo 'BOOLEAN<br/>';
var_dump((bool) "");        // bool(false)
var_dump((bool) 1);         // bool(true)
var_dump((bool) -2);        // bool(true)
var_dump((bool) "foo");     // bool(true)
var_dump((bool) 2.3e5);     // bool(true)
var_dump((bool) array(12)); // bool(true)
var_dump((bool) array());   // bool(false)
var_dump((bool) "false");   // bool(true)
echo '<br/>';
$x=TRUE;
$y=FALSE;
$z=$y OR $x;
var_dump($z); // false
echo '<br/>';
$z=$y || $x;
var_dump($z); // true
echo '<br/>';
echo 'STRING<br/>';
$foo = 1 + "10.5";                // $foo это float (11.5)
echo "\$foo==$foo; type: " . gettype ($foo) . "<br />\n";
$foo = 1 + "-1.3e3";              // $foo это float (-1299)
echo "\$foo==$foo; type: " . gettype ($foo) . "<br />\n";
$foo = 1 + "bob-1.3e3";           // $foo это integer (1)
echo "\$foo==$foo; type: " . gettype ($foo) . "<br />\n";
$foo = 1 + "bob3";                // $foo это integer (1)
echo "\$foo==$foo; type: " . gettype ($foo) . "<br />\n";
$foo = 1 + "10 Small Pigs";       // $foo это integer (11)
echo "\$foo==$foo; type: " . gettype ($foo) . "<br />\n";
$foo = 4 + "10.2 Little Piggies"; // $foo это float (14.2)
echo "\$foo==$foo; type: " . gettype ($foo) . "<br />\n";
$foo = "10.0 pigs " + 1;          // $foo это float (11)
echo "\$foo==$foo; type: " . gettype ($foo) . "<br />\n";
$foo = "10.0 pigs " + 1.0;        // $foo это float (11)
echo "\$foo==$foo; type: " . gettype ($foo) . "<br />\n";
echo '<br/>';
$foo = "0";  // $foo это строка (ASCII 48)
echo "\$foo==$foo; type: " . gettype ($foo) . "<br />\n";
$foo += 2;   // $foo теперь целое число (2)
echo "\$foo==$foo; type: " . gettype ($foo) . "<br />\n";
$foo = $foo + 1.3;  // $foo теперь число с плавающей точкой (3.3)
echo "\$foo==$foo; type: " . gettype ($foo) . "<br />\n";
$foo = 5 + "10 Little Piggies"; // $foo это целое число (15)
echo "\$foo==$foo; type: " . gettype ($foo) . "<br />\n";
$foo = 5 + "10 Small Pigs";     // $foo это целое число (15)
echo "\$foo==$foo; type: " . gettype ($foo) . "<br />\n";
echo '<br/>';
echo '<br/>';
echo '<br/>';
?>