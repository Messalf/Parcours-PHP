<?php

// Boucle While
/*
$chiffre = null;
while ($chiffre !== 10) {
    $chiffre = (int) readline("Entrez un chiffre:");
    //break; // Pour forcer à sortir de la boucle
}
echo "Bravo vous avez gagné";
*/

// Boucle for
/*
for ($i=0; $i <= 10 ; $i++) { // ou $i + 2 va incrémenter par 2
    echo "- $i \n";
}
*/

// Boucle ForEach 1
/*
$notes = [10, 15, 16];


foreach ($notes as $note)
    echo "- $note \n";
*/


// Boucle ForEach 2
/*
$eleves = [
    "1ère" => [Jean, Marc, Jeanne, Arthur],
    "2ème" => [Emilie, Raphaël]
];

foreach ($eleves as $classe => $listeEleves) {
    echo "La classe $classe: \n";
    foreach($listeEleves as $eleve){
    echo "- $eleve\n";
}
    echo "\n";
}
*/

// Exo 1
/*
for ($i = 0; $i <= 10; $i++) {
    echo "- $i \n";
}
*/

// Exo 2
/*
$initial = (int) 0;
$seconde =(int) 15;
while ($initial !== 21) {
    $calcul = ($initial * $seconde);
    echo "$calcul \n";
    $initial++;
}
*/

// Exo 3
/*
$initial =(int) 100;
$seconde =(int) 5;
while ($initial >= 10) {
    $calcul = ($initial * $seconde);
    echo "$calcul \n";
    $initial--;
}
*/

// Exo 4
/*
$variable =(int) 1;
while ($variable <= 10) {
    echo "$variable \n";
    $variable = $variable + ($variable/2);
}
*/

// Exo 5
/*
for ($i=1; $i <= 15; $i++) {
    echo "On y arrive presque ! encore $i \n";
}
*/

// Exo 6
/*
for ($i = 20; $i >= 0; $i--) {
    echo "C'est presque bon ! Encore $i \n";
}
*/

// Exo 7
/*
for ($i = 1; $i <= 100; $i++) {
    echo "On tient le bon bout ! Encore $i \n";
    $i = $i+14;
}
*/

// Exo 8
/*
for ($i = 200; $i >= 0; $i--) {
    echo "Enfin !!!!!!!!!!! encore $i \n";
    $i = $i-11;
}
*/
?>