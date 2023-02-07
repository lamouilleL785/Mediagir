<?php include "header.php" ?>
<?php include "navbar.php" ?>
<?php include "lienbase.php" ?>
<?php
?>

<body>
    <h1></h1>

    <?php

    if (isset($_POST['objet'])) {
        $errObjet = false;
        if (!$errObjet) {

            $requete = $connexion->prepare('INSERT INTO message (objet, contenu, date, vosCoordoner) VALUES (? ,? ,now(), ?)');

            $requete->execute([
                $_POST["objet"],
                $_POST["contenu"],
                $_POST["vosCoordoner"],
            ]);
            //affectation du résulat dans la vaiable $listeArticle
            $listeMusqiue = $requete->fetchAll();

    ?>
        <?php } ?>
    <?php } ?>

    <form enctype="multipart/form-data" method="POST" class="container mb-4">
        <div class="form-group ">
            <label class="col-form-label mt-4" for="inpuObjet">Objet</label>
            <input value="" name="objet" type="text" class="form-control" placeholder="Objet de la requette" id="inputObjet">
            <div class="invalid-feedback"></div>
        </div>

        <div class="form-group">
            <label for="inputContenue" class="form-label mt-4">Contenue</label>
            <textarea name="contenu" class="form-control" id="inputContenu" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="inputVos-coordoner" class="form-label mt-4">Vos coordoner</label>
            <textarea name="vosCoordoner" class="form-control" id="inputVosCoordoner" rows="3"></textarea>
        </div>

        <input class="btn btn-primary mt-4" type="submit" value="Ajouter l'article">



    </form>
</body>