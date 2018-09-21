<?php
session_start();
$regName=$_POST['Name'];
$regSum = $_POST['Num1']+$_POST['Num2'];
$gender=$_POST['gender'];
$value=$_POST['value'];
$name2 = substr($regName,0,3);
echo "Name: ".$name2."<br>";
echo "<br>Sum: ".$regSum."<br>";
echo"<br>Your Gender is ".$gender."<br>";
echo"<br>Number of hobbies entered are";
echo"<br><br>";
$x=count($value);
echo($x);
//for($i=0;$i<$x ; $i++)
//echo($value[$i]." <br>");
?>
