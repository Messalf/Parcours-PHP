<?php
if (isset($_GET['dateDebut']) AND isset($_GET['dateFin'])) // On a le nom et le prénom
{
    echo 'Vacances prévue du:' . ' ' . $_GET['dateDebut'] . ' ' . 'au' . ' ' . $_GET['dateFin'];
}
else // Il manque des paramètres, on avertit le visiteur
{
    echo "Il faut renseigner la période";
}


?>