<?php
/**
 * User: Inna Beschastnaya (inna.beschastnaya@gmail.com)
 * Gorilla
 * Date: 2/3/14
 * Time: 3:02 AM
  */

abstract SplHeap implements Iterator , Countable {
    /* Методы */
__construct ( void )
abstract int compare ( mixed $value1 , mixed $value2 )
int count ( void )
mixed current ( void )
mixed extract ( void )
void insert ( mixed $value )
bool isEmpty ( void )
mixed key ( void )
void next ( void )
void recoverFromCorruption ( void )
void rewind ( void )
mixed top ( void )
bool valid ( void )
}