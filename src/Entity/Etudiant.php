<?php 
namespace Angelique\PooHeritage\Entity;

use DateTime;

final class Etudiant extends Personne implements Affichable {

    // Le typehint permet d'imposer à une fonction d'accepter uniquement des données d'un certain type. Il prefixe la variable du type . Dans craftyx.fr/blog/2015/03/17/typehint-scalar-php7
    private array $coursSuivis;
    private string $niveau;
    private DateTime $dateInscription;

    // Accesseurs et mutateurs correspondants
    public function setCoursSuivis(array $coursSuivis)
    {
        $this->coursSuivis = $coursSuivis;
    }
    /**
     * @return string
     */
    public function getCoursSuivis()
    {
        // array $coursSuivis donc je vais parcourir le tableau et transformer après en string
        $result = "";
        foreach ($this->coursSuivis as $key => $value) {

        $result .= $value . ' ';
            

        }
        return $result;
    }

    public function setNiveau(string $Niveau)
    {
        $this->niveau = $Niveau;
    }
    public function getNiveau()
    {
        return $this->niveau;
    }
    public function setDateInscription(DateTime $dateInscription)
    {
        $this->dateInscription = $dateInscription;
    }
    /**
     * @var \DateTime $dateInscription
     */
    /*
$date = new DateTimeImmutable('2000-01-01');
echo $date->format('Y-m-d H:i:s');
    */
    public function getDateInscription()
    {
        return $this->dateInscription->format('d-m-Y'); // objet de type DateTime auquel j'ajoute format (chainage de méthodes)
    }

    public function resume(){
        // le nom est repris dans la class mère donc j'indique parent devant le getNom()
        // le cours suivi se trouve dans la même class fille donc j'indique self::getCoursSuivis()
        return "la  personne " .  parent::getNom(). " habite à " . parent::getAdresse() . " et il suit le(s) cour(s)" . self::getCoursSuivis() . " l'étudiant s'est inscrit le " . self::getDateInscription() ;
    }

    // methode __toString
    public function __toString()
    {
        return "Ceci est la class fille Etudiant ". self::resume();
    }

    // implement Affichable
    public function afficheTableau()
    {
        return "suit le(s) cour(s)" . self::getCoursSuivis();
    }

    public function afficheLigne()
    {

    }
}