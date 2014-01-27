<?php
/**
 * User: Inna Beschastnaya (inna.beschastnaya@gmail.com)
 * Gorilla
 * Date: 1/8/14
 * Time: 3:37 PM
 */
## testinclude.php ##

namespace Bar1;
{
    class Foo1{ }
}
namespace Bar2;
{
    class Foo2{ }
}
    ?>
## test.php ##
<?php
    include('testinclude.php');
    use Bar1\Foo1 as Foo;
    $foo1 = new Foo(); $className = 'Bar1\Foo1';
    var_dump($foo1 instanceof Bar1\Foo1);
    var_dump($foo1 instanceof $className);
    $className = 'Foo';
    var_dump($foo1 instanceof $className);
    use Bar2\Foo2;
    $foo2 = new Foo2(); $className = 'Bar2\Foo2';
    var_dump($foo2 instanceof Bar2\Foo2);
    var_dump($foo2 instanceof $className);
    $className = 'Foo2';
    var_dump($foo2 instanceof $className);
    ?>
## stdout ##
bool(true)
bool(true)
bool(false)
bool(true)
bool(true)
bool(false)