<?php
/**
 * User: Inna Beschastnaya (inna.beschastnaya@gmail.com)
 * Gorilla
 * Date: 1/31/14
 * Time: 1:18 AM
 */

interface a
{
    public function foo();
}

interface b extends a
{
    public function baz(Baz $baz);
}

// Это сработает
class c implements b
{
    public function foo()
    {
    }

    public function baz(Baz $baz)
    {
    }
}

// Это не сработает и выдаст фатальную ошибку
class d implements b
{
    public function foo()
    {
    }

    public function baz(Foo $foo)
    {
    }
}