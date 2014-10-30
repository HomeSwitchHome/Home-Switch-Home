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
        <title>Logements</title>
    </head>

    <body>
        <?php include("header.php"); ?>

        <form method="post" action="subscription_management.php" class="subscription">
            <p class="formulaire">
                Veuillez renseigner les informations suivantes :<br/><br/><br/>

                <section class="home_left">
                    <label for="home_name">Le nom attribué à ce logement : </label>
                    <input type="text" name="home_name" id="home_name"/><br/><br/>
                    
                    <label for="home_adress">Son adresse : </label>
                    <input type="text" name="home_adress" id="home_adress"/><br/><br/>
                    
                    <label for="home_postcode">Son code postal : </label>
                    <input type="number" name="home_postcode" id="home_postcode"/><br/><br/>
                    
                    <label for="home_city">Sa ville : </label>
                    <input type="text" name="home_city" id="home_city"/>
                </section>

                <section class="home_right">
                    <label for="home_type">Le type de logement : </label>
                    <select name="home_type" id="home_type">
                        <option value="null"></option>
                        <option value="home">Maison</option>
                        <option value="flat">Appartement</option>
                    </select><br/><br/>

                    <label for="home_surface">Sa surface habitable (en m²) : </label>
                    <input type="number" name="home_surface" id="home_surface"/><br/><br/>

                    <label for="home_rooms">Son nombre de pièces : </label>
                    <input type="number" name="home_surface" id="home_surface"/><br/><br/>

                    <label for="home_floors">Son étage (si appartement) ou son nombre d'étages (si maison, rdc et sous-sols inclus) : </label>
                    <input type="number" name="home_floors" id="home_floors"/>
                </section>

                <section class="home_center_left">
                    <p>Cochez les équipements présents dans ce logement : </p>

                    <article class="home_equipments_left">
                        <input type="checkbox" name="washing_machine"/><label for="washing_machine">Machine à laver</label><br/>
                        <input type="checkbox" name="clothes_dryer"/><label for="clothes_dryer">Sèche-linge</label><br/>
                        <input type="checkbox" name="dishwasher"/><label for="dishwasher">Lave-vaisselle</label><br/>
                        <input type="checkbox" name="fridge"/><label for="fridge">Réfrigérateur</label><br/>
                        <input type="checkbox" name="freezer"/><label for="freezer">Congélateur</label><br/>
                    </article>

                    <article class="home_equipments_right">
                        <input type="checkbox" name="oven"/><label for="oven">Four</label><br/>
                        <input type="checkbox" name="microwave"/><label for="microwave">Four à micro-ondes</label><br/>
                        <input type="checkbox" name="shower"/><label for="shower">Douche</label><br/>
                        <input type="checkbox" name="bathtub"/><label for="bathtub">Baignoire</label><br/>
                        <input type="checkbox" name="clim"/><label for="clim">Climatisation</label><br/>
                    </article>

                    <article class="home_other_equipments">
                        <label for="other_equipments">Autres : </label>
                        <input type="text" name="other_equipments">
                    </article>
                </section>

                <section class="home_bottom">
                    <label for="beginning_availability">Sera disponible du : </label>
                    <select name="beginning_day" id="beginning_day">
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

                    <select name="beginning_month" id="beginning_month">
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

                    <input type="number" name="beginning_year" id="beginning_year"/><br/><br/>

                    <label for="birth_date">Au : </label>
                    <select name="end_day" id="end_day">
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

                    <select name="end_month" id="end_month">
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

                    <input type="number" name="end_year" id="end_year"/><br/><br/>

                    <label for"accept_conditions" class="accept_conditions">En cochant ceci, vous acceptez les <a href="use_conditions.php">conditions d'utilisation</a> :</label>
                    <input type="checkbox" name="accept_conditions" id="accept_conditions"/><br/><br/>

                    <input type="submit" value="Valider" class="ok"/>
                </section>
            </p>
        </form>

        <?php include("footer.php"); ?>
    </body>
</html>