<?php
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Premiers tests du CSS</title>
    </head>

    <body>
        <h1>Mon super site</h1>
        
        <p>Bonjour et bienvenue sur mon site !</p>
        <p>Pour le moment, mon site est un peu <em>vide</em>. Patientez encore un peu !</p>
    </body>
$bdd = new PDO('mysql:host=localhost;dbname=bdh;charset=utf8', 'root', '');

$reponse = $bdd->query('Select * from test');
$donnees = $reponse-> fetch();

echo $donnees['Nom'];

$salut;
?>