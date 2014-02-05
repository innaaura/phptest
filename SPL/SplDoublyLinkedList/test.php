<?php
/**
 * User: Inna Beschastnaya (inna.beschastnaya@gmail.com)
 * Gorilla
 * Date: 2/3/14
 * Time: 2:11 AM
  */

$dll = new SplDoublyLinkedList();

$dll->push(2);
$dll->push(3);
$dll->unshift(5);

var_dump($dll);
/*
Существуют два ортогональных набора режимов, которые могут быть установлены:
Направление итерации (одно из двух):
SplDoublyLinkedList::IT_MODE_LIFO (Стек)
SplDoublyLinkedList::IT_MODE_FIFO (Очередь)
Поведение итератора (одно из двух):
SplDoublyLinkedList::IT_MODE_DELETE (Элементы удаляются итератором)
SplDoublyLinkedList::IT_MODE_KEEP (Итератор обходит элементы, не удаляя их)
По умолчанию используется режим: SplDoublyLinkedList::IT_MODE_FIFO | SplDoublyLinkedList::IT_MODE_KEEP
*/