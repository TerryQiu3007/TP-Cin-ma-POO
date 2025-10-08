<?php
include "film.php";
include "realisateur.php";
include "acteur.php";

$acteur1 = new Acteur("Lellouche","Gille",false);
$acteur2 = new Acteur("Civil","François",false);
$acteur3 = new Acteur("Leklou","Karim",true);
$acteur4 = new Acteur("Niney","Pierre",true);
$acteur5 = new Acteur("De Laâge","Lou",false);
$acteur6 = new Acteur("Dussolier","André",true);
$acteur7 = new Acteur("Pattinson","Robert",true);
$acteur8 = new Acteur("Kravitz","Zoë",false);
$acteur9 = new Acteur("Dano","Paul",false);

$real1 = new realisateur ("Jimenez","Cédric");
$real2 = new realisateur ("Gozian","Yann");
$real3 = new realisateur ("Reeves","Matt");
$listReali = [$real1, $real2, $real3];

$film_f1 = new film(1,"Bac Nord",563921, $real1,[$acteur1,$acteur2,$acteur3]);
$film_f1->setNbEntrees(789345);
$film_f2 = new film(2,"Boite Noire",432789, $real2,[$acteur4,$acteur5,$acteur6]);
$film_f3 = new film(3,"The Batman",879214, $real3,[$acteur7,$acteur8,$acteur9]);
$listFilms = [$film_f1, $film_f2, $film_f3];

echo "(3)___________________________________________________________________________________\n";
echo "Modifier du nombre d’entrées==> " . $film_f1->getIdFilm() . " - " . $film_f1->getNomFilm() . " - " . $film_f1->getNbEntrees() . "\n";
echo "(4)___________________________________________________________________________________\n";
foreach ($listFilms as $film) {
    echo "Infos sur le film ==> \n" . $film->getIdFilm() . " - " . $film->getNomFilm() . " - " . $film->getNbEntrees() . "\n";
}
echo "(6)___________________________________________________________________________________\n";
for ($i = 0; $i < 3; $i++)
{
    echo "Infos sur le film ==> \n" . $listFilms[$i]->getIdFilm() . " - " . $listFilms[$i]->getNomFilm() . " - " . $listFilms[$i]->getNbEntrees() . 
    " - " . $listReali[$i]->getNomRealisateur() . " - " . $listReali[$i]->getPrenomRealisateur() . "\n";
}
echo "(7)___________________________________________________________________________________\n";
for ($i = 0; $i < 3; $i++)
{
    echo "Infos sur le film ==> \n" . $listFilms[$i]->getIdFilm() . " - " . $listFilms[$i]->getNomFilm() . " - " . $listFilms[$i]->getNbEntrees() . 
    " - " . $listReali[$i]->getNomRealisateur() . " - " . $listReali[$i]->getPrenomRealisateur() . "\nListe des acteurs==> \n";
    for($init = 0; $init < 3; $init++)
    {
    echo $listFilms[$i]->getActeurs()[$init]->getNomActeur() . " - " . $listFilms[$i]->getActeurs()[$init]->getPrenomActeur() . " - ";
    if($listFilms[$i]->getActeurs()[$init]->getEstCesaree()== true)
    {
        echo "true";
    }else{
        echo "false";
    }
    echo "\n";
    }
}
    

