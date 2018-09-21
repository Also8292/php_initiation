<?php
$tab[] = "";
for($i = 0 ; $i <= 10 ; $i++) { //cette boucle nous permet de parcourir les tables 
    if(isset($_POST['check_' . $i .''])) {
        $tab[$i] = $_POST['check_' . $i .''];
    }
    else {
        $tab[$i] = "unchecked";
    }
}

//var_dump($tab);


foreach($tab as $index => $table) {
    if($table != 'unchecked') {
        //echo $table .PHP_EOL;
            $nbre = rand(0, 10);
            $resultat = $nbre * $table;

            //echo 'Combien vaut : ' . $table . ' x ' . $nbre . ' ?';

            ?>
            <h3>Combien vaut : <?= $table ?> x <?= $nbre ?></h3>
            <p><input type="text" id="input_response<?= $index ?>" placeholder="Votre réponse..." onblur="operation(<?= $resultat ?>, <?= $index ?>)"><span id="result<?= $index ?>"></span></p>
            
            <br>

            <?php     
    }
}
    ?>
    <script>
        function operation(resultat, index) {
            var input_response = document.querySelector('#input_response' + index).value;
            var result = document.querySelector('#result' + index);
            
            if(input_response == resultat) {
                result.innerHTML = "VRAI";
            }
            else {
                result.innerHTML = "FAUX";
            }
            //result.innerHTML = resultat;
        }
    </script>
    <?php 
/**
 * $y = $_POST['check_' . $i .''];
 * $nbre = rand(0, 10);
 * echo('Question ' . $a );
 *  echo(' Combien vaut ? : ' . $y . ' x ' . $nbre) .PHP_EOL;
 *  ?>
 *  <input type="text" name="reponse">
 *  <button>Valider</button><br>
 *  <?php
 */

?>