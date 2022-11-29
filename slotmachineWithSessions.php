<?php
session_start();
?>
<html>
<body>
<?php
$r1=rand(0,7);
$r2=rand(0,7);
$r3=rand(0,7);
$count=0;
$points=0;

$_SESSION["points"]=$points;
if($r1==7){
    $count++;
}
if($r2==7){
    $count++;
}
if($r3==7){
    $count++;
}
if ($count){
    $points+=10**$count;
    $_SESSION["points"]=$points;
    echo 10**$count." points";

}
else{
    echo " try again";
    $_SESSION["points"]=$points;
}

echo " έχεις ". $_SESSION["points"]." πόντους"


?>
</body>
</html>
