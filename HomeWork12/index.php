<?php

/*
 * 1. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.
 */
function addTwoNumbers(float $arg1, float $arg2)
{
    return ($arg1 + $arg2);
}

function substractTwoNumbers(float $arg1, float $arg2)
{
    return ($arg1 - $arg2);
}

function multuplyTwoNumbers(float $arg1, float $arg2)
{
    return ($arg1 * $arg2);
}

function divideTwoNumbers(float $arg1, float $arg2)
{
    if ($arg2 == 0) {
        return "На ноль делить нельзя!";
    }
    return ($arg1 / $arg2);
}

/*
 * 2.Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения
 * аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну
 * из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
 */

function mathOperation(float $arg1, float $arg2, string $operation)
{
    switch ($operation) {
        case '+' :
            return addTwoNumbers($arg1, $arg2);
            break;
        case '-' :
            return substractTwoNumbers($arg1, $arg2);
            break;
        case '*' :
            return multuplyTwoNumbers($arg1, $arg2);
            break;
        case '/' :
            return divideTwoNumbers($arg1, $arg2);
            break;
        default:
            return 'В качестве оператора передайте одно из значений: +, -, * или /';
    }
}

/*
 * *С помощью рекурсии организовать функцию возведения числа в степень.
 * Формат: function power($val, $pow), где $val – заданное число, $pow – степень.
 */
function power($val, $pow)
{
    if ($pow == 1) {
        return $val;
    } else {
        return $val * power($val, $pow - 1);
    }
}

/*
 * Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями,
 * например: 22 часа 15 минут 21 час 43 минуты
 */
function declensionWords(int $number, array $aWords)
{
    if (count($aWords) != 3) {
        return 'В массив $aWords необходимо передать 3 аргумента - 3 формы склоняемого слова';
    }
    $last = $number % 10;
    if (($number >= 5 && $number <= 20) || $last == 0 || $last >= 5) {
        return $aWords[2];
    } elseif ($last == 1) {
        return $aWords[0];
    } else {
        return $aWords[1];
    }
}

function whatTimeIsItNow()
{
    $hrs = date('H');
    $min = date('i');
    $aHouseWords = ['час', 'часа', 'часов'];
    $aMinuteWords = ['минута', 'минуты', 'минут'];
    return "$hrs " .declensionWords($hrs, $aHouseWords) . " $min " . declensionWords($min, $aMinuteWords);
}

echo(whatTimeIsItNow());