<?php
$connexion=new PDO(
    'mysql:host=localhost;dbname=sos_mediagir;charset=utf8',
    'root',
    ''
);
$connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
