<?php
// Condition if/else :
 /*   $note = 12;
    if($note > 10){
        echo "Bravo, vous avez la moyenne";
    } else {
        echo "T'es une merde";
    } */

// Condition if/else interactif
/*
    $note = (int) readline("Entrez votre note:"); // (int) veut dire qu'il s'agira d'un chiffre et readline sert à récupérer la valeur qui sera entrée
    if($note > 10){
        echo "Bravo, t'es un champion";
    } else if ($note === 10) {
        echo "T'es vachement juste m'petit";
    } else {
        echo "You are so bad";
    }
*/

// Condition IF ELSE Interactif 2

/*
$action = (int) readline("Entrez votre action: (1: attaquer, 2: défendre, 3: passer mon tour \n");
if ($action === 1) {
    echo "J'attaque";
}elseif ($action === 2) {
    echo "Je défends";
}elseif ($action === 3) {
    echo "Je passe mon tour";
}else {
    echo "Commande inconnue";
}
*/

// Switch case
/* $action = (int) readline("Entrez votre action: (1: attaquer, 2: défendre, 3: passer mon tour \n");
switch ($action) {
    case 1:
        echo "J'attaque !";
        break;
    case 2:
        echo "Je défends !";
        break;
    case 3:
        echo "Je passe mon tour :(";
        break;
    default:
        echo "Commande inconnue beep boop";
        break;
}
 */

// Exo 1
/*
$age = (int) 27; // Ne pas oublier de typé ses variables

if ($age >= 18){
    echo "Vous êtes majeur";
} else {
    echo "Vous êtes mineur";
}
*/

// Exo 2
/*
$IsEasy = (boolean) true;

if ($IsEasy === true) {
    echo "C'est facile !!!";
} else {
    echo "C'est difficile !!!";
}
*/

// Exo 3 
/*
$age = (int)readline("Quel est votre âge ? \n");
$gender = (string)readline("Quel est votre genre ? Homme/Femme \n");
$gender = strtolower($gender); // Permet de rendre le readline en full minuscule => Homme = homme

if ($age >= 18 && $gender === "homme") {
    echo "Vous êtes un homme et vous êtes majeur";
} else if ($age < 18 && $gender === "homme") {
    echo "Vous êtes un homme mineur";
} else if ($age >= 18 && $gender === "femme") {
    echo "Vous êtes une femme adulte";
} else if ($age < 18 && $gender === "femme") {
    echo "Vous êtes une femme mineur";
} else {
    echo "Remplissez correctement le formulaire";
}
*/

// Exo 4
/*
$magnitude = (int) readline("Veuillez entrer la magnitude entre 1 et 9 \n");

switch ($magnitude) {
    case 1 :
        echo "Micro-séisme impossible à ressentir.";
        break;
    case 2 :
        echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
        break;
    case 3 :
        echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
        break;
    case 4 :
        echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
        break;
    case 5 :
        echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
        break;
    case 6 :
        echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
        break;
    case 7 :
        echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
        break;
    case 8 :
        echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
        break;
    case 9 :
        echo "Séisme capable de tout détruire sur une très vaste zone.";
        break;
}
*/

// Exo 5
/*
$maVariable = (string) readline("Veuillez entrer votre genre ? Homme/Femme \n");
$maVariable = strtolower($maVariable);

if ($maVariable != "homme") {
    echo "C'est une développeuse !!!";
} else {
    echo "C'est un développeur !!!";
}
*/

// Exo 6
/*
$monAge = (int)readline("Quel est votre âge ? \n");

if ($monAge >= 18){
    echo "Tu es majeur";
} else {
    echo "Tu n'es pas majeur";
}
*/

// Exo 7
/*
$maVariable = (boolean) false;

if ($maVariable == false) {
    echo "C'est pas bon !!!";
} else {
    echo "C'est ok !!!";
}
*/


// Exo 8
/*
$maVariable = (boolean) true;

if ($maVariable == true) {
    echo "C'est ok !!!";
} else {
    echo "C'est pas bon !!!";
}
*/

?>