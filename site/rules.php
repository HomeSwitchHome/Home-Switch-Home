<?php
session_start(); // On démarre la session AVANT toute chose
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->        
        <link rel="stylesheet" href="style.css" />
        <title>Règlement</title>
    </head>

    <body>
        <?php include("header.php"); ?>

    	<p>
            Voici les <mark>règles à suivre</mark> lors de l'utilisation de ce site :
    		<ol>
    			<li>Soyez respectueux vis-à-vis des autres utilisateurs et du staff !</li>
    			<li>Respectez vos engagements, des sanctions seront prises dans le cas contraire.</li>
    			<li>Soyez vous-même !</li>
    		</ol>
    	</p>

        <?php include("footer.php"); ?>
    </body>
</html>