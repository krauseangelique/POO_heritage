<?php 
namespace Angelique\PooHeritage\Entity;

use DateTime;

final class Enseignant extends Personne implements Affichable
{
    // typehint des attributs: array, DateTime et int
    private array $coursDonnes;
    private DateTime $entreeService;
    private int $anciennete;

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

    // implement Affichable
    public function afficheTableau()
    {
    }

    public function afficheLigne()
    {
    }
}