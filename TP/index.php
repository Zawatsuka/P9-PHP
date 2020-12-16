<?php 
if(isset($_GET['month'])& isset($_GET['year'])){
    $day = array();
    $dayNumberInMonth = cal_days_in_month(CAL_GREGORIAN , $_GET['month'], $_GET['year']);
}else{
    $day = array();
    $dayNumberInMonth = cal_days_in_month(CAL_GREGORIAN , date("m"), date("Y"));
}
    for($i= 0 ; $i<$dayNumberInMonth; $i++){
        $day[$i] = $i+1; 
    }
    var_dump($day); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="get">
<select name="month" id="month">
    <option value= "1">Janvier</option>
    <option value= "2">fevrier</option>
    <option value= "3">Mars</option>
    <option value= "4">Avril</option>
    <option value= "5">Mai</option>
    <option value= "6">Juin</option>
    <option value= "7">Juillet</option>
    <option value= "8">Aout</option>
    <option value= "9">Septembre</option>
    <option value= "10">Octobre</option>
    <option value= "11">Novembre</option>
    <option value= "12">Decembre</option>
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
  <tr>
    
  </tr>
  <tr>
    
  </tr>
  <tr>
    
  </tr>
  <tr>

    </tr>
  <tr>

</tr>
  <tr>
  
  </tr>
  <tr>
  
  </tr>
</table>
</body>
</html>
