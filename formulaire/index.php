<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Form PHP</title>
    <style>
        body {
            padding-top: 50px;
        }
        .form_sect {
            width: 40%;
            margin-left: 30%;
            text-align: center;
            background-color: #2EC4B6;
            padding: 5px 1px 5px 1px;
        }

        .form_sect h1 {
            color: #ffffff;
        }

        .form_input {
            width: 100%;
            height: 50px;
            margin-bottom: 10px;
            border: none;
        }
    </style>
</head>
<body>

    <div class="container form_sect">
        <h1>Inscription</h1>
        <form action="post.php" method="post">
            <input class="form_input" type="text" name="prenom" placeholder="Prénom">
            <input class="form_input" type="text" name="nom" placeholder="Nom">
            <input class="form_input" type="email" name="email" placeholder="Email">
            <input class="form_input" type="text" name="profession" placeholder="Profession">
            <button class="btn btn-primary" type="submit">Valider</button>
        </form>
        
    </div>
</body>
</html>