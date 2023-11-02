<?php 
namespace Angelique\PooHeritage\Entity;

final class Enseignant extends Personne implements Affichable
{
    private $coursDonnes;
    private $entreeService;
    private $anciennete;

    // Accesseurs et mutateurs correspondants
    public function setCoursDonnes($coursDonnes)
    {
        $this->coursDonnes = $coursDonnes;
    }
    public function getCoursDonnes()
    {
        return $this->coursDonnes;
    }

    public function setEntreeService($entreeService)
    {
        $this->entreeService = $entreeService;
    }
    public function getEntreeService()
    {
        return $this->entreeService;
    }
    public function setAnciennete($anciennete)
    {
        $this->anciennete;
    }
    public function getAnciennete()
    {
        return $this->anciennete;
    }

    public function resume(){
        return "la  personne " . $this->nom . " habite à " . $this->adresse . "et il donne le(s) cour(s)" .$this->coursDonnes;

    }
    // methode __toString
    public function __toString()
    {
        echo "Ceci est la class fille Enseignant";
    }
}