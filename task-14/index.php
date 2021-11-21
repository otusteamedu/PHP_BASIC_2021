<?php
//Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.
$a = rand(-100,100);
$b = rand(-100,100);

function basicСalculations ($a, $b) {
    return "Сложение: " . ($a + $b) . "<br> Вычетание: " . ($a - $b) . "<br> Произведение: " . ($a * $b) . "<br> Деление: " . ($a / $b);
};


echo ("Задание 1:<br>" . basicСalculations($a, $b) . "<br>");

//Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. 
//В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
$arg1 = rand(-100,100);
$arg2 = rand(1,100);
$operation = ['Идентичность', 'Отрицание', 'Сложение', 'Вычитание', 'Умножение', 'Деление', 'Деление по модулю', 'Возведение в степень'];

function mathOperation($arg1, $arg2, $operation) {
    switch ( $operation) {
        case 'Идентичность':
            return (+$arg1 . ", " .+$arg2);
            break;
        case 'Отрицание':
            return (-$arg1 . ", " .-$arg2);
            break;
        case 'Сложение':
            return ($arg1 + $arg2);
            break;
        case 'Вычитание':
            return ($arg1 - $arg2);
            break;
        case 'Умножение':
            return ($arg1 * $arg2);
            break;
        case 'Деление':
            return ($arg1 / $arg2);
            break;
        case 'Деление по модулю':
            return ($arg1 % $arg2);
            break;
        case 'Возведение в степень':
            return ($arg1 ** $arg2);
            break;
    }
};

echo ("<hr>Задание 2: входные значения " . $arg1 . " и " . $arg2 . "<br>");
foreach ($operation as $key => $value) {
    echo ($value .": " . mathOperation($arg1, $arg2, $value) . "<br>");
}

// Посмотреть на встроенные функции PHP. Используя имеющийся HTML шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.
echo ("<hr>Задание 3:");
?>
<? 
  $DateTime = new DateTime('NOW');
?>

<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <title>Klean</title>
    </head>

    <body>
    <header>
        <div class="navbar navbar-expand-lg">
        <div class="container d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start header">

            <a href="/" class="d-flex logo">
            <img src="img/Logo.png" alt="Логотип">
            </a>

            <nav class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown_1" data-bs-toggle="dropdown"
                    aria-expanded="true">Home</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown_1" data-bs-popper="none">
                    <li><a class="dropdown-item" href="#">1</a></li>
                    <li><a class="dropdown-item" href="#">2</a></li>
                    <li><a class="dropdown-item" href="#">3</a></li>
                </ul>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown_2" data-bs-toggle="dropdown"
                    aria-expanded="true">Service</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown_2" data-bs-popper="none">
                    <li><a class="dropdown-item" href="#">1</a></li>
                    <li><a class="dropdown-item" href="#">2</a></li>
                    <li><a class="dropdown-item" href="#">3</a></li>
                </ul>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown_3" data-bs-toggle="dropdown"
                    aria-expanded="true">Works</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown_3" data-bs-popper="none">
                    <li><a class="dropdown-item" href="#">1</a></li>
                    <li><a class="dropdown-item" href="#">2</a></li>
                    <li><a class="dropdown-item" href="#">3</a></li>
                </ul>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown_4" data-bs-toggle="dropdown"
                    aria-expanded="true">News</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown_4" data-bs-popper="none">
                    <li><a class="dropdown-item" href="#">1</a></li>
                    <li><a class="dropdown-item" href="#">2</a></li>
                    <li><a class="dropdown-item" href="#">3</a></li>
                </ul>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown_5" data-bs-toggle="dropdown"
                    aria-expanded="true">Contact</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown_5" data-bs-popper="none">
                    <li><a class="dropdown-item" href="#">1</a></li>
                    <li><a class="dropdown-item" href="#">2</a></li>
                    <li><a class="dropdown-item" href="#">3</a></li>
                </ul>
                </li>
            </ul>
            </nav>

            <div class="text-end">
            <button type="button" class="btn btn-login">Log In</button>
            <button type="button" class="btn btn-signup">Sign Up</button>
            </div>

            <button class="navbar-toggler navbar-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

        </div>
        </div>
    </header>
    <main>

        <section class="container showcase pb-5">
        <div class="row">

            <div class="order-1 order-lg-0 col-lg-5 col-md-12 mr-auto showcase_text">
            <h1 class="fw-light"><span class="title-1">Bootstrap&nbsp;5&nbsp;theme</span> crafted&nbsp;by&nbsp;<span
                class="title-2">ThemeWagon</span></h1>
            <p class="lead text-muted">ThemeWagon offers an wide array of category-oriented Free and Premium Bootstrap
                HTML Templates and Themes. </p>
            <a href="#" class="btn btn-primary">Check Demo</a>
            </div>

            <div class="order-0 order-lg-1 col-lg-7 col-md-12 mr-auto">
            <img class="showcase_img" src="img/schowcase/Illusration.png" alt="" width="100%">
            </div>
        </div>

        </section>

    </main>
    <?
        require_once("footer.php");
    ?>
    </body>

</html>

<?
// *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.
echo ("<hr>Задание 4:" . "<br>");

$val = rand(0,10);
$pow = rand(1,5);

function power($val, $pow) {
    if ($pow != 0) {
        return $val * power($val, $pow - 1);
    } else {
        return 1;
    }
};

echo ($val . " ** " . $pow . " = " .power($val, $pow));

// *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например: 22 часа 15 минут 21 час 43 минуты
echo ("<hr>Задание 5:" . "<br>");

$endingsMinuteSecond = [ "", "а", "ы", "ы", "ы", "", "", "", "" ];

$endingsHour = [ "ов", "", "а", "а", "а", "ов", "ов", "ов", "ов", "ов", "ов", "ов", "ов", "ов", "ов", "ов", "ов", "ов", "ов", "ов", "ов", "", "а", "а", "а" ];


function getDateTime () {
    global $endingsHour;
    global $endingsMinuteSecond;
    $DateTime = new DateTime('NOW');
    return $DateTime ->format('H') . " час" . $endingsHour[$DateTime ->format('H')] . " " . $DateTime->format('i') . " минут" . $endingsMinuteSecond[substr($DateTime->format('i'), -1)] . " " . $DateTime->format('s') . " секунд".  $endingsMinuteSecond[substr($DateTime->format('s'), -1)];
};

echo getDateTime();