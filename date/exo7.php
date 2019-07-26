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
    $in20daysTS = $todayTS + 86400 * 20;
    $in20days = date('d.m.y', $in20daysTS);
    echo "Nous somme le $today <br>";
    echo "Dans 20 jours nous seront le $in20days";
    ?>
</body>

</html>