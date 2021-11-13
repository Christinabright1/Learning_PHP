<?php
$num1= $_POST["text1"];
$num2= $_POST["text2"];
$num3= $_POST["text3"];
$num4= $_POST["text4"];
//Concatenate num1 e num2
$concat_1_2 = $num1." ".$num2;
$concat_3_4 = $num3." ".$num4;
echo $concat_1_2;
echo "<br>";
echo $concat_3_4;
?>
