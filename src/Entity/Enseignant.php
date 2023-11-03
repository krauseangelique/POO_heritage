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
    public function setCoursDonnes(array $coursDonnes)
    {
        $this->coursDonnes = $coursDonnes;
    }
    public function getCoursDonnes()
    {
        // array $coursDonnes. Parcourir le tableau
        $result = "";
        foreach ($this->coursDonnes as $key => $value) {
            // concatenation pour éviter écrasement 
            $result .= $value . ' ';

        }
        return $result;
    }

    public function setEntreeService(DateTime $entreeService)
    {
        $this->entreeService = $entreeService;
    }
    public function getEntreeService()
    {
        return $this->entreeService->format('d-m-Y'); // objet de type DateTime auquel j'ajoute format (ce qu'on appel le chainage de méthodes) pour formaliser le format date ici en français et sans les h m s
    }
    public function setAnciennete(int $anciennete)
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

    // Ajout de la methode __toString
    public function __toString()
    {
        echo "Ceci est la class fille Enseignant, " . self::resume();
    }

    // implement Affichable
    public function afficheTableau()
    {
    }

    public function afficheLigne()
    {
    }
}