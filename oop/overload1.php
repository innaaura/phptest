<?php
/**
 * User: Inna Beschastnaya (inna.beschastnaya@gmail.com)
 * Gorilla
 * Date: 2/2/14
 * Time: 3:06 PM
  */

class MethodTest {
    public function __call($name, $arguments) {
        // Замечание: значение $name регистрозависимо.
        echo "Вызов метода '$name' "
            . implode(', ', $arguments). "\n";
    }

    /**  Начиная с версии PHP 5.3.0  */
    public static function __callStatic($name, $arguments) {
        // Замечание: значение $name регистрозависимо.
        echo "Вызов статического метода '$name' "
            . implode(', ', $arguments). "\n";
    }
}

$obj = new MethodTest;
$obj->runTest('в контексте объекта');

MethodTest::runTest('в статическом контексте');  // Начиная с версии PHP 5.3.0