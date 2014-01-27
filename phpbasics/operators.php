<?php
/**
 * User: Inna Beschastnaya (inna.beschastnaya@gmail.com)
 * Gorilla
 * Date: 1/7/14
 * Time: 7:06 PM
 */

$a = 3 * 3 % 5; // (3 * 3) % 5 = 4
echo $a;
echo '<br/>';
$a = true ? 0 : true ? 1 : 2; // (true ? 0 : true) ? 1 : 2 = 2
echo $a;
echo '<br/>';
$a = 1;
$b = 2;
$a = $b += 3; // $a = ($b += 3) -> $a = 5, $b = 5
echo $a;
echo '<br/>';
// при совместном использовании ++ и + результат будет неопределенным
$a = 1;
echo ++$a + $a++; // может вывести 4 или 5
echo $a;
echo '<br/>';
echo (5 % 3)."\n";           // выводит 2
echo (5 % -3)."\n";          // выводит 2
echo (-5 % 3)."\n";          // выводит -2
echo (-5 % -3)."\n";         // выводит -2
echo '<br/>';
echo 3333333333 % 3; // -1
echo '<br/>';
$a = ($b = 4) + 5; // $a теперь равно 9, а $b было присвоено 4.
echo '<br/>';
$a = 3;
$a += 5; // устанавливает $a в 8, как если бы мы написали: $a = $a + 5;
$b = "Hello ";
$b .= "There!"; // устанавливает $b в "Hello There!",  как и $b = $b . "There!";
echo '<br/>';
$a = 3;
$b = &$a; // $b - это ссылка на $a

print "$a\n"; // печатает 3
print "$b\n"; // печатает 3

$a = 4; // меняем $a

print "$a\n"; // печатает 4
print "$b\n"; // также печатает 4, так как $b является ссылкой на $a,а значение переменной $a успело измениться
echo '<br/>';
$a = '';
$b = '';
$a .= $b .= " 1 ";
print "a: $a\n"; // печатает 4
echo '<br/>';
print "b: $b\n";
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';