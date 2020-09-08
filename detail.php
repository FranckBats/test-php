<?php

// Inclusion du fichier de data
include 'include_data.php';

// Vu que j'ai transmis l'id dans l'url je la récupère avec la superglobale $_GET
$key = $_GET['key'];

// Je vais chercher l'article correspondant grâce à son id et je le mets dans une variable pour l'utiliser dans le HTML
$articleRow = $articles[$key]; 

?>

<a href="../index.php">Cliquez ici pour revenir à l'accueil</a>

<h1>Détail de l'article n° : <?= $articleRow['id'] ?></h1>

<h3>publié le <?= $articleRow['date'];?> par <?= $articleRow['author'];?></h3>

<p><?= $articleRow['content'];?></p>