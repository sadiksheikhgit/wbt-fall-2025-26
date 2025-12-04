<!DOCTYPE html>
<html>
<body>

<?php
$a =10;
$b=20;
echo "the paramter is ". (2 *$a * $b ) . "<br>";


$amount =100;
$vat = 15;
echo "the amont of vat is ". ( $amount* ($vat/100)) . "<br>";

$check =100;
if ($check %2 == 0){
	echo "even" ;}
    else {
    echo "odd";}
    
    echo "<br>";
$c=30;
if ($a >$b){
	if($a>$c){
    echo $a . "is max"; }
    else {
    echo $c . "is max"; }}
    elseif($b>$c){
    echo  $b. "is max";}
    else{
    echo $c. "is max"; }
    
echo "<br>";

for ($x = 10; $x <= 100; $x++) {
if ($x %2 !== 0){
	echo $x . "," ;} 
}
echo "<br>";

$teams = [ "RMA" , "BAR", "MANU" ];
for ($x = 0; $x <3; $x++) {
if ($teams[$x]== "RMA"){
	echo "RMA is at ". $x+1 . " positon" ;} 
   /*else{
    echo "not found";} */
}

for ($x = 0; $x <=3; $x++) {
for ($y = 0; $y <$x; $y++){
echo "* " ;
}
echo "<br>";}
 
?> 

</body>
</html>
