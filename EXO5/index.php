<?php  
    $LastDate = date_create("16-05-2016");
    $Today = date_create("17-12-2020");
    $dayNumber =$LastDate->diff($Today); ;
    $totalNumber = $dayNumber -> format('%a');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO5</title>
</head>
<body>
    <?= "le nombre de jours entre le 16 mai 2016 et aujourd'hui est de : ".$totalNumber . " jours";?>
</body>
</html>