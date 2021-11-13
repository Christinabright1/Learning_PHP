<?php

$temperature = $_POST["text1"];
 
if($temperatura <= 0){
   echo "está um gelo";
}elseif($temperatura < 25){
   echo "ameno";
}else{
   echo "“quente";
}
?>
