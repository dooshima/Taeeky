<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
     <title> Login </title>
    <link rel="stylesheet" href="css/custom.css">
     <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
         <h2>Login</h2>

 <form action="process_login.php" method="post">
    <div class="form-group">

        <label for="username"> Username</label>
        <input type="text" name="username" class="form-control" required=""><br><br>
        <label for="password"> Password</label>
        <input type="password" name="password" class="form-control" required=""><br><br>
        <input type="submit" value="Submit" class="btn btn-primary">
            </div>
        </form>
    </div>
 </div>
</div>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>