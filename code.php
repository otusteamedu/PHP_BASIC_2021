<?php
#Задание 1

        $num = 0;
            while ($num < 100) {
            if ($num % 3 === 0) {
            echo $num.PHP_EOL;
            }
            ++$num;
            }
    
    #Задание 2

        $i = 0;

            do {
            if ($i == 0) {
                echo ($i . " - это ноль." . "<br>");
            } elseif ($i % 2 == 0) {
                echo ($i . " - четное число." . "<br>");
            } elseif ($i % 2 != 0) {
                echo ($i . " - нечетное число." . "<br>");
            }; 
            $i++;
            } 
            while ($i <= 10);
    #Задание 3

        $land = [
        'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
        'Ленинградская область' => ['Санкт-Петербург', 'Всесоложск', 'Павловск'],
        'Ульяновская область' => ['Рязань', 'Скопин', 'Сасово']
        ];
    
            foreach ($land as $key => $elem) {
                echo $key . ': ' . '<br>';
                
                foreach ($elem as $city) {
                    echo $city . ', '; //Так и не понял, как удалить в выводе лишнюю запятую.
                }
                echo '<br>' . '<br>';
            }
    
    #Задание 4
        function translit(string $str):string
        { 
            $arr = [
                'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'e',
                'ж' => 'zh', 'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm',
                'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u',
                'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch', 'ь' => '',
                'ы' => 'y', 'ъ' => '', 'э' => 'e', 'ю' => 'yu', 'я' => 'ya', 'А' => 'A', 'Б' => 'B',
                'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'E', 'Ж' => 'Zh', 'З' => 'Z',
                'И' => 'I', 'Й' => 'Y', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O',
                'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U', 'Ф' => 'F', 'Х' => 'H',
                'Ц' => 'C', 'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sch', 'Ь' => '', 'Ы' => 'Y', 'Ъ' => '',
                'Э' => 'E', 'Ю' => 'Yu', 'Я' => 'Ya',
            ];
        
            $value = strtr($str, $arr);
            return $value;
        };
        
        echo translit('абвг деёжзиклмн опрстуфх цчщьыъэюя АБВГДЕЁЖЗИ КЛМНОПРСТУ ФХЦЧШЩЬЫ ЪЭЮЯ');    
        
    #Задание 5

        function replace(string $str):string {   
            return str_replace(' ', '_', $str);
        }

        echo replace('order filing out');

    #Задание 6
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
        
        </div>
      </header>
    </body>
    
    </html>
    
    <?php
    #Задание 7

        for ($i = 0 -1; $i < 9; print(++$i.PHP_EOL));

    #Задание 8

    function cityK($elem) {
        $str = '';
    
        foreach ($elem as  $city) {
            foreach ($city as $item) {
                if (substr($item, 0, 2) === 'К') {
                    $str .= '' . $item;
                }
            }
        }
    
        return $str;
    }
    
    echo cityK($land);

    #Задание 9

    function translit2(string $str):string
        { 
            $arr = [
                'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'e',
                'ж' => 'zh', 'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm',
                'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u',
                'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch', 'ь' => '',
                'ы' => 'y', 'ъ' => '', 'э' => 'e', 'ю' => 'yu', 'я' => 'ya', 'А' => 'A', 'Б' => 'B',
                'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'E', 'Ж' => 'Zh', 'З' => 'Z',
                'И' => 'I', 'Й' => 'Y', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O',
                'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U', 'Ф' => 'F', 'Х' => 'H',
                'Ц' => 'C', 'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sch', 'Ь' => '', 'Ы' => 'Y', 'Ъ' => '',
                'Э' => 'E', 'Ю' => 'Yu', 'Я' => 'Ya',
            ];
        
            $value = strtr($str, $arr);
            return str_replace(' ', '_', $value);
        };
        
        echo translit2('абвг деёжзиклмн опрстуфх цчщьыъэюя АБВГДЕЁЖЗИ КЛМНОПРСТУ ФХЦЧШЩЬЫ ЪЭЮЯ');




?>