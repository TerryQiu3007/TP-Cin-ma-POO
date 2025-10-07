<?php
class film{
    private int $idFilm;
    private string $nomFilm;
    private int $nbEntrees;
    private realisateur $sonRealisateur;
    private array $lesActeurs = [];
    
    public function __construct(int $idFilm, string $nomFilm, int $nbEntrees, realisateur $sonRealisateur)
    {
        $this->idFilm = $idFilm;
        $this->nomFilm = $nomFilm;
        $this->nbEntrees = $nbEntrees; 
        $this->sonRealisateur = $sonRealisateur; 
    }

    public function getIdFilm(): int
    {
        return $this->idFilm;
    }

     public function getNomFilm(): string
    {
        return $this->nomFilm;
    }

    public function getNbEntrees(): int
    {
        return $this->nbEntrees;
    }

    public function setNbEntrees(int $nbEntrees): void
    {
        $this->nbEntrees = $nbEntrees; 
    }
    public function getSonRealisateur() : realisateur
    {
        return $this->sonRealisateur;
    }
}