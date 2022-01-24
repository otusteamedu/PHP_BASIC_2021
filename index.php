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
    // Переделал с помощью рекурсии.
    function power($val, $pow) {
        if ($pow == 0) {
          return 1;
        } elseif ($pow < 0) {
          return power(1/$val, -$pow);
        }
        return $val * power($val, $pow-1);
      }
      
      var_dump(power(10, -1));

    #Задание №5
    
    $h = date("H") +7;//Скоректировал, под свой часовой пояс.
    $m = date("i");
        
    function itstime ($h, $m){
    if ($h==1 || $h==21) {
        $hours = " час";
    }
    elseif (($h>=2 && $h<=4) || ($h>=22 && $h<=24)){
        $hours = " часа";
    }  else {
        $hours = " часов";
    }
    
    if (($m % 10) === 1){
    $minutes = " минута.";
    }   elseif ((($m % 10)>=2) && (($m % 10)<=4)){
    $minutes = " минуты.";
    }   else {
    $minutes = " минут.";
    }
    echo $h . $hours . " " . $m . $minutes;
    }
        
    itstime($h, 31);

?>