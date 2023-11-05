<?php
namespace Angelique\PooHeritage\Manager;

//use des class

use Angelique\PooHeritage\Entity\Etudiant;
use Angelique\PooHeritage\Entity\Enseignant;

abstract class EntityManager {
    
    // Connection
    protected $connexion = null;

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

    abstract public function create($enseignant);
    abstract public function delete($id);
    abstract public function update($enseignant);
}

