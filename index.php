<?php

/*
1. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.
*/

function add($a, $b)
{
    return $a + $b;
}

function mul($a, $b)
{
    return $a * $b;
}

function divv($a, $b)
{

    if ($b != 0) {
        return $a / $b;
    } else {
        print_r("Fuction division: second parameter can not be zero!");
    }
}

function substract($a, $b)
{
    return $a - $b;
}




/*
2. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
*/

function mathOperation($arg1, $arg2, $operation)
{
}



/*
4* С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.
*/

/*
5* Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например: 22 часа 15 минут 21 час 43 минуты
*/

/*
3. Посмотреть на встроенные функции PHP. Используя имеющийся HTML шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.
*/
?>
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

</body>

</html>