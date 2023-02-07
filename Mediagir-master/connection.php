<?php
 session_start(); 
include "header.php";?>
<?php
if (isset($_POST['login'])) {

    //connexion base de donnée
    include 'lienbase.php';

    //préparation de  la requête
    $requete = $connexion->prepare('SELECT * FROM utilisateur
    WHERE login = ?
    ');
    //execution de la requête
    $requete->execute([$_POST['login']]);
    $utilisateur = $requete->fetch();

    var_dump($utilisateur);
    if ($utilisateur == false) {
        echo 'mauvais login';
    } else {
        if (password_verify($_POST['password'], $utilisateur['password'])) {
            $_SESSION['id'] = $utilisateur['id'];
            header('Location: index.php');
        } else {
            echo 'mauvais mot de passe';
        }
    }
}



?>
<form method='POST'>

    <input name='login'>
    <input name='password' type='password'>
    <input type="submit" value='connection'>



</form>