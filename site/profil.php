<?php
session_start(); // On démarre la session AVANT toute chose
?>

<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=hsh', 'root', '');
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
        <title>Profil</title>
    </head>

    <body>
        <?php include("header.php"); ?>

        <form action="avatar.php" method="post" enctype="multipart/form-data" class="profile">
            <p>
                Choisissez un avatar :<br/><br/>
                <input type="file" name="avatar" /><br/><br/>
                <input type="submit" value="Mettre à jour" class="ok"/>
            </p>
        </form>

        <?php include("footer.php"); ?>
    </body>
</html>