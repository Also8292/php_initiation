<?php

    for($i = 0 ; $i <= 10 ; $i++) { //cette boucle nous permet parcourir les tables 
        if(isset($_POST['check_' . $i .''])) {//cette condition nous permet de voir est ce que la table est selectionné
            
            $y = $_POST['check_' . $i .''];

            echo 'Table de ' . $y .PHP_EOL;

            for($j = 0 ; $j <= 10 ; $j++) {
                echo $y . ' x ' . $j . ' = ' . $y * $j .PHP_EOL;
            }

            echo PHP_EOL;
        }
    }
?>