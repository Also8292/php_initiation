<?php

    $y = $_POST['table'];
    
    for($i = 0 ; $i <=10 ; $i++) {
        echo $y . ' x ' . $i . ' = ' . $y * $i .PHP_EOL;
    }
    
?>