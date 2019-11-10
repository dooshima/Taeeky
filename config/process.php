<?php
include 'dbconfig.php';
//we want to insert all our codes in our waawphp database

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$hashed_pass = password_hash($password, PASSWORD_DEFAULT);
/*link to hashed password algorithm
http://php.net/manual/en/function.password-hash.php
*/

//next step is sql query



$sql = "INSERT INTO user (username,email,password) VALUES('$username','$email', '$password')";

	if($conn->query($sql)=== TRUE){

    	header("Location: login.php");
    	

	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}

$conn->close();
?>