<?php

use Angeliqie\PooHeritage\Manager\EnseignantManager;
use Angelique\PooHeritage\Entity\Personne;
use Angelique\PooHeritage\Entity\Etudiant;
use Angelique\PooHeritage\Entity\Enseignant;
use Angelique\PooHeritage\Entity\Affichable;
require_once 'vendor/autoload.php'; // permet de CHARGER toutes les class de src

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Héritage : Exercice 4</title>
</head>
<body>
    <?php 
    echo "Coucou <br>";
    
    // j'instancie un nouvel objet
    $etudiant1 = new Etudiant;
    $etudiant1->setNom("berben");
    $etudiant1->setPrenom("Antony");
    $etudiant1->setAdresse("rue du  Village, 50");
    $etudiant1->setCp("4030");
    $etudiant1->setPays("belgique");
    // $etudiant1->setSociete("");
    $etudiant1->setCoursSuivis(["Math","Français"]);
    $etudiant1->setNiveau("troisième");
    $etudiant1->setDateInscription(new DateTime('2023-10-01'));

    // j'instancie un nouvel objet
    $etudiant2 = new Etudiant;
    $etudiant2->setNom("krause");
    $etudiant2->setPrenom("Angelique");
    $etudiant2->setAdresse("rue du Vieux Thier, 20");
    $etudiant2->setCp("4400");
    $etudiant2->setPays("belgique");
    // $etudiant1->setSociete("");
    $etudiant2->setCoursSuivis(["Français", "Allemand"]);
    $etudiant2->setNiveau("deuxième");
    $etudiant2->setDateInscription(new DateTime('2023-09-01'));



    // Affichage de ce que retourne la méthode resume(){}
    echo $etudiant1->resume();

    
    // ON ne peut pas faire l'écho d'un objet SAUF si la méthode __toString() est implémentée . 2. Afficher un Etudiant et un Enseignant avec echo $monobjet ;
    echo $etudiant1;

    // 3. Afficher un etudiant en faisant appel à afficheTableau et afficheLigne

    // Affichage de ce que retourne la méthode afficheTableau();
    echo $etudiant1->afficheTableau();

    echo "Affichage d'un étudiant : ";
    // Affichage de ce que retourne la méthode afficheLigne();
    echo $etudiant1->afficheLigne();

    echo "<br><br>Afficher les resumés de Etudiant et Enseignant <br>";

    // j'instancie un nouvel objet
    $enseignant1 = new Enseignant;
    $enseignant1->setNom("dupont");
    $enseignant1->setPrenom("cesar");
    $enseignant1->setAdresse("rue du  Village, 50");
    $enseignant1->setCp("rue du  Village, 50");
    $enseignant1->setPays("ouganda");
    $enseignant1->setSociete("cuivre & zinc");
    $enseignant1->setCoursDonnes(["Math", "Français"]);
    $enseignant1->setEntreeService(new DateTime('2003-09-01'));
    $enseignant1->setAnciennete(7);
    
    // 2. Afficher un Etudiant et un Enseignant avec echo $monobjet ;
    echo $enseignant1;
    echo "<br>";
    // Affichage de ce que retourne la méthode resume(){}
    echo $etudiant1->resume();


    // 1. Afficher les resumés de Etudiant et Enseignant en bouclant sur un tableau d’objets avec la methode resume
    $tableauPersonnes = [$etudiant1, $etudiant2, $enseignant1];

    foreach ($tableauPersonnes as $key => $personne) {
        echo $personne->resume();
        echo "<hr>";
    }
// connection à la DB PDO

echo "<br>";


    try {

        $connexion = new \PDO('mysql:host=localhost;dbname=poo_heritage', 'root', ''); // création d'une instance de PDO

        $objetPeronneManager = new EnseignantManager($connexion); // il passe PersonneManager au constructeur


        $personne1 = $objetPeronneManager->read(1); // read du premier id donc de la première personne DANS la DB

        // var_dump($personne1);
        // var_dump($personneManager);


    } catch (Exception $exception) {
        // var_dump($exception);
        echo "<br>Le message d'erreur est : " . $exception->getMessage(); // je récupère ainsi le message d'erreur de php
    }
    




    


    ?>
</body>
</html>