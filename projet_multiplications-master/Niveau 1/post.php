<?php
    
    if(isset($_GET['table'])) {
        echo 'Table de ' . $_GET['table'] .PHP_EOL .PHP_EOL;
        for($i = 0 ; $i <=10 ; $i++) {
            $y = $_GET['table'];
            echo $y . ' x ' . $i . ' = ' . $y * $i .PHP_EOL;
        }
    }
    else {
        $y = 0;
        for($i = 0 ; $i <=10 ; $i++) {
            echo $y . ' x ' . $i . ' = ' . $y * $i .PHP_EOL;
        }
    }
    
?>