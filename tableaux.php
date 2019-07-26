<?php
/*
// Exo 1
$array = [
    "janvier",
    "février",
    "mars",
    "avril",
    "mai",
    "juin",
    "juillet",
    "aout",
    "septembre",
    "octobre",
    "novembre",
    "décembre",
];

// Exo 2

print_r($array); // Sert à afficher le tableau dans le terminal
echo "$array[2] \n";
echo "$array[5] \n";
// modif de aout en août
$array[7] = "août";
foreach ($array as $key => $val) { // (! as $key => !)
    echo "$val \n";
};
*/

// Exo3
/*
$array = [
    01 => "Ain",
    03 => "Allier",
    07 => "Ardèche",
    15 => "Cantal",
    26 => "Drôme",
    38 => "Isère",
    42 => "Loire",
    43 => "Haute-Loire",
    63 => "Puy-de-Dôme",
    69 => "Rhône",
    73 => "Savoie",
    74 => "Haute-Savoie",
];

echo "$array[69] \n";
$array[57] = "Metz";
print_r($array);

foreach ($array as $key => $value) {
    echo "Le département de $value a le numéro $key \n";
}
*/

// Exo 4
$array = [
    "Alex",
    "Max",
    "Dominique",
    "Claude",
    "Leslie",
    "Charlie",
    "Lou",
];

foreach($array as $key => $value) {
    echo "Salut $value, devine quoi ! Je me marie dans samedi dans deux semaines ! J'espère te compter parmis les invités ! Gros bisous :) \n";
}

?>