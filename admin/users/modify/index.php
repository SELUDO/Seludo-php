<?php
session_start();
if(!$_SESSION['mdp'] and !$_SESSION['user'])
{
    header('Location: ../../login.php');
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
    <title>Modifier utilisateurs</title>
</head>
<body>
    <!--  En tête -->
    <div>
        <a class="link" href="../" style="display: block; background-color: #167056; color: #4DB06D; text-align: right; margin: 0; padding: 15px 20px 15px 0; text-decoration: none;">Quitter sans sauvergarder</a>
    </div>

    <!-- CONTENU -->
    <div class="contenu bords-arrondis">
        <div>
            <div class="section bords-arrondis ombre-bleue" style="margin-top: 100px; margin-bottom: 0;">
                <h2 class="centre" style="margin-bottom: 18px;">Ajouter un utilisateur</h2>
                <div>
                    <form method="POST" action="verification.php">
                        <p><label>Nom d'utilisateur</label></p>
                        <input type="text" name="user" placholder="Entrer un nom d'utilisateur">
                        <p><label>Mot de passe</label></p>
                        <input type="password" name="mdp1" placholder="Entrer un mot de passe">
                        <p><label>Confirmer mot de passe</label></p>
                        <input type="password" name="mdp2" placholder="Confirmer le mot de passe">
                        <p><label>Adresse email</label></p>
                        <input type="email" name="email" placholder="Entrer une adresse email">
                        <br><br>
                        <input type="submit" name="submit" value="Sauvergarder">
                    </form>


                    <br><br>
                    <p>Notez que si vous vous trompez dans la conception d'un nouvel utilisateur, rien ne vous empêche de le finaliser et de le supprimer par la suite pour recommencer.</p>


                    <?php
                    if (isset($_GET['erreur']))
                    {
                        if ($_GET["erreur"] == 1)
                        {
                            echo '<p style="color: red">Veuillez renseigner tous les champs.</p>';
                        }
                        if ($_GET["erreur"] == 2)
                        {
                            echo '<p style="color: red">Les mots de passe ne correspondent pas.</p>';
                        }
                    }
                    if (isset($_GET['msg']))
                    {
                        if ($_GET["msg"] == 1)
                        {
                            echo '<p style="color: green;">Les modifications ont été faites avec succès.</p><a href="../../" style="color: green;">Revenir à la page principale.</a>';
                        }
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>
</body>
</html>


<?php
}
?>