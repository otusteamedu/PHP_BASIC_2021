<?
//С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.
echo ("<hr>Задание 1:" . "<br>");

function getNumbersWithoutRemainder () {
    $a = 0;
    $b = "";
    while ($a <= 100) {
        if ($a % 3 == 0) {
            $b .= $a . " ";
        }
        $a++;
    };
    return $b;
}

echo (getNumbersWithoutRemainder());

//С помощью цикла do…while написать функцию для вывода чисел от 0 до 10
echo ("<hr>Задание 2:" . "<br>");
$i = 0;

do {
    if ($i == 0) {
        echo ($i . " - это ноль." . "<br>");
    } else if ($i % 2 == 0) {
        echo ($i . " - четное число." . "<br>");
    } else {
        echo ($i . " - нечетное число." . "<br>");
    }; 
    $i++;
} while ($i <= 10);

//Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким:
// Московская область:
// Москва, Зеленоград, Клин
// Ленинградская область:
// Санкт-Петербург, Всеволожск, Павловск, Кронштадт
// Рязанская область … (названия городов можно найти на maps.yandex.ru)
echo ("<hr>Задание 3:" . "<br>");

$areas = [
    "Ярославская область" => ["Ярославль", "Рыбинск", "Переславль-Залесский"],
    "Челябинская область" => ["Челябинск", "Златоуст", "Магнитогорск"],
    "Ульяновская область" => ["Ульяновск", "Криуши", "Липки"],
    "Тюменская область" => ["Тюмень", "Сургут", "Новый Уренгой"],
    "Тульская область" => ["Тула", "Белёв", "Венёв"],
];

foreach ($areas as $key => $value) {
    echo ($key . ": " . "<br>");
    foreach ($value as $city) {
        echo ($city . ", ");
    }
    echo ("<br>");
}

// Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
// Написать функцию транслитерации строк.
echo ("<hr>Задание 4:" . "<br>");

function translit(string $var):string
{ 
    $converter = array(
        'а' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',    'д' => 'd',
        'е' => 'e',    'ё' => 'e',    'ж' => 'zh',   'з' => 'z',    'и' => 'i',
        'й' => 'y',    'к' => 'k',    'л' => 'l',    'м' => 'm',    'н' => 'n',
        'о' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
        'у' => 'u',    'ф' => 'f',    'х' => 'h',    'ц' => 'c',    'ч' => 'ch',
        'ш' => 'sh',   'щ' => 'sch',  'ь' => '',     'ы' => 'y',    'ъ' => '',
        'э' => 'e',    'ю' => 'yu',   'я' => 'ya',
        'А' => 'A',    'Б' => 'B',    'В' => 'V',    'Г' => 'G',    'Д' => 'D',
        'Е' => 'E',    'Ё' => 'E',    'Ж' => 'Zh',   'З' => 'Z',    'И' => 'I',
        'Й' => 'Y',    'К' => 'K',    'Л' => 'L',    'М' => 'M',    'Н' => 'N',
        'О' => 'O',    'П' => 'P',    'Р' => 'R',    'С' => 'S',    'Т' => 'T',
        'У' => 'U',    'Ф' => 'F',    'Х' => 'H',    'Ц' => 'C',    'Ч' => 'Ch',
        'Ш' => 'Sh',   'Щ' => 'Sch',  'Ь' => '',     'Ы' => 'Y',    'Ъ' => '',
        'Э' => 'E',    'Ю' => 'Yu',   'Я' => 'Ya',
    );

    $value = strtr($var, $converter);
	return $value;
};

echo (translit('Русский язык'));

// Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.
echo ("<hr>Задание 5:" . "<br>");

function replacingSpaces(string $var):string
{
    return str_replace(" ", "_", $var);
}

echo (replacingSpaces("Функция, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку."));

// В имеющемся шаблоне сайта заменить статичное меню (ul - li) на генерируемое через PHP. Необходимо представить пункты меню как элементы массива и вывести их циклом. Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.
echo ("<hr>Задание 6:" . "<br>");

$nav = [
    "Home" => ["1", "2", "3"],
    "Service" => ["1", "2", "3"],
    "Works" => ["1", "2", "3"],
    "News" => ["1", "2", "3"],
    "Contact" => ["1", "2", "3"],
];
?>
<!DOCTYPE html>
<html lang="ru">

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

          <?
          foreach ($nav as $key => $value) {
             ?>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown_1" data-bs-toggle="dropdown"
                    aria-expanded="true"><?echo $key;?></a>
                <ul class="dropdown-menu" aria-labelledby="dropdown_1" data-bs-popper="none">
                    <? foreach ($value as $val) {
                        echo('<li><a class="dropdown-item" href="#">'. $val .'</a></li>');
                        }
                    ?>
                </ul>
                </li>
             <?
          }
          ?>
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
</body>

</html>
<?
// Вывести с помощью цикла for числа от 0 до 9, НЕ используя тело цикла. То есть выглядеть должно так: for (…){ // здесь пусто}
echo ("<hr>Задание 7:" . "<br>");

function printI(int $var)
{
    echo ($var);
}

for ($i=0; $i <= 9; printI($i++)) { 
}

// Вывести с помощью цикла for числа от 0 до 9, НЕ используя тело цикла. То есть выглядеть должно так: for (…){ // здесь пусто}
echo ("<hr>Задание 8:" . "<br>");

function cityK($value)
{
    $str = "";

    foreach ($value as  $city) {
        foreach ($city as $item) {
            if (substr($item, 0, 2) == 'К') {
                $str .= " " . $item;
            }
        }
    }

    return $str;
}

echo cityK($areas);

// Объединить две ранее написанные функции в одну, которая получает строку на русском языке, производит транслитерацию и замену пробелов на подчеркивания (аналогичная задача решается при конструировании url-адресов на основе названия статьи в блогах).
echo ("<hr>Задание 9:" . "<br>");

function constructingUrlAddresses($var):string
{
    $converter = array(
        'а' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',    'д' => 'd',
        'е' => 'e',    'ё' => 'e',    'ж' => 'zh',   'з' => 'z',    'и' => 'i',
        'й' => 'y',    'к' => 'k',    'л' => 'l',    'м' => 'm',    'н' => 'n',
        'о' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
        'у' => 'u',    'ф' => 'f',    'х' => 'h',    'ц' => 'c',    'ч' => 'ch',
        'ш' => 'sh',   'щ' => 'sch',  'ь' => '',     'ы' => 'y',    'ъ' => '',
        'э' => 'e',    'ю' => 'yu',   'я' => 'ya',
        'А' => 'A',    'Б' => 'B',    'В' => 'V',    'Г' => 'G',    'Д' => 'D',
        'Е' => 'E',    'Ё' => 'E',    'Ж' => 'Zh',   'З' => 'Z',    'И' => 'I',
        'Й' => 'Y',    'К' => 'K',    'Л' => 'L',    'М' => 'M',    'Н' => 'N',
        'О' => 'O',    'П' => 'P',    'Р' => 'R',    'С' => 'S',    'Т' => 'T',
        'У' => 'U',    'Ф' => 'F',    'Х' => 'H',    'Ц' => 'C',    'Ч' => 'Ch',
        'Ш' => 'Sh',   'Щ' => 'Sch',  'Ь' => '',     'Ы' => 'Y',    'Ъ' => '',
        'Э' => 'E',    'Ю' => 'Yu',   'Я' => 'Ya',
    );

    $value = strtr($var, $converter);
	return str_replace(" ", "_", $value);
}
echo (constructingUrlAddresses("Объединить две ранее написанные функции в одну"));
