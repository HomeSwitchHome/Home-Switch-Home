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
        <title>Inscription</title>
    </head>

    <body>
        <?php include("header.php"); ?>

        <form method="post" action="subscription_management.php" class="subscription">
            <p class="formulaire">
                Veuillez renseigner les informations suivantes :<br/><br/><br/>

                <label for="email">Votre adresse email : </label>
                <input type="email" name="email" id="email"/><br/><br/>

                <label for="verify_email">Ré-entrez votre adresse email : </label>
                <input type="email" name="verify_email" id="verify_email"/><br/><br/>

                <label for="last_name">Votre nom : </label>
                <input type="text" name="last_name" id="last_name"/><br/><br/>

                <label for="first_name">Votre prénom : </label>
                <input type="text" name="first_name" id="first_name"/><br/><br/>

                <label for="birth_date">Votre date de naissance : </label>
                <select name="birth_day" id="birth_day">
                    <option value="null"></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>

                <select name="birth_month" id="birth_day">
                    <option value="null"></option>
                    <option value="january">Janvier</option>
                    <option value="february">Février</option>
                    <option value="march">Mars</option>
                    <option value="april">Avril</option>
                    <option value="may">Mai</option>
                    <option value="june">Juin</option>
                    <option value="july">Juillet</option>
                    <option value="august">Août</option>
                    <option value="september">Septembre</option>
                    <option value="october">Octobre</option>
                    <option value="november">Novembre</option>
                    <option value="december">Décembre</option>
                </select>

                <input type="text" name="birth_year" id="birth_year"/><br/><br/>     

                <label for="password">Votre mot de passe : </label>
                <input type="password" name="password" id="password"/><br/><br/>

                <label for="verify_password">Ré-entrez votre mot de passe : </label>
                <input type="password" name="verify_password" id="verify_password"/><br/><br/>

                <label for"accept_conditions" class="accept_conditions">En cochant ceci, vous acceptez les <a href="use_conditions.php">conditions d'utilisation</a> :</label>
                <input type="checkbox" name="accept_conditions" id="accept_conditions"/><br/><br/>

                <input type="submit" value="Valider" class="ok"/>
            </p>
        </form>

        <?php include("footer.php"); ?>
    </body>
</html>