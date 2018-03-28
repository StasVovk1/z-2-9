<?php 
    $mass = [-1,2,3,4,5,-5,6,7,8,3,5,-7,7,4,2,4,5];
    echo 'Исходные данные: '.json_encode($mass);
    $min = $mass[1];
    $max = $mass[0];
    for ($i = 0; $i < counts($mass); $i++){
        if (($mass[$i] > $max) && ($i % 2 == 0)){    
            $max_i = $i;
            $max = $mass[$i];
        }
        if (($mass[$i] < $min) && ($i % 2 == 1)){    
            $min_i = $i;
            $min = $mass[$i];
        }
    }

    echo '<br>Ответ: '.$max;
    echo '<br>Max: '.$max.'; на позиции: '.$max_i;
    echo '<br>Min: '.$min.'; на позиции: '.$min_i;

    function counts($mass){
        $i = 1;            
        while ($mass[$i].'' != ''){
            $i++;
        }
        return $i;
    }
?>