<?php
if (isset($_GET['batiment']) AND isset($_GET['salle'])) // On a le nom et le prénom
{
    echo 'Le batiment est' . ' ' . $_GET['batiment'] . ' ' . 'et la salle est' . ' ' . $_GET['salle'];
}
else // Il manque des paramètres, on avertit le visiteur
{
    echo "Renseignez le batiment et la salle";
}


?>