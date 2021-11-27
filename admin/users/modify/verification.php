<?php
session_start();
if(!$_SESSION['mdp'] and !$_SESSION['user'])
{
    header('Location: ../../login.php');
}
else
{
    if ($_POST['user'] != "" and$_POST['mdp1'] != "" and $_POST['mdp2'] != "" and $_POST['email'] != "")
    {
        $user = htmlspecialchars($_POST['user']);
        $mdp1 = htmlspecialchars($_POST['mdp1']);
        $mdp2 = htmlspecialchars($_POST['mdp2']);  
        $email = htmlspecialchars($_POST['email']);

        if($mdp1 != $mdp2)
        {
            header('Location: index.php?erreur=2');
        }
        else
        {
            $bdd = new PDO('mysql:host=localhost;dbname=SELudo', 'root' , 'root');
            $requete = $bdd->query("insert into utilisateurs (nom_utilisateur, mot_de_passe, email) values ('".$user."', '".$mdp1."', '".$email."')");

            header('Location: index.php?msg=1');
        }
    }
    else
    {
        header('Location: index.php?erreur=1');
    }
}

?>