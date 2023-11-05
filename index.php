<?php 
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

    // Affichage de ce que retourne la méthode resume(){}
    echo $etudiant1->resume();

    // ON ne peut pas faire l'écho d'un objet SAUF si la méthode __toString() est implémentée
    echo $etudiant1;

    // Affichage de ce que retourne la méthode afficheTableau();
    echo $etudiant1->afficheTableau();

    echo "Affichage d'un étudiant : ";
    // Affichage de ce que retourne la méthode afficheLigne();
    echo $etudiant1->afficheLigne();

    echo "<br><br> Coucou l'enseignant ! <br>";

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
    

    // Affichage de ce que retourne la méthode resume(){}
    echo $etudiant1->resume();





    echo "<br> Coucou l'enseignant ! <br>";

    


    ?>
</body>
</html>