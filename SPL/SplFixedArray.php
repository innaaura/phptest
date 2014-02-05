<?php
/**
 * User: Inna Beschastnaya (inna.beschastnaya@gmail.com)
 * Gorilla
 * Date: 2/3/14
 * Time: 11:00 PM
  */

SplFixedArray implements Iterator , ArrayAccess , Countable {
    /* Методы */
    public __construct ([ int $size = 0 ] )
public int count ( void )
public mixed current ( void )
public static SplFixedArray fromArray ( array $array [, bool $save_indexes = true ] )
public int getSize ( void )
public int key ( void )
public void next ( void )
public bool offsetExists ( int $index )
public mixed offsetGet ( int $index )
public void offsetSet ( int $index , mixed $newval )
public void offsetUnset ( int $index )
public void rewind ( void )
public int setSize ( int $size )
public array toArray ( void )
public bool valid ( void )
public void __wakeup ( void )
}