<?php 
// namespace

// classe MÈRE
abstract class Personne 
{
    // attributs en visibilité protected pour être accessibles depuis l'intérieur de la classe et les classes qui héritent de la classe parente (notion d'héritage)
    protected $nom;
    protected $prenom;
    protected $adresse;
    protected $cp;
    protected $pays;
    protected $societe;

    // Accesseurs et mutateurs correspondants
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }
    public function getAdresse()
    {
        return $this->adresse;
    }
    public function setCp($cp)
    {
        $this->cp = $cp;
    }
    public function getCp()
    {
        return $this->cp;
    }
    public function setPays($pays)
    {
        $this->pays = $pays;
    }
    public function getPays()
    {
        return strtoupper($this->pays);
    }
    public function setSociete($societe)
    {
        $this->societe = $societe;
    }
    public function getSociete()
    {
        return $this->societe;
    }
    /* Nota Bene : 
    https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/oriente-objet-methode-classe-abstraite/

    une classe abstraite ne peut pas être instanciée directement et contient généralement des méthodes abstraites. L’idée ici va donc être de définir des classes mères abstraites et de pousser les développeurs à étendre ces classes.

    Lors de l’héritage d’une classe abstraite, les méthodes déclarées comme abstraites dans la classe parent doivent obligatoirement être définies dans la classe enfant avec des signatures (nom et paramètres) correspondantes.

    */
    // méthode abstraite qui retourne un résumé des infos de l'objet
    abstract public function resume();
    public function getNom(){
        return " La personne dont le nom est " .  strtoupper($this->nom);
    }
    public function getPrenom(){
        return " et le prénom est " . $this->prenom;
    }

    /*
        echo " La personne dont le nom est " . $this->nom . " et le prénom est " . $this->prenom . " habite à " . $this->adresse . " au / à le / à la " . $this->pays . " et travaille pour " . $this->societe";
    */
}

