<?php

/*include database

get info from login form

step check if the info from login form is on our dbase.

    if info from login form is on our database give user access i.e redirect user to welcome.$php_errormsg
else if info from login form is NOT on our database, echo username OR password is INCORRECT*/

include'dbconfig.php';

$username = $_POST['username'];
$password = $_POST['password'];


//remember we have our password hashed...!!!

$hashed_pass = password_hash($password,PASSWORD_DEFAULT);

$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";

$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        //when user is found on the dbase, redirect user to welcome.php
    header("location: ../index.html");
    }
}else{
    echo 'incorrect password or username';
}

?>