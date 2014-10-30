<?php
session_start(); // On démarre la session AVANT toute chose
?>

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
        <title>Recherche avancée</title>
    </head>
    
    <body>
        <?php include("header.php"); ?>

    	<p>
            Rien n'a été fait pour cette partie actuellement, retentez plus tard !
    	</p>

        <?php include("footer.php"); ?>
    </body>
</html>