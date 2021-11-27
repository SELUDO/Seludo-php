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
    <link rel="stylesheet" href="style2.css"> 
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
        <li><a class="entete" href="../users">Utilisateurs</a></li>
        <li><a style="color: white; text-decoration: underline;" class="entete" href="#">Modifier le contenu</a></li>
        <li><a class="entete" href="../../" target="_blank">Voir le site</a></li>
        <li><a class="entete actif" href="../profil">Mon compte</a></li>
        <li><a class="entete" href="../logout.php">Se déconnecter</a></li>
    </ul>
    </header>

    <!-- CONTENU -->
    <div class="contenu bords-arrondis">
        <div>
            <div class="section bords-arrondis ombre-bleue" style="margin-top: 100px; margin-bottom: 0;">
                <h2 class="centre" style="margin-bottom: 18px;">Modification du contenu de la page</h2>
                <?php
                    echo '<form method="POST" action="action.php"><table style="width: 100%">';
                    $result = $bdd -> query('SELECT * FROM textes');

                    while ($ligne = $result -> fetch())
                    {
                        echo '<tr><td style="width: 50%;">' .$ligne['NOM']. '</td><td style="width: 50%;"><input style="width: 100%;" type="text" name="'.$ligne['id'].'" value="'.$ligne["VALEUR"].'"></td></tr>';
                    }
                    echo '<tr style="height: 30px;"></tr>';
                    echo '<tr><td style="width: 50%;"></td><td><input type="submit" name="submit" value="Sauvegarder"></td></tr>';
                    echo '</table></form>';
                
                ?>
                <?php
                    if (isset($_GET['msg']))
                    {
                        if ($_GET["msg"] == 1)
                        {
                            echo '<p style="color: green;">Les modifications ont été faites avec succès.</p><a href="../" style="color: green;">Revenir à la page principale.</a>';
                        }
                    }
                ?>
                <br><br>
                <p>Notez que cet outil à été pensé pour insérer dans des champs des textes déjà rédigés. La rédaction dans l'interface est très peu optimisée. </p>
            </div>
        </div>
    </div>
</body>
</html>


<?php
}
?>