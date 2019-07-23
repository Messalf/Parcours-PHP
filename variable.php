<?php
    /* nom de variable

    Toute les variables se déclarent en commençant par un "$"
    par exemple : $nom = "le nom"; ( TOUJOURS FINIR AVEC LE ";" SINON KAPUT)

    Variable arithmétique (nombre)
    $chiffre = 450;
    $moyenne = ($chiffre1 + $chiffre2)/2;

    concaténation
    echo $nom . " " . $prenom; (le "." sert à faire la concaténation et echo "ecoute/affiche")
    echo "$nom $prenom"; 
    */



    // Exo 1
/*
    $nom = "Tagliafero";
    $prenom = "Massimo";
    $age = 28;
*/
    // echo "Bonjour" . " " . $prenom . " " . "enfant de la famille" . " " . $nom . " " . "ayant atteint le level" . " " . $age;
    // echo "Bonjour $prenom enfant de la famille $nom ayant atteint le level $age";

    // Exo 2
/*
    $km = 1;
    echo "$km \n"; // \n sert à revenir à la ligne
    $km = 3;
    echo "$km \n";
    $km = 125;
    echo "$km \n";
*/

    // Exo 3
/*
    $string = "biloute";
    $int = 42;
    $float = 1.4;
    $boolean = true; // ou false
    echo "$string $int $float $boolean";
*/

    // Exo 4
/*
    $int = "";
    echo $int;
    $int = 42;
    echo $int;
*/

    // Exo 5
/*
    $first = (3 + 4);
    $second = (5 * 20);
    $third = (45 / 5);
    echo "$first \n$second \n$third"; // \n sert à revenir à la ligne (oui, encore)
*/
    // Exo 6
/*
    $price = 785;
    $reduction = 30;
    $finalprice = ($price - ($price/100*$reduction));
    echo "Le prix du T-shirt a $price € avec la ristourne de $reduction % est de $finalprice €"
*/

?>