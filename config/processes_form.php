<?php

include 'dbconfig.php';

$gender = $_POST['gender'];
$train = $_POST['train'];
$morning = $_POST['morning'];
$evening = $_POST['evening'];



$sql = "INSERT INTO regclass(gender,train,morning,evening) VALUES('$gender','$train','$morning','$evening')";

if($conn->query($sql) === TRUE){

  
     header("Location: ../classes.html");
  
}



?>


