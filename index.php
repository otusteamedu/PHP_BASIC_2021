<?php
    #Задание №1
    function denial ($arg1, $arg2) {
        $result = $arg1 - $arg2;
        return $result;
    }

    function addition ($arg1, $arg2) {
        $result = $arg1 + $arg2;
        return $result;
    }

    function multiplication ($arg1, $arg2) {
        $result = $arg1 * $arg2;
        return $result;
    }

    function division ($arg1, $arg2) {
        $result = $arg1 / $arg2;
        return $result;
    }

    echo denial(5,4);

    #Задание №2
    // Передаем в $operation название операции и все отрабатывает корректно.
    function mathOperation($arg1, $arg2, $operation) {
        switch ($operation) {
            case 'denial':
                return ($arg1 - $arg2);
                break;
            case 'addition':
                return ($arg1 + $arg2);
                break;
            case 'multiplication':
                return ($arg1 * $arg2);
                break;
            case 'division':
                return ($arg1 / $arg2);
                break;
        }
    }
    
    echo mathOperation(5, 4, denial);

    #Задание №3
    /*<footer>
        <?php
            echo date('Y');
         ?>
    </footer>*/

    #Задание №4

    function power($val, $pow){
		if ($val != 0){
			$result = $val ** $pow;
			return $result;
		}
	}
	var_dump(power(2,3));

    #Задание №5
    // Не смог решить.

    # Дополнительное задание
    //Решение с помощью регулярки.
    function abbr($price) : string {
        $price = trim($price);
        if(empty($price)) return '';
        preg_match_all('/ (.)/', $price, $matches);
        return !empty($matches) ? $price[0] . implode('', $matches[1]) : $price;
    }

    assert(abbr('Акционерный Коммерческий Банк') === 'АКБ');
    assert(abbr('Внутренний Валовый Продукт') === 'ВВП');
    assert(abbr('коммерческое предложение') === 'КП');
    assert(abbr(' База Данных ') === 'БД');
    assert(abbr('Кастрюля') === 'Кастрюля');
    assert(abbr(' Программист ') === 'Программист');
    assert(abbr('') === '');
    assert(abbr(' ') === '');
    ?>
?>