<?php
include 'dbconfig.php';
//we want to insert all our codes in our waawphp database

$gender = $_POST['gender'];
$classes = $_POST['classes'];
$train = $_POST['train'];



$sql = "INSERT INTO try (gender,classes,train) VALUES('$gender','$classes', '$train')";

	if($conn->query($sql)=== TRUE){

    	// header("Location: login.php");
    echo "congrats";	

	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}

$conn->close();
?>