<?php
    
    echo 'Table de ' . $_GET['table'] .PHP_EOL .PHP_EOL;
    for($i = 0 ; $i <=10 ; $i++) {
        $y = $_GET['table'];
        echo $y . ' x ' . $i . ' = ' . $y * $i .PHP_EOL;
    }
    
?>