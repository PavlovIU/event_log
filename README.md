# Event log #

## **Задача**
Имеется файл events.log вида:

    [2018-04-11 03:13:57] ОК

    [2018-04-11 03:14:04] OK

    [2018-04-11 03:14:04] NOK

    [2018-04-11 03:14:09] OK

    ...

Написать программу, которая считывает файл и выводит число событий NOK за каждую минуту.

## **Пример запуска скрипта**
#!/bin/bash

php parser.php

## **Результат**

Array

(

    [2018-04-11] => Array
        (
            [03:13] => 1
            [03:14] => 2
            [03:15] => 2
            [03:16] => 3
        )

    [2018-05-11] => Array
        (
            [03:13] => 3
            [03:14] => 2
            [03:15] => 1
            [03:16] => 3
            [03:17] => 1
        )

)