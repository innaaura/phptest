<?php
function foo()
{
    function bar()
    {
        echo "Я не существую пока не будет вызвана foo().\n";
    }
}

/* Мы пока не можем обратиться к bar(),
   поскольку она еще не определена. */

foo();

/* Теперь мы можем вызвать функцию bar(),
   обработка foo() сделала ее доступной. */

bar();

?>