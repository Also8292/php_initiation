<?php
    //récupération du choix
    $y = $_POST['table'];

    $nbre = rand(0, 10);
    
    $resultat = $y * $nbre;
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quiz PHP</title>
</head>
<body>
    <h3>
        <?php
            echo 'Combien vaut : ' . $y . ' x ' . $nbre;
        ?>
    </h3>
    <form action="reponse.php?resultat=<?= $resultat ?>" method="post">
        <input type="text" name="reponse" id="reponse" placeholder="Votre réponse">
        <button type="submit">Valider</button>
    </form>
</body>
</html>