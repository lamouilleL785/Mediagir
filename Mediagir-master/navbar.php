<?php include "lienbase.php"; ?>
<link rel="stylesheet" href="navbar.css">
<link rel="stylesheet" href="navbar.js">
<div class="page-wrapper">
    <div class="nav-wrapper">
        <div class="grad-bar"></div>
        <nav class="navbar">
            <img src="./assets/logomedi.png" alt="mediagir" class="logo">

            <div class="menu-toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="nav no-search">
                <li class="nav-item"><a href="centre.php">Le Centre</a></li>
                <li class="nav-item dropdown"><a href="formation.php">Formation</a>
                    <ul></ul>
                </li>
                <li class="nav-item"><a href="contact.php">Contact</a></li>
                <?php if (!isset($_SESSION['id'])) { ?>
                    <a href="connection.php"><?= ('connection') ?></a>
                    <a href="inscription.php"><?= ('inscription') ?></a>
                <?php } else { ?>
                    <a href="messagerie.php"><?= ('messagerie') ?></a>
                    <a href="deconnection.php"><?= ('déconnexion') ?></a>

                <?php } ?>
                <i class="fas fa-search" id="search-icon"></i>
                <input class="search-input" type="text" placeholder="Search..">
            </ul>

        </nav>
    