<?php 
namespace Angelique\PooHeritage\Entity;

final class Etudiant extends Personne implements Affichable {
    private $coursSuivis;
   //  private (string) $niveau; 
    private $niveau;
    private $dateInscription;

    // Accesseurs et mutateurs correspondants
    public function setCoursSuivis($coursSuivis)
    {
        $this->coursSuivis = $coursSuivis;
    }
    public function getCoursSuivis()
    {
        return $this->coursSuivis;
    }

    public function setNiveau($Niveau)
    {
        $this->niveau = $Niveau;
    }
    public function getNiveau()
    {
        return $this->niveau;
    }
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;
    }
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    public function resume(){
        return "la  personne " . $this->nom . " habite à " . $this->adresse . " et il suit le(s) cour(s)" .$this->coursSuivis;
    }

    // methode __toString
    public function __toString()
    {
        echo "Ceci est la class fille Etudiant";
    }

}