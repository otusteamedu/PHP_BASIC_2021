<?php

/* Задача 1.

Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
если $a и $b положительные, вывести их разность; если $а и $b отрицательные, вывести их произведение; если $а и $b разных знаков, вывести их сумму;
ноль можно считать положительным числом.

*/

print_r("\nЗадача 1\n");

$a = 0;
$b = 256;

if ($a >= 0 && $b >=0) {
  print_r("a - положительное, b - положительное. Разность а - b = " . ($a - $b));
} elseif ($a < 0 && $b < 0) {
  print_r("a - отрицательное, b - отрицательное. Произведение а * b = " . ($a * $b));
} else {
  print_r("a и b - разных знаков.  Сумма а + b = " . ($a + $b));
}

/* Задача 2

Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.

*/

print_r("\nЗадача 2\n");

$a = 9;

switch ($a) {
    case 0:
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
    case 6:
    case 7:
    case 8:
    case 9:
    case 10:
    case 11:
    case 12:
    case 13:
    case 14:
    case 15:
    for ($i = $a; $i <= 15; $i++) {
        print_r($i . PHP_EOL);
    }
    break;
    default:
      print_r("Переменая а выходит из диапазона [0..15]");
}

print_r("\nЗадача 3\n");


/* Задача 3

Реализуйте функционал из Задачи 2 при помощи match

*/

$isInRange = match (true) {
    ($a >= 0 && $a <= 15) => true,
    default => false,
};

if ($isInRange) {
    for ($i = $a; $i <= 15; $i++) {
        print_r($i . PHP_EOL);
    }
} else {
    print_r("Переменая а выходит из диапазона [0..15]");
}
