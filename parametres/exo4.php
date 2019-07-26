<?php
if (isset($_GET['langage']) AND isset($_GET['serveur'])) // On a le nom et le prénom
{
    echo 'Le langage est' . ' ' . $_GET['langage'] . ' ' . 'et le serveur est' . ' ' . $_GET['serveur'];
}
else // Il manque des paramètres, on avertit le visiteur
{
    echo "Renseignez le langage et le serveur";
}


?>