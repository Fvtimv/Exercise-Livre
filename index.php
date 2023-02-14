
<h1>Exercice Livre</h1>
<p>Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer 
    des livres et leurs auteurs respectifs.</p>

<?php

spl_autoload_register(function ($class_name) {
require_once $class_name . '.php';
});

$auteur1 = new Auteur ("King", "Stephen", "1947-09-21");
$livre1 = new Livre ("Ca", 1138, 1986, 20, $auteur1);
$livre2 = new Livre ("Simetierre", 374, 1983, 15, $auteur1);
$livre3 = new Livre ("Le Fléau", 823, 1978, 14, $auteur1);
$livre4 = new Livre ("Shining", 447, 1977, 16, $auteur1);

// echo $livre1;
// echo $livre2;
// echo $livre3;
// echo $livre4;

// var_dump($auteur1);

echo $auteur1 -> afficherBibliographie();
echo $auteur1 -> displayAge();


// var_dump($livre1);

?>