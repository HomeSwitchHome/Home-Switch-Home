<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=hsh', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="style.css" />
        <title>Connection</title>
    </head>

    <body>
        <?php include("header.php"); ?>
        
        <form method="post" action="login_management.php" class="login">
            <p class="formulaire">
                Veuillez renseigner les informations suivantes :<br/><br/>

                <label for="email">Adresse mail : </label>
                <input type="email" name="email" id="email"/><br/><br/>

                <label for="password">Mot de passe : </label>
                <input type="password" name="password" id="password"/><br/><br/>

                <input type="checkbox" name="remember_mail" id="remember_mail"/>
                <label for"remember_mail" class="remember_mail">Se souvenir de l'adresse mail</label><br/><br/>

                <input type="submit" value="Ok" class="ok"/>
            </p>
        </form>

        <?php include("footer.php"); ?>
    </body>
</html>