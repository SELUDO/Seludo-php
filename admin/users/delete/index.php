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
    <title>Supprimer un utilisateur</title>
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
                <h2 class="centre" style="margin-bottom: 18px;">Supprimer un utilisateur</h2>
                <div>
                    <form method="POST" action="verification.php">
                        <label>ID de l'utilisateur à supprimer</label>
                        <input type="number" name="id" min="3" >
                        <br><br>
                        <input type="submit" name="submit" value="Valider">
                    </form>

                    <br><br>
                    <p><b>Attention !</b> Lorsque qu'un identifiant valable aura été donné et que le formulaire aura été soumis, l'utilisateur en question sera définitivement supprimé. Aucun retour en arrière possible.</p>

                    <?php
                    if (isset($_GET['erreur']))
                    {
                        if ($_GET["erreur"] == 1)
                        {
                            echo '<p style="color: red">Veuillez renseigner des données valides.</p>';
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