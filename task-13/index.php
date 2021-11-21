<?
//Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу: если $a и $b положительные, вывести их разность; если $а и $b отрицательные, вывести их произведение; если $а и $b разных знаков, вывести их сумму; ноль можно считать положительным числом.
echo ("<hr>Задание 1:<br>");
$a = rand(-100,100);
$b = rand(-100,100);

function calculation ($a, $b) {
    if ($a >= 0 && $b >= 0) {
        return "разность равна ". ($a - $b);
    } else if ($a < 0 && $b < 0) {
        return "произведение равно ". ($a * $b);
    } else {
        return "сумма равна ". ($a + $b);
    }
    
}

echo ( '1) a = ' . $a . ' b = ' . $b . ' их ' . calculation($a, $b) . "<br>");

//Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.
echo ("<hr>Задание 2:<br>");
$a = rand(0,15);

echo ("2) Задано число: <b>" . $a . "</b>: ");

switch($a)
{
    case 15:
        echo "15, ";
    case 14:
        echo "14, ";
    case 13:
        echo "13, ";
    case 12:
        echo "12, ";
    case 11:
        echo "11, ";
    case 10:
        echo "10, ";
    case 9:
        echo "9, ";
    case 8:
        echo "8, ";
    case 7:
        echo "7, ";
    case 6:
        echo "6, ";
    case 5:
        echo "5, ";
    case 4:
        echo "4, ";
    case 3:
        echo "3, ";
    case 2:
        echo "2, ";
    case 1:
        echo "1, ";
    case 0:
        echo "0";

}

//Реализуйте функционал из п.2 при помощи match
echo ("<hr>Задание 3:<br>");

$a = rand(0,15);

echo ("2) Задано число: <b>" . $a . "</b>: ");

function PrintValue($var)
{
    echo $var;
}

$operation = match ($a)
{
    15 => PrintValue(15),
    14 => PrintValue(14),
    13 => PrintValue(13),
    12 => PrintValue(12),
    11 => PrintValue(11),
    10 => PrintValue(10),
    9 => PrintValue(9),
    8 => PrintValue(8),
    7 => PrintValue(7),
    6 => PrintValue(6),
    5 => PrintValue(5),
    4 => PrintValue(4),
    3 => PrintValue(3),
    2 => PrintValue(2),
    1 => PrintValue(1),
     0 => PrintValue(0),
}

?>