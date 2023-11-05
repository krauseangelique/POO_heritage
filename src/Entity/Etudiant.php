<?php 
namespace Angelique\PooHeritage\Entity;

use DateTime;

class Etudiant extends Personne implements Affichable {

    // Le typehint permet d'imposer à une fonction d'accepter uniquement des données d'un certain type. Il prefixe la variable du type . Dans : craftyx.fr/blog/2015/03/17/typehint-scalar-php7
    private array $coursSuivis;
    private string $niveau;
    private DateTime $dateInscription;

    // Accesseurs et mutateurs correspondants
    public function setCoursSuivis(array $coursSuivis)
    {
        $this->coursSuivis = $coursSuivis;
    }
    
    public function getCoursSuivis()
    {
        // array $coursSuivis donc je vais parcourir le tableau 
        // variable résultat
        $result = "";
        foreach ($this->coursSuivis as $key => $value) {
            // concatenation pour éviter écrasement 
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

    /* Doc. Fomat date
        $date = new DateTimeImmutable('2000-01-01');
        echo $date->format('Y-m-d H:i:s');
    */
    public function getDateInscription()
    {
        return $this->dateInscription->format('d-m-Y'); // objet de type DateTime auquel j'ajoute format (ce qu'on appel le chainage de méthodes) pour formaliser le format date ici en français et sans les h m s
    }
    // la méthode est reprise dans la class mère en tant qu'abstract donc je dois l'implémenter dans les filles
    public function resume(){
        // le nom est repris dans la class mère donc j'indique parent devant le getNom()
        // le cours suivi se trouve dans la même class fille donc j'indique self::getCoursSuivis()
        return "l'étudiant " .  parent::getNom() . " habite à " . parent::getAdresse() . "<br> L'étudiant' suit le(s) cours " . self::getCoursSuivis() . " .<br>L'étudiant s'est inscrit le " . self::getDateInscription() ;
    }

    // Ajout de la methode __toString
    public function __toString()
    {
        return "<br>Ceci est la class fille Etudiant,  " . self::resume();
    }

    // méthodes de l'interface Affichable
    public function afficheTableau()
    {
        // return "<br> L'étudiant suit le(s) cours " . self::getCoursSuivis();
        // la méthode afficheTableau retournera les données de l’objet dans un tableau (nom attribut ; valeur)
        /*
        $coursSuivis;
    private string $niveau;
    private DateTime $dateInscription;
        */
        $table = "<table style='border: 1px solid green;'><tr><th>Attribut</th><th>Valeur</th></tr>";
        $table.= "<tr><td>Nom</td><td>". $this->getNom()."</td>";
        $table.= "<tr><td>Prenom</td><td>". $this->getPrenom(). "</td>";
        $table.= "<tr><td>Adresse</td><td>". $this->getAdresse(). "</td>";
        $table.= "<tr><td>Code postal</td><td>". $this->getCp(). "</td>";
        $table.= "<tr><td>Pays</td><td>". $this->getPays(). "</td>";
        $table.= "<tr><td>Societe</td><td>". $this->getSociete(). "</td>";
        $table.= "<tr><td>Cours suivis</td><td>". $this->getCoursSuivis(). "</td>";
        $table.= "<tr><td>Niveau</td><td>". $this->getNiveau(). "</td>";
        $table.= "<tr><td>Date d'inscription</td><td>". $this->getDateInscription(). "</td>";
        $table.= "</table>";

        return $table;
        
    }

    public function afficheLigne()
    {
        $ligne = $this->getNom(). " , ". $this->getPrenom(). " , ". $this->getAdresse(). " , ". $this->getCp(). " , ". $this->getPays(). " , ". $this->getSociete(). " , ". $this->getCoursSuivis(). " , ". $this->getNiveau(). " , ". $this->getDateInscription();
        return $ligne;
        
    }
}