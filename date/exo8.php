<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php 
    $today = date('d.m.y');
    $todayTS = strtotime($today);
    $DaysAgo22TS = $todayTS - 86400 * 22;
    $DaysAgo22 = date('d.m.y', $DaysAgo22TS);
    echo "Nous somme le $today <br>";
    echo "Il y a 22 jours nous fûmes le $DaysAgo22";
    ?>
</body>

</html>