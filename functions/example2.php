<?php

function overload()
{
    $overloadFn = array();

    // key = count arguments, value = callback function.
    $overloadFn[0] = function() {
        return print nl2br("Zero argument. \n");
    };
    $overloadFn[1] = function($a) {
        return print nl2br("One argument. Result: $a \n");
    };
    $overloadFn[2] = function($a,$b) {
        return print nl2br("Two argument. Result: $a, $b \n");
    };
    $overloadFn[4] = function($a,$b,$c,$d) {
        return print nl2br("Four argument. Result: $a, $b, $c, $d \n");
    };

    $countArgs = func_num_args();
    $valueArgs = func_get_args();

    if( isset($overloadFn[ $countArgs ]) )
    {
        return call_user_func_array( $overloadFn[ $countArgs ], $valueArgs );
    }
    trigger_error("Wrong number of arguments!", E_USER_WARNING);

}

// OVERLOAD
overload(); // Zero argument.
overload(1); // One argument. Result: 1
overload(1,2); // Two argument. Result: 1, 2
overload(1,2,3); // Warning: Wrong number of arguments!
overload(1,2,3,4); // Four argument. Result: 1, 2, 3, 4 
overload(1,2,3,4,5); // Warning: Wrong number of arguments!

?>