<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <link href="form.php">
</head>

<body>
    <?php
        echo
            'Merci ' . $_GET['user_firstname'] . ' ' . $_GET['user_lastname'] . ' de nous avoir contacté à propos de ' . $_GET['user_sujet'] . '.
            Un de nos conseiller vous contactera soit à l’adresse ' . $_GET['user_mail'] . ' ou par téléphone au ' .  $_GET['user_tel'] . ' dans les plus brefs délais pour traiter votre demande :'
        ?></br>
        <?php
        echo 'Votre messge :'
        ?></br>
        <?php
        echo $_GET['user_message']; 
    ?>
</body>

</html>





