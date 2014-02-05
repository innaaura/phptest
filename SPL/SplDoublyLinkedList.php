<?php
/**
 * User: Inna Beschastnaya (inna.beschastnaya@gmail.com)
 * Gorilla
 * Date: 2/3/14
 * Time: 12:45 AM
  */
SplDoublyLinkedList implements Iterator , ArrayAccess , Countable {
    /* Методы */
    __construct ( void )
    mixed bottom ( void )
    int count ( void )
    mixed current ( void )
    int getIteratorMode ( void )
    bool isEmpty ( void )
    mixed key ( void )
    void next ( void )
    bool offsetExists ( mixed $index )
    mixed offsetGet ( mixed $index )
    void offsetSet ( mixed $index , mixed $newval )
    void offsetUnset ( mixed $index )
    mixed pop ( void )
    void prev ( void )
    void push ( mixed $value )
    void rewind ( void )
    public string serialize ( void )
    void setIteratorMode ( int $mode )
    mixed shift ( void )
    mixed top ( void )
    public void unserialize ( string $serialized )
    void unshift ( mixed $value )
    bool valid ( void )
}