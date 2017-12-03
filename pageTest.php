<?php
// Sous WAMP (Windows)
$bdd = new PDO('mysql:host=localhost;dbname=bdh;charset=utf8', 'root', '');

$reponse = $bdd->query('Select * from test');
$donnees = $reponse-> fetch();

echo $donnees['Nom'];

$salut;
?>