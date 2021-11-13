<?php
  
  //$input_result= $_POST["result"];

  $num1 = $_POST["n1"];
  $operator = $_POST["operator"];
  $num2 = $_POST["n2"];
  
  switch (true) {
      case '+':
        echo $num1 + $num2;
          break;
      case '-':
        echo $num1 - $num2;
        break;
      default:
         echo "Enter valid operator";
  }
?>
