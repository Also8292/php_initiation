<?php

    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $profession = $_POST['profession'];

    $header = "MIME-Version: 1.0\r\n";
    $header .= 'From:"acsdakar.com"<support@keloumak.com>'."\n";
    $header .= 'Content-Type:text/html; charset="utf-8"'."\n";
    $header .= 'Content-Transfert-Encoding: 8bit';

    $message = '
    <html>
        <body>
            Bonjour ' . $prenom . ' ' . $nom . '<br>
            Votre profession est ' . $profession . '<br>
            Vous venez de remplir le formulaire Kéloumak.
        </body>
    </html>
    ';

    mail($email,"Kéloumak", $message, $header);

    /*echo '
        <script>
            alert("Félicitation, un mail vous a été envoyé");
        </script>
    ';*/

    header('Location: index.php');


?>