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
        <title>Home Switch Home</title>
    </head>

    <body>
    	<?php include("header.php"); ?>
	    
	    <section>
	    	<h2>Association d'échange de logements</h2>
	    
	    	<h3 id="description">Envie de vacances ?</h3>

	    	<aside>Informations sur votre profil : *insert profile information here :)*</aside>
	    
	    	<article class="article_home_page">
	    		<p class="introduction">
	    			Vous voulez <strong>économiser</strong> sur l'hébergement ?<br />
		    		Ici, vous pouvez <em>échanger votre domicile</em> avec une autre personne à condition de suivre le <a href="rules.php"> règlement</a> !
		    	</p>
		    </article>
	    </section>

	    <section>
	    	<h2>Comment procéder ?!</h2>

	    	<h3>C'est facile !</h3>

	    	<aside>Plus d'infos sur les logements plus bas : *insert picture-links here :)*</aside>

	    	<article class="article_home_page">
	    		<p class="introduction">Donc, que faire ?

	    		<ul>
	    			<li><a href="subscription.php">Inscrivez-vous</a> puis <a href="login.php">connectez-vous</a> !</li>

	    			<li><a href="profil.php">Mettez à jour votre profil !</a>
	    				<ul>
	    					<li>Choisissez un avatar</li>
	    					<li>Définissez les informations à propos de vous que vous souhaitez communiquer aux autres utilisateurs</li>
	    					<li>Affichez (éventuellement) des moyens de vous contacter plus simplement (Skype, ...)</li>
	    				</ul>
	    			</li>

	    			<li><a href="homes.php">Ajoutez des informations liées à vos logements</a> !
	    				<ul>
	    					<li>Entrez son adresse !</li>
	    					<li>Affichez des photos de celui-ci !</li>
	    					<li>Décrivez son équipement et son quartier proche!</li>
	    					<li>Indiquez les contraintes de celui-ci (pas d'ascenseur, pas d'animaux de compagnie, espace non fumeur, ...)</li>
	    					<li>Précisez les services que la personne qui le visitera devra effectuer (arroser les plantes, ...)!</li>
	    				</ul>	
	    			</li>

	    			<li><a href="membres.php">Consultez ceux des autres utilisateurs</a> et contactez ceux-ci pour vous mettre d'accord sur l'échange par :
	    				<ul>
	    					<li>Messagerie privée</li>
	    					<li>Chat</li>
	    					<li>Forum</li>
	    					<li>Eventuels moyens disponibles sur leur profil (Skype, ...)</li>
	    				</ul>
	    			</li>
	    		</ul>
	    	</article>
	    </section>
	    	
	    <section>
	    	<h2>A propos de nous...</h2>

	    	<h3>Association à but <strong>non lucratif</strong> !</h3>

	    	<p class="nous">
	    		Nous sommes un <mark>groupe d'étudiants</mark> ayant eu cette association comme projet, afin <mark>d'apprendre à développer</mark> des sites web via des tutoriels trouvés sur 
	    		<a href="http://fr.openclassrooms.com/" target="_blank">Open Classrooms</a>, <a href="http://www.alsacreations.com/" target="_blank">Alsa Créations</a> et 
	    		<a href="http://www.developpez.com/" target="_blank">Développez.com</a>.
	    	</p>
	    </section>

		<?php include("footer.php"); ?>
    </body>
</html>