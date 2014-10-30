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

<br/>

<nav class="footer">

    <nav>

    	<div class="footer_use_conditions">
	        <a href="use_conditions.php">Conditions d'utilisation</a>
	    </div>

	    <div class="footer_privacy">
	        <a href="privacy.php">Confidentialité</a>
	    </div>

	    <div class="footer_rules">
	        <a href="reglement/rules.php" title="Page du règlement">Règlement</a>
	    </div>

	    <div class="footer_contact">
	        <a href="contact.php">Contact</a>
	    </div>

    </nav>

</nav>    		