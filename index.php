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
    
    $etudiant1 = new Etudiant;
    $etudiant1->setNom("Antony");
    $etudiant1->setAdresse("rue du  Village, 50");
    $etudiant1->setCoursSuivis(["Math","Français"]);
    $etudiant1->setDateInscription(new DateTime('2023-10-01'));
    // Affichage de ce que retourne la méthode resume(){}
    echo $etudiant1->resume();
    // ON ne peut pas faire l'écho d'un objet SAUF si la méthode __toString() est implémentée
    echo $etudiant1;
    echo $etudiant1->afficheTableau(); 
    


    ?>
</body>
</html>