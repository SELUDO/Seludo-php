<?php
session_start();
if(!$_SESSION['mdp'] and !$_SESSION['user'])
{
    header('Location: ../../login.php');
}
else
{
    $bdd = new PDO('mysql:host=localhost;dbname=SELudo', 'root' , 'root');
    for ($i = 1; $i <= 37; $i++) {
        $VALUE = $_POST[$i];
        $requete = $bdd->query('update textes set VALEUR = "'.$VALUE.'" where id = "' .$i. '" ');
    }

    header('Location: index.php?msg=1');

    #$VALUE = $_POST['']
    #$requete = $bdd->query('update textes set VALEUR = "'.$mdp1.'", email = "' .$email. '" where NOM = "' .$_SESSION['user']. '" ');
    #while ($ligne = $result -> fetch())

}

?>
