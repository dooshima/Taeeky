<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Register </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2>Register</h2>
<fieldset class="field" >
<form action="config/process.php" method="post">
    <div class="form-group">
    <br>
     <label for="username"> Username: </label><br>
     <input type="text" name="username" class="form-control" required=""><br><br>

    <label for="email"> Email:</label><br>
    <input type="text" name="email" class="form-control" required autocomplete="off"><br><br>

     <label for="password">Password</label><br>
    <input type="password" name="password" class="form-control" required="" maxlength="10"><br><br>
</div>

<a href="config/login.php"> <input type="submit" value="Register" class="btn btn-primary"></a>

 </form>
 </fieldset>
 </div>
 </div>

</div>

</body>
</html>