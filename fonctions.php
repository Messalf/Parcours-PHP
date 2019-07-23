<?php 
/*
$notes = [10, 15, 16]; // Tableau
$sum = array_sum($notes); // Fonctions somme
$count =count($notes); // Nombre de note du tab notes
var_dump($sum); // Debug terminal
var_dump($count);
echo "Vous avez " .round ($sum / $count , 2) . " de moyenne"; // .round = arrondi => dans la parenthese le ,2 permet de lui dire cmb de nombre après la virgule
*/

// Exo 1
/*
function returnTrue() {
    return true;
}
echo returnTrue();
*/

// Exo 2
/*
function returnString($nom) {
    return "Hello" . " " . "$nom";
}
echo returnString("Massimo");
*/

// Exo 3
/*
function nomComplet ($nom,$prenom) {
    return "Hello" . " " . "$nom" . " " . "$prenom";
}
echo nomComplet ("Tagliafero", "Massimo");
*/

// Exo 4
/*
function exo4($num1,$num2) {
    if ($num1 > $num2) {
        echo "Le premier nombre est plus grand";
    } else if ($num1 < $num2) {
        echo "Le premier nombre est plus petit";
    } else ($num1 === $num2) {
        echo "Les deux nombres sont identiques";
    
}
exo4((int)readline("Entrez un nombre:"),(int)readline("Entre un second nombre:")); 
*/

// Exo 5
/*
function prenomAge($age, $prenom) {
    return "Bonjour $prenom, tu as $age ans";
}
echo prenomAge((int)readline("Entrez votre âge \n"), (string)readline("Entrez votre prénom \n"));
*/

// Exo 6
/*
function presentation($nom, $prenom, $age) {
    return "Bonjour $nom $prenom ,tu as $age ans";
}
echo presentation((string)readline("Entrez votre nom:\n"), (string)readline("Entrez votre prénom: \n"), (int)readline("Entrez votre âge: \n"));
*/

// Exo 7
/*
function agender($age, $gender) {
    $gender = strtolower($gender);
    if ($age >= 18 && $gender == "homme") {
        echo "Vous êtes un homme majeur";
    } else if ($age < 18 && $gender == "homme") {
        echo "Tu es un mineur, petit";
    } else if ($age >= 18 && $gender == "femme") {
        echo "Vous êtes une femme majeur";
    } else if ($age < 18 && $gender == "femme") {
        echo "Tu es une mineur, fillette";
    }
    
}
echo agender((int)readline("Entrez votre âge: \n"), (string)readline("Quelle est votre genre ? Homme/Femme \n"));
*/

// Exo 8
/*
function somme($first = 3, $second = 44, $third = 42) {
   $total = $first + $second + $third;
   echo "La somme des 3 nombres est de $total";
}
echo somme();
*/
?>