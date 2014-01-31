<?php
/**
 * User: Inna Beschastnaya (inna.beschastnaya@gmail.com)
 * Gorilla
 * Date: 1/31/14
 * Time: 1:19 AM
 */

interface a
{
    const b = 'Константа интерфейса';
}

// Выведет: Константа интерфейса
echo a::b;


// Вот это, однако, не будет работать, так как
// константы перекрывать нельзя.
class b implements a
{
    const b = 'Class constant';
}