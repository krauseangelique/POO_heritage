<?php 
namespace Angelique\PooHeritage\Entity;

final class Enseignant extends Personne
{
    private $coursDonnes;
    private $entreeService;
    private $anciennete;

    // Accesseurs et mutateurs correspondants
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function getNom()
    {
        return $this->nom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }

    public function resume(){
        return "la  personne " . $this->nom . " habite à " . $this->adresse;

    }
}