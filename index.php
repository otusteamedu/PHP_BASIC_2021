<?php
    # Задание 1

    $a = -17;
    $b = 13;

    if ($a >= 0 && $b >= 0) {
        echo $a - $b;
    } else if ($a < 0 && $b < 0) {
        echo $a * $b;
    } else if (($a < 0 && $b >= 0) || ($a >= 0 && $b < 0)) {
        echo $a + $b;
    }

    # Задание 2

    $num = 1;
	
	switch ($num) {
		case 1:
			echo 1;
		break;
		case 2:
			echo 2;
		break;
		case 3:
			echo 3;
		break;
		case 3:
			echo 3;
		break;
		case 4:
			echo 4;
		break;
		case 5:
			echo 5;
		break;
		case 6:
			echo 6;
		break;
		case 7:
			echo 7;
		break;
		case 8:
			echo 8;
		break;
		case 9:
			echo 9;
		break;
		case 10:
			echo 10;
		break;
		case 11:
			echo 11;
		break;
		case 12:
			echo 12;
		break;
		case 13:
			echo 13;
		break;
		case 14:
			echo 14;
		break;
		case 15:
			echo 15;
		break;
		default:
			echo 'Не верное число!';
		break;
	}

    # Задание 3

    $num = 6;

    $return_value = match ($num) {
            1 => 'Число 1',
            2 => 'Число 2',
            3 => 'Число 3',
            4 => 'Число 4',
            5 => 'Число 5',
            6 => 'Число 6',
            7 => 'Число 7',
            8 => 'Число 8',
            9 => 'Число 9',
            10 => 'Число 10',
            11 => 'Число 11',
            12 => 'Число 12',
            13 => 'Число 13',
            14 => 'Число 14',
            15 => 'Число 15',
            default => 'Не верное число!'
    };
    var_dump($return_value);