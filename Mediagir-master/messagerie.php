<?php include "header.php" ?>
<?php include "navbar.php" ?>



<body class="color text">

    <div id="parente" class="taille container">

        <?php
        include "lienbase.php";
        if (isset($_POST['idToDelete'])) {
            $id = $_POST['idToDelete'];

            ;
            $requete = $connexion->prepare('DELETE FROM `message` WHERE `message`.`id` = ?');
            //execution de la requête
            $requete->execute([$id]);
        }

        //préparation de  la requête
        $requete = $connexion->prepare('SELECT * FROM message');
        //execution de la requête
        $requete->execute();
        //affectation du résulat dans la vaiable $listeArticle
        $listeObjet = $requete->fetchAll();



        foreach ($listeObjet as $Objet) { ?>




            <div class="card text-black " style="max-width: 18rem;">
                <div class="card-header"><?= $Objet["objet"] ?></div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $Objet["contenu"] ?></h5>
                    <p class="card-text"><?php echo $Objet["date"] ?></p>
                    <p class="card-text"><?php echo $Objet["vosCoordoner"] ?></p>

                </div>
                <form method="post">
                    <input type="hidden" name="idToDelete" value="<?= $Objet["id"] ?>" />
                    <button type="submit">Supprimer</button>
                </form>
            </div>



        <?php
        };

        ?>

    </div>





</body>