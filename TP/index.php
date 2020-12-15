<?php 
$month=''
$calendar =[];
if($month= cal_days_in_month(CAL_GREGORIAN , 1 ,2020) &&
 ($month= cal_days_in_month(CAL_GREGORIAN , 3 ,2020) && 
 ($month= cal_days_in_month(CAL_GREGORIAN , 5 ,2020) &&
 ($month= cal_days_in_month(CAL_GREGORIAN , 7 ,2020)&&
 ($month= cal_days_in_month(CAL_GREGORIAN , 10 ,2020)&&
 ($month= cal_days_in_month(CAL_GREGORIAN , 12 ,2020)){
    $calendar =[1,2,3,4,5,6,7,8,9,10,11,12,13,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31];
}else if (($month= cal_days_in_month(CAL_GREGORIAN , 2 ,2020){
    if(){
    $calendar =[1,2,3,4,5,6,7,8,9,10,11,12,13,15,16,17,18,19,20,21,22,23,24,25,26,27,28];
    }   

}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP</title>
</head>
<body>

   <form action="index.php" method="get">
<select name="pets" id="pet-select">
    <option value="">Choisir le mois</option>
    <option value="Janvier" name="January">Janvier</option>
    <option value="fevrier" name="February ">fevrier</option>
    <option value="Mars" name="March ">Mars</option>
    <option value="Avril" name="April">Avril</option>
    <option value="Mai" name="May">Mai</option>
    <option value="Juin" name="June">Juin</option>
    <option value="Juillet" name="July">Juillet</option>
    <option value="Aout" name="August">Aout</option>
    <option value="Septembre" name="September">Septembre</option>
    <option value="Octobre" name="October">Octobre</option>
    <option value="Novembre" name="November">Novembre</option>
    <option value="Decembre" name="December">Decembre</option>
</select>
</form> 

</body>
</html>