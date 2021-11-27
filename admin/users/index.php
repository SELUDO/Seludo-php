<?php
session_start();
if(!$_SESSION['mdp'] and !$_SESSION['user'])
{
    header('Location: ../login.php');
}
else
{
    $bdd = new PDO('mysql:host=localhost;dbname=SELudo', 'root' , 'root');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css"> 
    <title>Mon compte</title>
</head>
<body>
    <!--  En tête -->
    <header class="header">
    <a href=""><img class="logo" src="../../images/logo-avec-texte.png" alt="LOGO"></a>
    <input class="menu-btn" type="checkbox" id="menu-btn"/>
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    <ul class="menu">
        <li><a class="entete" href="../index.php">Accueil</a></li>
        <li><a style="color: white; text-decoration: underline;" class="entete actif" href="#">Utilisateurs</a></li>
        <li><a class="entete" href="../content/">Modifier le contenu</a></li>
        <li><a class="entete" href="../../" target="_blank">Voir le site</a></li>
        <li><a class="entete" href="../profil">Mon compte</a></li>
        <li><a class="entete" href="../logout.php">Se déconnecter</a></li>
    </ul>
    </header>

    <!-- CONTENU -->
    <div class="contenu bords-arrondis">
        <div>
            <div class="section bords-arrondis ombre-bleue" style="margin-top: 100px; margin-bottom: 0;">
                <h2 class="centre" style="margin-bottom: 18px;">Utilisateurs</h2>

                <table class="table-horaires jours" style="margin: 0 auto; width: 100%;">
                    <tr>
                        <th>Identifiant</th>
                        <th>Nom d'utilisateur</th>     
                        <th>Adresse e-mail</th>                   
                    </tr>           
                    <?php 
                        $result = $bdd -> query('SELECT * FROM utilisateurs');
                        while ($ligne = $result -> fetch())
                        {
                            echo '<tr><td style="width: 33%">' .$ligne['id']. '</td><td style="width: 33%">' .$ligne['nom_utilisateur']. '</td><td style="width: 33%">' .$ligne['email']. '</td></tr>';
                        }
                    ?>
                </table>  
                <br><br>
                <div style="text-align: right;">
                    <a href="modify/"><p class="btn-contact">Ajouter</p></a>
                    <a href="delete/"><p class="btn-contact">Supprimer</p></a>
                </div>
                

                
            </div>
        </div>
    </div>
</body>
</html>


<?php
}
?>