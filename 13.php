<?php

/* 
13. Вывести таблицу умножения
 */

for($i = 2; $i<10; $i++){
    for($j=1; $j<10; $j++ ){
        echo $i." * ".$j." = ".$i*$j."<br>";
    }
    echo "<br>";
}