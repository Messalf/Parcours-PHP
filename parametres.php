<?php

// Exo 1
/*
if (isset($_GET['prenom']) AND isset($_GET['nom'])) // On a le nom et le prénom
{
    echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !';
}
else // Il manque des paramètres, on avertit le visiteur
{
    echo 'Il faut renseigner un nom et un prénom !';
}
*/

// Exo 2
/*
if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['age'])) // On a le nom et le prénom
{
    echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' ' . 'tu as ' . $_GET['age'] . ' ans !';
}
else // Il manque des paramètres, on avertit le visiteur
{
    echo "Il faut renseigner un nom et un prénom et l'âge !";
}
*/

// Exo 3
/*
if (isset($_GET['dateDebut']) AND isset($_GET['dateFin'])) // On a le nom et le prénom
{
    echo 'Vacances prévue du:' . ' ' . $_GET['dateDebut'] . ' ' . 'au' . ' ' . $_GET['dateFin'];
}
else // Il manque des paramètres, on avertit le visiteur
{
    echo "Il faut renseigner la période";
}
*/

// Exo 4

/*
if (isset($_GET['langage']) AND isset($_GET['serveur'])) // On a le nom et le prénom
{
    echo 'Le langage est' . ' ' . $_GET['langage'] . ' ' . 'et le serveur est' . ' ' . $_GET['serveur'];
}
else // Il manque des paramètres, on avertit le visiteur
{
    echo "Renseignez le langage et le serveur";
}
*/

// Exo 5 
/* 
if (isset($_GET['semaine'])) // On a le nom et le prénom
{
    echo 'Nous sommes à la ' . $_GET['semaine'] . 'ème semaine de formation';
}
else // Il manque des paramètres, on avertit le visiteur
{
    echo "Renseignez la semaine";
}
*/

//Exo 6
/*
if (isset($_GET['batiment']) AND isset($_GET['salle'])) // On a le nom et le prénom
{
    echo 'Le batiment est' . ' ' . $_GET['batiment'] . ' ' . 'et la salle est' . ' ' . $_GET['salle'];
}
else // Il manque des paramètres, on avertit le visiteur
{
    echo "Renseignez le batiment et la salle";
}
*/

?>