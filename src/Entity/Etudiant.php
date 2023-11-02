<?php 
namespace Angelique\PooHeritage\Entity;

final class Etudiant extends Personne {
    private $coursSuivis;
   //  private (string) $niveau; 
    private $niveau;
    private $dateInscription;

    // Accesseurs et mutateurs correspondants
    public function setCoursSuivis($nom)
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