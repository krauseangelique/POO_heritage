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
        $this->anciennete = $anciennete;
    }
    public function getAnciennete()
    {
        return $this->anciennete;
    }

    public function resume(){
        // On ne retourne par $this->nom mais bien parent::getNom() afin de pouvoir prendre en compte des différences d'affichage sur les getter
        // self est utilisé car coursDonnes est dans la class fille
        return "l'enseignant " . parent::getNom() . " habite à " . parent::getAdresse() . "et il donne le(s) cours de " . self::getCoursDonnes();
    }

    // Ajout de la methode __toString
    public function __toString()
    {
        return "<br>Ceci est la class fille Enseignant, " . self::resume();
    }

    // méthodes de l'interface Affichable
    public function afficheTableau()
    {
        return "<br> L'enseignant donne le(s) cours " . self::getCoursDonnes();
    }

    public function afficheLigne()
    {
        
    }
}