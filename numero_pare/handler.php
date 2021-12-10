<?php
$n1= $_POST["n1"];
$n2= $_POST["n2"];
$n3= $_POST["n3"];
$n4= $_POST["n4"];
$n5= $_POST["n5"];
$n6= $_POST["n6"];
$n7= $_POST["n7"];
$n8= $_POST["n8"];
$n9= $_POST["n9"];
$n10= $_POST["n10"];

//declare an empty array

$list_num = array();
$score =0;
//push element into array
var_dump(array_push($list_num,$n2,$n3,$n4,$n5,$n6,$n7,$n7,$n8,$n9,$n10));
print_r($list_num);
for($x=0; $x<count($list_num) ; $x++){
    if ($list_num[$x] %2 == 0){
          $score += $list_num[$x];
    }else{
        $score -=$list_num[$x];
    }
}
if($score < -5){
   echo "péssima pontuação"; 
}elseif( $score < 0){
   echo "má pontuaçã";
}elseif ($score < 5){
 echo "“pontuação razoável";
}else{
    echo "boa pontuação";
}
  
echo $score;
?>
