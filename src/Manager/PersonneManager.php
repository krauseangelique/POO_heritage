<?php
namespace Angelique\PooHeritage\Manager;

//use des class
use Angelique\PooHeritage\Entity\Personne;
use Angelique\PooHeritage\Entity\Etudiant;
use Angelique\PooHeritage\Entity\Enseignant;

class PersonneManager {
    
    // Connection
    private $connexion = null;

    public function __construct ($connex) {

        $this->connexion = $connex;
    }
     // Setter & getter
    public function setConnection($connexion) {
        $this->connexion=$connexion;
    }
    public function getConnection() {
        return $this->connexion;
    }

    // création d'une personne
    public function create(Personne $object) {
        // récupération des données
        $id = $object->getId();
        $nom = $object->getNom();
        $prenom = $object->getPrenom();


        // création sql
        $sql = "UPDATE personne
                SET nom = '.$nom.',
                    prenom = '.$prenom.'
                WHERE id = $id";

        // Prepare statement
        $stmt = $this->getConnection()->prepare($sql);

        // execute
        $stmt->execute();
    }

    // delete
    public function delete($id){
        // création sql
        $sql = "DELETE FROM personne WHERRE id =$id";

        // Prepare statement
        $stmt = $this->getConnection()->prepare($sql);

        // execute
        $stmt->execute();
    }

}

