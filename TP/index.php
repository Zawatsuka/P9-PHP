<?php 
    $dayArray = array( "Lundi" , "Mardi" ,"Mercredi","Jeudi","Vendredi","Samedi","Dimanche");

     function calendar(){

        // declaration des variables liés au select month et year du html
        $month = $_GET['month'];
        $year = $_GET['year'];
    
        // si le l'utilisateur utilise le select pour un mois et une année donné
        if(isset($month)& isset($year)){
            $day = array();
            $dayNumberInMonth = cal_days_in_month(CAL_GREGORIAN , $month, $year);
    
    
                //sinon afficher le mois a l'année actuelle
        }else{
            $day = array();
            $dayNumberInMonth = cal_days_in_month(CAL_GREGORIAN , date("m"), date("Y"));
        }
    // utilisation d'une boucle et declaration d'une variable i initialisé a 1 et si i est inferieur au nombre de
    // de jours du mois incrementer
        for($i= 1 ; $i<$dayNumberInMonth; $i++){
                
            $day[$i] = $i+1; 
            // if( mktime(0,0,0, $month+1, 0, $year)== $dayArray['']){
            //     echo "<td></td>";
            // }else{
                echo "<td>".$i."</td>";
            // }
        }
         
        }
        ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="get">
        <select name="month" id="month">
            <option value="1">Janvier</option>
            <option value="2">fevrier</option>
            <option value="3">Mars</option>
            <option value="4">Avril</option>
            <option value="5">Mai</option>
            <option value="6">Juin</option>
            <option value="7">Juillet</option>
            <option value="8">Aout</option>
            <option value="9">Septembre</option>
            <option value="10">Octobre</option>
            <option value="11">Novembre</option>
            <option value="12">Decembre</option>
        </select>
        <select name="year" id="year">
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
        </select>

        <input type="submit" value="let's go !!">
    </form>
    <table>
        <thead>
            <tr class="bordertabs">
                <th>Lundi</th>
                <th>Mardi</th>
                <th>Mercredi</th>
                <th>Jeudi</th>
                <th>Vendredi</th>
                <th>Samedi</th>
                <th>Dimanche</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <?php calendar();?>
        </tr>
        </tbody>
    </table>
</body>

</html>