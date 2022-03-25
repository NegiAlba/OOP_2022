<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>

<body>
    <h1>C'est la page d'accueil</h1>
    <p>Ici on peut faire tout le traitement qu'il y aurait sur une page d'accueil normale</p>

    <form action="/" method="POST">
        <input type="text" name="test">
        <button type="submit">Envoyer</button>
    </form>

    <a href="/form">Aller à la page form</a>

    <?php
        echo '<pre>';
        var_dump($this->form);
        echo '</pre>';
    ?>
</body>

</html>