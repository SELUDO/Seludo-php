<?php
session_start();
if(!$_SESSION['mdp'])
{
    header('Location: login.php');
}
else
{
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SELudo</title>
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" type="image/x-icon" href="images/des-seludo.png">
        <link rel="stylesheet" href="../style.css">
    </head>


    <body>
        <!--  En tête -->
        <header class="header">
            <a href=""><img class="logo" src="../images/logo-avec-texte.png" alt="LOGO"></a>
            <input class="menu-btn" type="checkbox" id="menu-btn"/>
            <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
            <ul class="menu">
                <li><a style="color: white; text-decoration: underline;" class="entete actif" href="index.php">Accueil</a></li>
                <li><a class="entete" href="users/">Utilisateurs</a></li>
                <li><a class="entete" href="content/">Modifier le contenu</a></li>
                <li><a class="entete" href="../" target="_blank">Voir le site</a></li>
                <li><a class="entete" href="profil/">Mon compte</a></li>
                <li><a class="entete" href="logout.php">Se déconnecter</a></li>
            </ul>
        </header>

        <!-- Contenu -->
        <div class="contenu bords-arrondis">
            <!-- Section 1 – accueil -->
            <div class="section bords-arrondis ombre-bleue" style="margin: 50px 50px 0 50px;">
                <?php 
                echo "<h2 class='centre'>Bienvenue " .$_SESSION['user']. "</h2>";
                ?>
                <p>Bienvenue dans l'interface d'administration de SELudo !</p>
                <br>
                <p>C'est ici que se trouve toute la partie immergée de l'iceberg. Tout ce qui touche à l'entretien du site va passer par cette page ! Tout est centralisé et simplifié au maximum.</p>
                <br>
                <p>Vous pouvez notamment changer, en tout temps et de manière instantanée, presque tout le contenu du site.<br>Pour cela rien de plus simple; en quelques cliques vos seront horaires auront été modifiés conformément aux nouveaux, la petite faute d'orthographe qui était passée inaperçu jusqu'ici pourra, elle aussi, être corrigée en un rien de temps !<br>La gestion des comptes d'administrateurs a elle aussi été optimisée pour rester la plus simple la plus complète à la fois que possible.</p>
            </div>

            <!-- Section 2 – accueil -->
            <div class="section bords-arrondis ombre-bleue" style="margin: 50px 50px 0 50px;">
                <h2 class="centre">Aide, question, problème</h2>
                <p>Si, malgré toute l'attention portée à la simplification maximale de ce produit quelque chose vous échappe ou ne fonctionne pas comme il faut, vous pouvez m'envoyer un email à <a href="mailto:nathan@rouve.ch"> cette adresse</a>. Je tâcherai d'y répondre au plus vite, ou, pourquoi pas, d'apporter des modifications si nécessaire.</p>
                <br>
                <p>Je vous mets également à disposition un pdf récapitulant toutes les instructions à propos de cet outil.</p>
                <br>
            </div>
        </div> 
    </body>
</html>

<?php
}
?>


