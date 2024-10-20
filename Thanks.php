<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <link href="form.php">
</head>

<body>
    <?php
        echo
            'Merci ' . $_POST['user_firstname'] . ' ' . $_POST['user_lastname'] . ' de nous avoir contacté à propos de ' . $_POST['user_sujet'] . '.
            Un de nos conseiller vous contactera soit à l’adresse ' . $_POST['user_mail'] . ' ou par téléphone au ' .  $_POST['user_tel'] . ' dans les plus brefs délais pour traiter votre demande :'
        ?></br>
        <?php
        echo 'Votre messge :'
        ?></br>
        <?php
        echo $_POST['user_message']; 
    ?>
</body>

</html>





