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

<?php
// Test si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['avatar']) AND $_FILES['avatar']['error'] == 0)
{
    // Test si le fichier n'est pas trop gros
    if ($_FILES['avatar']['size'] <= 1000000)
    {
        // Test si l'extension est autorisée
        $fileinfos = pathinfo($_FILES['avatar']['name']);
        $extension_upload = $fileinfos['extension'];
        $authorized_extensions = array('jpg', 'jpeg', 'gif', 'png');
        if (in_array($extension_upload, $authorized_extensions))
        {
            // On peut valider le fichier et le stocker définitivement
            move_uploaded_file($_FILES['avatar']['tmp_name'], 'avatars/' . basename($_FILES['avatar']['name']));
            echo "Votre avatar a bien été mis à jour !";
        }
    }
}
?>