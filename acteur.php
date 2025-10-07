<?php
class Acteur extends film{
    private string $nomActeur;
    private string $prenomActeur;
    private bool $estCesaree;

    public function __construct(string $nomActeur, string $prenomActeur, bool $estCesaree)
    {
        $this->nomActeur = $nomActeur;
        $this->prenomActeur = $prenomActeur;
        $this->estCesaree = $estCesaree;
    }

    public function getNomActeur():string 
    {
        return $this->nomActeur;
    }
    public function getPrenomActeur():string 
    {
        return $this->prenomActeur;
    }
    public function getEstCesaree():bool
    {
        return $this->estCesaree;
    }
    public function setNomActeur($estCesaree):void
    {
        $this->estCesaree = $estCesaree;
    }
}