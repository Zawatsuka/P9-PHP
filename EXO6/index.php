<?php $monthNumber = cal_days_in_month(CAL_GREGORIAN , 2 ,2016) ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO6</title>
</head>
<body>
    <p>En 2016 au mois de fevrier, il y avait <?php echo $monthNumber; ?> jours</p>
</body>
</html>