<?php

    $resultat = $_GET['resultat'];
    $reponse = $_POST['reponse'];

    if($resultat == $reponse) {
        echo 'Félicitation';
        echo '<a href="index.html">rejouer</a>';
    }
    else {
        echo 'Echec';
        echo '<a href="index.html">réessayer</a>';
    }

    

?>