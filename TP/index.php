<?php 
    if(isset($_GET['month'],$_GET['year'])){
        $month= $_GET['month'];
        $year = $_GET['year'];
        
    }else{
        $month= date('m');
        $year = date('Y');
    }
    $allDaysInMyMonth = [];
    $firstDayOfMonth = date("N", mktime(0, 0, 0, $month, 1, $year));
    $nbDaysInMyMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    $lastDayOfMonth = date("N", mktime(0, 0, 0, $month, $nbDaysInMyMonth, $year));
    for($i=0 ; $i<$firstDayOfMonth-1 ; $i++){
        array_push($allDaysInMyMonth,NULL);
    }
            
    for($i=1 ; $i<=$nbDaysInMyMonth ; $i++){
        array_push($allDaysInMyMonth,$i);
    }
            
    for($i=$lastDayOfMonth ; $i<7 ; $i++){
        array_push($allDaysInMyMonth,NULL);
        }      
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\css\style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">
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
    <h2><?= $month." ".$year ?></h2>
    <table>
        <thead class="test">
            <tr>
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
             <?php 
                $k= 0;
                for($j=0 ; $j<count($allDaysInMyMonth)/7 ; $j++){
                  echo "<tr>";
                   for($i=0; $i<7 ; $i++){
                    echo "<td>". $allDaysInMyMonth[$k] ."</td>";
                    $k++;
                   } 
                  echo "</tr>"; 
                }              
             ?>
        </tbody>
    </table>
    
</body>

</html>