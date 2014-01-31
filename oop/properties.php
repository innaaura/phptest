<?php
/**
 * User: Inna Beschastnaya (inna.beschastnaya@gmail.com)
 * Gorilla
 * Date: 1/31/14
 * Time: 12:56 AM
 */
class SimpleClass
{
    // неправильное определение свойств:
    public $var1 = 'hello ' . 'world';
    public $var2 = <<<EOD
hello world
EOD;
    public $var3 = 1+2;
    public $var4 = self::myStaticMethod();
    public $var5 = $myVar;

    // правильное определение свойств:
    public $var6 = myConstant;
    public $var7 = array(true, false);

    // Это разрешено только в PHP 5.3.0 и более поздних версиях.
    public $var8 = <<<'EOD'
hello world
EOD;
}
?>