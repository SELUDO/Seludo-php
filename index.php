<?php
    $bdd = new PDO('mysql:host=localhost;dbname=SELudo', 'root' , 'root');
    $result = $bdd->query('SELECT VALEUR from textes where id = 1');
    while ($ligne = $result -> fetch())
    {
        $ligne['VALEUR'];
    }
?>

<?php
    $result = $bdd->query('SELECT VALEUR from textes where id = 2');
    while ($ligne = $result -> fetch())
    {
        echo '' .$ligne['VALEUR']. '' ;
    }
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SELudo</title>
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" type="image/x-icon" href="images/des-seludo.png">
    </head>


    <body>
        <!--  En tête -->
        <header class="header">
            <a href=""><img class="logo" src="images/logo-avec-texte.png" alt="LOGO"></a>
            <input class="menu-btn" type="checkbox" id="menu-btn"/>
            <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
            <ul class="menu">
                <li><a class="entete" href="#">Accueil</a></li>
                <li><a class="entete" href="#Les_horaires">Horaires</a></li>
                <li><a class="entete" href="#Nos_jeux">Jeux</a></li>
                <li><a class="entete" href="#Nos_abonnements">Abonnements</a></li>
                <li><a class="entete" href="#Agenda">Agenda</a></li>
                <li><a class="entete" href="#Nous_contacter">Contact</a></li>
            </ul>
        </header>

        <!-- Contenu -->
        <div class="contenu bords-arrondis">
            <!-- Image -->
            <div class="img" id="div3">
                <img class="bords-arrondis" src="images/jeux.jpg" alt="SEludo - Jeux" style="display: block; object-fit: cover; width: 100%;  margin-left: auto; margin-right: auto; margin-top: 50px; background-color: lightgrey; ">

                <div class="centre back">
                    <?php
                        $result = $bdd->query('SELECT VALEUR from textes where id = 2');
                        while ($ligne = $result -> fetch())
                        {
                            echo '<p class="texte-image">' .$ligne['VALEUR']. '</p>' ;
                        }
                    ?>
                </div>
            </div>

            <!-- Section 1 – horaires-->
            <span class="ancre" id="Les_horaires"></span>
            <div>
                <div class="section bords-arrondis ombre-bleue">
                <?php
                    $result = $bdd->query('SELECT VALEUR from textes where id = 3');
                    while ($ligne = $result -> fetch())
                    {
                        echo '<h2 class="centre" style="margin-bottom: 18px;">' .$ligne['VALEUR']. '</h2>' ;
                    }
                ?>
                    <table class="float-right table-horaires jours" style="display: inline-block;">
                        <tr>
                            <td class="horaires">
                                <p>
                                <?php
                                    $result = $bdd->query('SELECT VALEUR from textes where id = 4');
                                    while ($ligne = $result -> fetch())
                                    {
                                        echo '<div class="ouverture" style="font-weight: bold; color: var(--color-bleu);">' .$ligne['VALEUR']. '</div>' ;
                                    }
                                ?>
                                <?php
                                    $result = $bdd->query('SELECT VALEUR from textes where id = 5');
                                    while ($ligne = $result -> fetch())
                                    {
                                        echo $ligne['VALEUR'];
                                    }
                                ?><br>
                                <br>
                                <?php
                                    $result = $bdd->query('SELECT VALEUR from textes where id = 6');
                                    while ($ligne = $result -> fetch())
                                    {
                                        echo '<div class="ouverture" style="font-weight: bold; color: var(--color-bleu);">' .$ligne['VALEUR']. '</div>' ;
                                    }
                                ?>
                                <?php
                                    $result = $bdd->query('SELECT VALEUR from textes where id = 7');
                                    while ($ligne = $result -> fetch())
                                    {
                                        echo $ligne['VALEUR'];
                                    }
                                ?><br>
                                <br>
                                <?php
                                    $result = $bdd->query('SELECT VALEUR from textes where id = 8');
                                    while ($ligne = $result -> fetch())
                                    {
                                        echo '<div style="color: var(--color-bleu);">' .$ligne['VALEUR']. '</div>';
                                    }
                                ?>
                                </p>
                            </td>
                        </tr>
                    </table>

                    <table class="table-horaires">
                        <tr>
                            <td style="vertical-align: top;">
                                <p style="margin-bottom: 5px">Maison Chevalley, rue du Midi 6, 1880 Bex</p>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d689.7389170209141!2d7.0116788!3d46.2511091!3m2!1i1024!2i768!4f13.1!2m1!1sMaison%20Chevalley%2C%20rue%20du%20Midi%206%2C%201880%20Bex!5e0!3m2!1sfr!2sch!4v1623256607727!5m2!1sfr!2sch" width="100%" vertical-align="bottom"  style="border:0; border: solid 2px var(--color-bleu); background-color: lightgray" allowfullscreen="" loading="lazy" class="bords-arrondis"></iframe>
                            </td>
                        </tr>
                    </table>

                </div>
            </div>

            <!-- Section 2 – jeux -->
            <span class="ancre" id="Nos_jeux"></span>
            <div>
                <div class="section bords-arrondis ombre-bleue">
                <?php
                    $result = $bdd->query('SELECT VALEUR from textes where id = 9');
                    while ($ligne = $result -> fetch())
                    {
                        echo '<h2 class="centre">' .$ligne['VALEUR']. '</h2>';
                    }

                    $result = $bdd->query('SELECT VALEUR from textes where id = 10');
                    while ($ligne = $result -> fetch())
                    {
                        echo '<p>' .$ligne['VALEUR']. ' Cette liste est consultable <a href="games/">ici</a>.</p>';
                    }
                ?>
                </div>
            </div>


            <!-- Section 3– abonnements -->
            <span class="ancre" id="Nos_abonnements"></span>
            <div>
                <div class="section bords-arrondis ombre-bleue">
                    <?php
                        $result = $bdd->query('SELECT VALEUR from textes where id = 11');
                        while ($ligne = $result -> fetch())
                        {
                            echo '<h2 class="centre">' .$ligne['VALEUR']. '</h2>';
                        }

                        $result = $bdd->query('SELECT VALEUR from textes where id = 12');
                        while ($ligne = $result -> fetch())
                        {
                            echo '<p style="margin-top: 18px; text-align: justify">' .$ligne['VALEUR']. '</p>';
                        }
                    ?>

                    <table style="width: 100%;">
                        <tr class="tr">
                            <td class="puces"><p>1</p></td>
                            <?php
                                $result = $bdd->query('SELECT VALEUR from textes where id = 13');
                                while ($ligne = $result -> fetch())
                                {
                                    echo '<td><p style="margin-left: 10px;">' .$ligne['VALEUR']. '</p></td>';
                                }
                            ?>
                        </tr>
                        <tr class="tr">
                            <td class="puces"><p>2</p></td>
                            <?php
                                $result = $bdd->query('SELECT VALEUR from textes where id = 14');
                                while ($ligne = $result -> fetch())
                                {
                                    echo '<td><p style="margin-left: 10px;">' .$ligne['VALEUR']. '</p></td>';
                                }
                            ?>
                        </tr>
                        <tr class="tr">
                            <td class="puces"><p>3</p></td>
                            <?php
                                $result = $bdd->query('SELECT VALEUR from textes where id = 15');
                                while ($ligne = $result -> fetch())
                                {
                                    echo '<td><p style="margin-left: 10px;">' .$ligne['VALEUR']. '</p></td>';
                                }
                            ?>
                        </tr>
                    </table>

                    <?php
                        $result = $bdd->query('SELECT VALEUR from textes where id = 16');
                        while ($ligne = $result -> fetch())
                        {
                            echo '<p style="margin-top: 10px;">' .$ligne['VALEUR']. '</p>';
                        }
                    ?>

                    <table style="width: 100%;">
                        <tr class="tr">
                            <td class="puces"><p>4</p></td>
                            <?php
                                $result = $bdd->query('SELECT VALEUR from textes where id = 17');
                                while ($ligne = $result -> fetch())
                                {
                                    echo '<td><p style="margin-left: 10px;">' .$ligne['VALEUR']. '</p></td>';
                                }
                            ?>
                        </tr>
                    </table>

                </div>
            </div>

        <!-- Section 4 - Adenda -->
        <span class="ancre" id="Agenda"></span>
        <div class="">
            <div class="section bords-arrondis ombre-bleue">
                <div class="centre">
                    <?php
                        $result = $bdd->query('SELECT VALEUR from textes where id = 18');
                        while ($ligne = $result -> fetch())
                        {
                            echo '<h2 class="centre" style="display: inline-block; margin-bottom: 18px;">' .$ligne['VALEUR']. '</h2>';
                        }
                    ?>
                </div>
                
                <table class="float-right table-horaires jours" style="display: inline-block;">
                    <tr>
                        <td class="horaires" >
                            <p>
                            <?php
                                $result = $bdd->query('SELECT VALEUR from textes where id = 19');
                                while ($ligne = $result -> fetch())
                                {
                                    echo '<div class="ouverture" style="font-weight: bold; color: var(--color-bleu);">' .$ligne['VALEUR']. '</div>';
                                }

                                $result = $bdd->query('SELECT VALEUR from textes where id = 20');
                                while ($ligne = $result -> fetch())
                                {
                                    echo $ligne['VALEUR'];
                                }
                            ?>
                            <br>
                            <br>
                            <?php
                                $result = $bdd->query('SELECT VALEUR from textes where id = 21');
                                while ($ligne = $result -> fetch())
                                {
                                    echo '<div class="ouverture" style="font-weight: bold; color: var(--color-bleu);">' .$ligne['VALEUR']. '</div>';
                                }

                                $result = $bdd->query('SELECT VALEUR from textes where id = 22');
                                while ($ligne = $result -> fetch())
                                {
                                    echo $ligne['VALEUR'];
                                }
                            ?>
                            <br>
                            <br>
                            <?php
                                $result = $bdd->query('SELECT VALEUR from textes where id = 23');
                                while ($ligne = $result -> fetch())
                                {
                                    echo '<div class="ouverture" style="font-weight: bold; color: var(--color-bleu);">' .$ligne['VALEUR']. '</div>';
                                }

                                $result = $bdd->query('SELECT VALEUR from textes where id = 24');
                                while ($ligne = $result -> fetch())
                                {
                                    echo $ligne['VALEUR'];
                                }
                            ?>
                        </td>
                    </tr>
                </table>
                <table class="table-horaires">
                    <tr>
                        <td class="horaires" >
                            <p>
                            <?php
                                $result = $bdd->query('SELECT VALEUR from textes where id = 25');
                                while ($ligne = $result -> fetch())
                                {
                                    echo '<div class="ouverture" style="font-weight: bold; color: var(--color-bleu);">' .$ligne['VALEUR']. '</div>';
                                }

                                $result = $bdd->query('SELECT VALEUR from textes where id = 26');
                                while ($ligne = $result -> fetch())
                                {
                                    echo $ligne['VALEUR'];
                                }
                            ?>
                            <br>
                            <br>
                            <?php
                                $result = $bdd->query('SELECT VALEUR from textes where id = 27');
                                while ($ligne = $result -> fetch())
                                {
                                    echo '<div class="ouverture" style="font-weight: bold; color: var(--color-bleu);">' .$ligne['VALEUR']. '</div>';
                                }

                                $result = $bdd->query('SELECT VALEUR from textes where id = 28');
                                while ($ligne = $result -> fetch())
                                {
                                    echo $ligne['VALEUR'];
                                }
                            ?>
                            <br>
                            <br>
                            <?php
                                $result = $bdd->query('SELECT VALEUR from textes where id = 29');
                                while ($ligne = $result -> fetch())
                                {
                                    echo '<div class="ouverture" style="font-weight: bold; color: var(--color-bleu);">' .$ligne['VALEUR']. '</div>';
                                }

                                $result = $bdd->query('SELECT VALEUR from textes where id = 30');
                                while ($ligne = $result -> fetch())
                                {
                                    echo $ligne['VALEUR'];
                                }
                            ?>
                            </p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- Section 5 - contact -->
        <span class="ancre" id="Nous_contacter"></span>
        <div>
            <div class="section bords-arrondis ombre-bleue" style="margin-bottom: 0;">
            <?php
                $result = $bdd->query('SELECT VALEUR from textes where id = 31');
                while ($ligne = $result -> fetch())
                {
                    echo '<h2 class="centre">' .$ligne['VALEUR']. '</h2>';
                }
            ?>
                <div class="centre">
                    <?php
                        $result = $bdd->query('SELECT VALEUR from textes where id = 32');
                        while ($ligne = $result -> fetch())
                        {
                            echo '<p class="contact">' .$ligne['VALEUR']. '</p>';
                        }
                    ?>
                </div>
                <div class="centre">
                    <?php
                        $result = $bdd->query('SELECT VALEUR from textes where id = 33');
                        while ($ligne = $result -> fetch())
                        {
                            echo '<a href="mailto:seludobex@gmail.com?subject=Contacter%20SELudo"><p class="btn-contact">' .$ligne['VALEUR']. '</p></a>';
                        }
                    ?>
                </div>
                <div class="centre">
                    <?php
                        $result = $bdd->query('SELECT VALEUR from textes where id = 34');
                        while ($ligne = $result -> fetch())
                        {
                            echo '<p class="contact">' .$ligne['VALEUR']. '</p>';
                        }
                    ?>
                </div>
                <div class="centre">
                    <?php
                        $result = $bdd->query('SELECT VALEUR from textes where id = 35');
                        while ($ligne = $result -> fetch())
                        {
                            echo '<a href="mailto:seludobex@gmail.com?subject=Contacter%20SELudo"><p class="btn-contact">' .$ligne['VALEUR']. '</p></a>';
                        }
                    ?>                </div>
                <div class="centre">
                    <?php
                        $result = $bdd->query('SELECT VALEUR from textes where id = 36');
                        while ($ligne = $result -> fetch())
                        {
                            echo '<p class="contact">' .$ligne['VALEUR']. '</p>';
                        }
                    ?>
                </div>
                <div class="centre">
                    <a href="https://www.facebook.com/groups/1998087810339686/" target="blank"><img style="background-color: white;" class="insta" src="images/facebook.png" onmouseover="this.src='images/facebook-bis.png'" onmouseout="this.src='images/facebook.png'"></a>
                    <a href="https://www.instagram.com/seludo.bex/" target="blank"><img style="background-color: white;" class="insta" src="images/insta.png" onmouseover="this.src='images/insta-bis.png'" onmouseout="this.src='images/insta.png'"></a>
                </div>
            </div>
        </div>
    </div>
        <a href="admin/" style="margin-left: 50px; margin-bottom: 50px; color: var(--vert-clair-fond); text-decoration: none;">Bouton pour Admin</a>
        <!-- Pied de page -->

        <div class="pied-de-page centre">
            <img class="pied-de-page-img" src="images/sponsors.jpg" style="max-width: 800px; display: inline-block; background-color: lightgray;">
            <p class="copyright">©Copyright SELudo Bex. Touts droits reservés.</p>
        </div>
    </body>
</html>