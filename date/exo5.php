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
        $dateAjd = strtotime('now');
        $dateAvant = strtotime('16-05-2016');
        $difference = $dateAjd - $dateAvant;
        echo $dateAjd . "<br>";
        echo $dateAvant . "<br>";
        $diffInDays = $difference / 86400;
        $diffInDaysR = round($diffInDays);
        echo "La difference est de $diffInDaysR jours <br>";
    ?>
</body>

</html>