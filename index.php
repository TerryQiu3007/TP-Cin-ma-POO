<?php
include "film.php";
include "realisateur.php";

$real1 = new realisateur ("Jimenez","Cédric");
$real2 = new realisateur ("Gozian","Yann");
$real3 = new realisateur ("Reeves","Matt");
$listReali = [$real1, $real2, $real3];

$film_f1 = new film(1,"Bac Nord",563921, $real1);
$film_f1->setNbEntrees(789345);
$film_f2 = new film(2,"Boite Noire",432789, $real2);
$film_f3 = new film(3,"The Batman",879214, $real3);

echo "Modifier du nombre d’entrées==> " . $film_f1->getIdFilm() . " - " . $film_f1->getNomFilm() . " - " . $film_f1->getNbEntrees() . "\n";

$listFilms = [$film_f1, $film_f2, $film_f3];
foreach ($listFilms as $film) {
    echo "Infos sur le film ==> \n" . $film->getIdFilm() . " - " . $film->getNomFilm() . " - " . $film->getNbEntrees() . "\n";
}

foreach ($listFilms as $film) {
    foreach ($listReali as $reali) {
    echo "Infos sur le film ==> \n" . $film->getIdFilm() . " - " . $film->getNomFilm() . " - " . $film->getNbEntrees() . " - " . $reali->getNomRealisateur() . " - " . $reali->getPrenomRealisateur() . "\n";
    }
}
