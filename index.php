<?php
// Inclusion du fichier de data
include 'include_data.php';

// Pour tester le bon fonctionnement du serveur
// echo 'Hello World!';

?>

<!-- 
Boucle sur le tableau principal, la clé du tableau n'a pas d'utilité dans cette étape 
Je la stocke dans variable $key mais je souhaite utilise le tableau en sa valeur qui contien toutes les infos de l'article 
En suite, récupération des valeurs finales en indiquant les chaînes de caractères correspondantes
-->

<?php foreach($articles as $key => $articlesRow) : ?>

<h1><?= $articlesRow['title'];?></h1>

<a href="detail.php/?key=<?= $key;?>">Accéder à l'article en cliquant ici</a>

<h3>publié le <?= $articlesRow['date'];?> par <?= $articlesRow['author'];?></h3>

<p><?= $articlesRow['content'];?></p>

<?php endforeach ?>