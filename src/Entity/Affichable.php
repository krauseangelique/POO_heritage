<?php 

namespace Angelique\PooHeritage\Entity;

interface Affichable 
{
    /*
Une interface n'a pas d'état / pas de variables
Toutes les méthodes doivent être implémentées
Une classe peut implémenter plusieurs interfaces, n'étendre qu'une seule classe
    */
    
// Signature des méthodes
public function afficheTableau();
    
    public function afficheLigne();


}