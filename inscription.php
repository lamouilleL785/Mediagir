<?php if (isset($_POST['login'])) {
    include 'lienbase.php';
    $requete = $connexion->prepare('INSERT INTO `utilisateur` (`id`, `login`, `password`) VALUES (NULL,?,?)');
    $motdepasse = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $requete->execute([$_POST['login'], $motdepasse]);
    header('Location: connection.php');
}?>


<form method='POST'>
    <input name='login'>
    <input name='password' type='password'>
    <input type="submit" value='connection'>
</form>