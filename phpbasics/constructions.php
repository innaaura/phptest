<?php
/**
 * User: Inna Beschastnaya (inna.beschastnaya@gmail.com)
 * Gorilla
 * Date: 1/8/14
 * Time: 4:23 PM
 */

/*
 PHP 5 >= 5.5.0)
В PHP 5.5 была добавлена возможность обхода массива массивов с распаковкой вложенного массива в переменные цикла,
передав list() в качестве значения.
 */
$array = array(array(1, 2), array(3, 4));
/*
foreach ($array as list($a, $b)) {
    // $a содержит первый элемент вложенного массива,
    // а $b содержит второй элемент.
    echo "A: $a; B: $b\n";
}
*/
//================================================================
$i = 0;
while (++$i) {
    switch ($i) {
        case 5:
            echo "Iteration 5<br />\n";
            break 1;  /* Выйти только из конструкции switch. */
        case 10:
            echo "Iteration 10; exit<br />\n";
            break 2;  /* Выходим из конструкции switch и из цикла while. */
        default:
            break;
    }
}
//5.4.0	break 0; больше не допускается. В предыдущих версиях это воспринималось точно также как и break 1;.
//5.4.0	 Удалена возможность передачи переменных (например, $num = 2; break $num;) в виде числового аргумента.
//===========================================
$arr = array(1, 2, 3, 5, 8);
while (list($key, $value) = each($arr)) {
    if (!($key % 2)) { // пропуск нечетных чисел
        continue;
    }
    //do_something_odd($value);
}

$i = 0;
while ($i++ < 5) {
    echo "Out<br />\n";
    while (1) {
        echo "Middle<br />\n";
        while (1) {
            echo "Inside<br />\n";
            continue 3;
        }
        echo "Это никогда не будет выведено.<br />\n";
    }
    echo "Это тоже.<br />\n";
}
//5.4.0	continue 0; больше не допускается. В предыдущих версиях это воспринималось точно также как и break 1;.
//5.4.0	 Убрана возможность задавать переменную (например, $num = 2; continue $num;) в качестве числового аргумента.
//Замечание: Обратите внимание, что в отличие от некоторых других языков, оператор continue применяется в конструкциях switch и действует подобно оператору break. Если у вас конструкция switch находится внутри цикла, и вам необходимо перейти к следующей итерации цикла, используйте continue 2.
//Заметьте, что конструкция swich/case использует неточные сравнения (==).
switch ($i) {
    case 0:
        echo "i = 0";
    case 1:
        echo "i = 1";
    case 2:
        echo "i = 2";
}
//========================================
echo 'DECLARE<br/>';
declare(ticks=1);

// Функция, исполняемая при каждом тике
function tick_handler()
{
    echo "tick_handler() called<br>";
}

register_tick_function('tick_handler');

$a = 1;

if ($a > 0) {
    $a += 2;
    print($a);echo '<br/>';
}
echo '<br/>';echo '<br/>';echo '<br/>';
$a = 1;
tick_handler();

if ($a > 0) {
    $a += 2;
    tick_handler();
    print($a);echo '<br/>';
    tick_handler();
}
tick_handler();

declare(encoding='ISO-8859-1');

//This is a very simple example using ticks to execute a external script to show rx/tx data from the server
function traf(){
    passthru( './traf.sh' );
    echo "<br />\n";
    flush(); // keeps it flowing to the browser...
    sleep( 1 );
}

register_tick_function( "traf" );

declare( ticks=1 ){
while( true ){}   // to keep it running...
}
/*
contents of traf.sh:
# Shows TX/RX for eth0 over 1sec
#!/bin/bash

TX1=`cat /proc/net/dev | grep "eth0" | cut -d: -f2 | awk '{print $9}'`
RX1=`cat /proc/net/dev | grep "eth0" | cut -d: -f2 | awk '{print $1}'`
sleep 1
TX2=`cat /proc/net/dev | grep "eth0" | cut -d: -f2 | awk '{print $9}'`
RX2=`cat /proc/net/dev | grep "eth0" | cut -d: -f2 | awk '{print $1}'`

echo -e "TX: $[ $TX2 - $TX1 ] bytes/s \t RX: $[ $RX2 - $RX1 ] bytes/s"
#--= the end. =--
*/