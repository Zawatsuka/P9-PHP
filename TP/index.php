<?php 
    function weeksPerMonth($m,$y){
        $day = mktime(1, 1, 1, $m, 1, $y);
        $nday = date('t', $day);
        $fday = date("N",$day);
        $xday = $nday + $fday;
        $n =  $xday % 7 != 0 ? floor($xday/7) +1 : floor($xday/7);
        return $n;
    }
        
    // creation d'une fonction calendar 
    function calendar(){
        // tableau qui va avoir les jours ainsi que les cases vides
        $totalDay =[];
        $month = $_GET['month'];
        $year = $_GET['year'];
        // condition pour savoir si get month et get year existe
        if(isset($year,$month)){
            $firstdayofmonth = date("w", mktime(0, 0, 0, $month, 1, $year ));
            $lastDayOfMonth= date('Y-m-t', mktime(0, 0, 0, $month, 1, $year));
            // boucle pour ajouter des cases vides au debut du tableau
            for($i=0; $i<$firstdayofmonth-1 ; $i++){
              echo $totalDay[$i]= NULL;
            
            }
            // boucle pour ajouter les jours d'un mois donner
            for($i=1 ; $i<=weeksPerMonth($month,$year); $i++){
                echo "<tr>";
                for($j=1 ; $j<=7 ; $j++){
                    echo "<td>". $i ."</td>";
                }
                echo "</tr>";
            }
            // boucle pour ajouter des cases vides a la fin du tableau
            for($i=$lastDayOfMonth; $i<7 ; $i++){
                echo $totalDay[$i]= NULL;
              
              }
        }else{
            $totalDay =[];
            $dayNumberInMonth = cal_days_in_month(CAL_GREGORIAN , date("m"), date("Y"));
            for($i=0; $i<$firstdayofmonth-1 ; $i++){
                echo $totalDay[$i]= NULL;
              
              }
              for($i=1 ; $i<=weeksPerMonth(date("m"),date("Y")); $i++){
                  echo "<tr>";
                  for($j=1 ; $j<=7 ; $j++){
                      echo "<td>". $i ."</td>";
                  }
                  echo "</tr>";
              }
              for($i=$lastDayOfMonth; $i<7 ; $i++){
                  echo $totalDay[$i]= NULL;
                
                }
        }
        
    }
       
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Calendrier</title>
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
            <?php calendar();?>
        </tbody>
    </table>
</body>

</html>