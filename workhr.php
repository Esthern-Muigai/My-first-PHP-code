<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="workhr.php" method="post">
        <label for="working hours">Hours:</label>
        <input type="number"name="hr"> <br> <br>
        <input type="submit" value="Calculate">
    </form>
</body>
</html>

<?php
/*$hr=$_POST["hr"];
$rateperhr=800;

$regularhr =min($hr, 40);
$overtimehr=max(0, $hr - 40);
$regularpay1=$regularhr * $rateperhr;
$overtimepay1=$overtimehr *($rateperhr *1.5);
$totalpay1=$regularpay1+ $overtimepay1;

echo"<p>Worker 1: Total pay=$totalpay1 </p>";*/

/*$hoursworked=$_POST["hr"];
$maxhr=40;
$rateperhr=800;
$extrahr=1.5;

if ($hoursworked = $maxhr) {
    $totalpay= $hoursworked * $rateperhr;
    # code...
} else {
    $regularpay=$maxhr*$rateperhr;
    $extrahr=$hoursworked-$maxhr;
    $extrahr=$extrahr*$rateperhr*$extrarate;
    $totalpay=$regularpay*$extrapay;
    # code...
}
echo"<p>Total pay for $hoursworked hours worked is " . number_format($totalpay,2). "shillings</p> ";*/

$totalpay;
$hours_worked= $_POST["hr"];
if($hours_worked>=40){
    $totalpay=($hours_worked - 40)* 1200;
    echo" you have earned $totalpay";
}elseif($hours_worked<0){
    echo "can not be negative ";
}else{
    $totalpay=$hours_worked * 800;
    echo "you have earned $totalpay";
}




?>