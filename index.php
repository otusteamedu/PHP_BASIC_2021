<?php

/*
1. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.
*/

function add($arg1, $arg2)
{
    return $arg1 + $arg2;
}

function mul($arg1, $arg2)
{
    return $arg1 * $arg2;
}

function divv($arg1, $arg2)
{

    if ($arg2 != 0) {
        return $arg1 / $arg2;
    } else {
        print_r("Function division: second parameter can not be zero!");
    }
}

function substract($arg1, $arg2)
{
    return $arg1 - $arg2;
}

/*
2. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
*/

function mathOperation($arg1, $arg2, $operation)
{

    $result = null;

    switch ($operation) {
        case 'substract':
            $result = substract($arg1, $arg2);
            break;
        case 'divv':
            $result = divv($arg1, $arg2);
            break;
        case 'mul':
            $result = mul($arg1, $arg2);
            break;
        case 'add':
            $result = add($arg1, $arg2);
            break;
        default:
            print_r("Wrong operation. Please, repeat the input!");
    }

    return $result;
}

/*
4* С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.
*/

function power($val, $pow)
{

    if ($pow > 0) {
        $result = $val * power($val, (abs($pow) - 1));
    } else if ($pow < 0) {
        $result = 1 / ($val * power($val, (abs($pow) - 1)));
    } else {
        $result = 1;
    }

    return $result;
}

/*
5* Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например: 22 часа 15 минут 21 час 43 минуты
*/

function spellTime()
{

    $timeNow = explode(":", Date("H:i:s"));

    switch ($timeNow[0]) {
        case '01':
        case '21':
            $hours = ' час ';
            break;
        case '02':
        case '03':
        case '04':
        case '22':
        case '23':
            $hours = ' часа ';
            break;
        default:
            $hours = ' часов ';
    }

    if (in_array($timeNow[1], ['11', '12', '13', '14'])) {
        $minutes = ' минут ';
    } else {

        switch (substr($timeNow[1], 1, 1)) {
            case '1':
                $minutes = ' минута ';
                break;
            case '2':
            case '3':
            case '4':
                $minutes = ' минуты ';
                break;
            default:
                $minutes = ' минут ';
        }
    }

    if (in_array($timeNow[2], ['11', '12', '13', '14'])) {
        $seconds = ' секунд ';
    } else {

        switch (substr($timeNow[2], 1, 1)) {
            case '1':
                $seconds = ' секунда ';
                break;
            case '2':
            case '3':
            case '4':
                $seconds = ' секунды ';
                break;
            default:
                $seconds = ' секунд ';
        }
    }

    print_r($timeNow[0] . $hours . $timeNow[1] . $minutes . $timeNow[2] . $seconds);
}

spellTime();


?>

<!---
3. Посмотреть на встроенные функции PHP. Используя имеющийся HTML шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.
!-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Home Work 7 Functions </title>
    </title>
</head>

<body>
    <footer>
        <div style="text-align:center; font-size:100px; font-weight:bold">
            <?= Date("Y") ?>
        </div>
    </footer>
</body>

</html>