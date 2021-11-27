<?php
session_start();
if(!$_SESSION['mdp'] and !$_SESSION['user'])
{
    header('Location: ../../login.php');
}
else
{
    if ($_POST['id'] != "")
    {
        $id = htmlspecialchars($_POST['id']);

        $bdd = new PDO('mysql:host=localhost;dbname=SELudo', 'root' , 'root');
        $requete = $bdd->query("delete from utilisateurs where id='" .$id. "'");

        header('Location: index.php?msg=1');
    }
    else
    {
        header('Location: index.php?erreur=1');
    }
}

?>