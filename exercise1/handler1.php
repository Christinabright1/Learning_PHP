


<?php
  function convert_String() {
     $str1 = $_POST["text1"];
     $str2 = $_POST["text2"];
    echo strtoupper($str1) ."<br>";
    echo strtolower($str2) ."<br>";
    echo ucword($str1);
 }
  convert_String();

?>
