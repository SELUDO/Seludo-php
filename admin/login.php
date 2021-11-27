<?php 
session_start();
if(isset($_POST['submit']))
{
    if(!empty($_POST['username']) AND !empty($_POST['password']))
    {
        try {
 
            $bdd = new PDO('mysql:host=localhost;dbname=SELudo', 'root' , 'root');
            
            }
            catch (PDOException $exception) {
             
             mail('nathan@rouve.ch', 'PDOException', $exception->getMessage());
             exit('Erreur de connexion à la base de données');
             
            }
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        $query = $bdd->query("select mot_de_passe from utilisateurs where nom_utilisateur = '".$username."' AND mot_de_passe = '".$password."' limit 1");
        
        $nbr = 0;
        while($row = $query->fetch(PDO::FETCH_ASSOC)){
            $nbr = $nbr + 1;
        }

        if($nbr == 1)
        {
            $_SESSION['user'] = $username; 
            $_SESSION['mdp'] = $password;
            header('Location: index.php');
        }
        elseif($nbr == 0)
        {
            header('Location: login.php?erreur=2');
        }
    }
    else
    {
        header('Location: login.php?erreur=1');
    }
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration SELudo – Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
    <a class="link" href="../">Retour à la page principale</a>
    </div>
    <div id="container">
        <form action="login.php" method="POST">
        <!--<div id="back"><a href="../"><p style="margin-top: 0; margin-bottom: 12px; font-size: 12px;">Retour à la page principale</p><a></div>-->
        <h1>Connexion</h1> 

            <p><label>Nom d'utilisateur :</label>
            <input type="text" placeholder="Entrez votre nom d'utilisateur" name="username"></p>

            <p><label>Mot de passe :</label>
            <input type="password" placeholder="Entrez votre mot de passe" name="password"></p>

            <p><input type="submit" name="submit" value="Se connecter" style="font-size: 14px;"></p>
            
            <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1){
                        echo "<p style='color:red'>Veuillez renseigner tous les champs.</p>";
                    }
                    elseif($err==2){
                        echo "<p style='color:red'>Non d'utilisateur ou mot de passe incorrect.</p>";
                    }
                }
            ?>

        </form>
    </div>

    <div class="pied-de-page">
            <!--<img class="pied-de-page-img" src="static/main/images/sponsors.jpg" style="max-width: 800px; display: inline-block; background-color: lightgray;">-->
            <p class="copyright">©Copyright SELudo Bex. Touts droits reservés.</p>
    </div>
</body>
</html>