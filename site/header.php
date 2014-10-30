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

<!-- Header -->
<header>

<nav class="header">

<!-- Logo + Header member menu -->

	<figure>
  		<a href="home_page.php"> <img src="logo.png" alt="Logo" class="logo"/> </a>
 	</figure>

    <nav class="header_member_menu">

        <figure>
            <a href="#"> Bienvenue ! </a>
        </figure>

        <div class="header_subscription">
            <a href="subscription.php"> S'inscrire </a>
        </div> <br/>

        <div class="header_login">
            <a href="login.php"> Se connecter </a>
        </div> <br/

        <div class="header_profile">
            <a href="profile.php"> Profil </a>
        </div>

    </nav>

<!-- Header bar menu -->

    <nav class="header_bar_menu">

    	<div class="header_forum">
            <a href="forum.php"> Forum </a>
        </div>

        <div class="header_member_list">
        	<a href="membres.php"> Membres </a>
        </div>

        <div class="header_search">
        	<a href="recherche_avancee.php"> Recherche avancée </a>
        </div>

        <div class="header_simple_search">
        	<form method="post" action="traitement.php" class="simple_search">
        		<label for="simplesearch"> </label>
                <input type="text" name="simple_search" id="simple_search">
                <input type="submit" value="Ok" class="ok"/>
    	    </form>
        </div>
    </nav>

</nav>

</header>

<br/>		