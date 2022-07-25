<?php 
session_start();
if(isset($_POST["log"]))
{
    $em=$_POST["email"];
    $pwd=$_POST["password"];
    if($em=='darshu811@gmail.com' && $pwd=='darshu811')
    {
        $_SESSION["email"]=$_POST["email"];
        
        echo "<h3 align='center' style='color:blue'>You are Logged In Successfully</h3>";
        header('refresh:4,welcome.php');
    }

    else 
    {
        echo "<h3 align='center' style='color:blue'>Your email and password are Incorrect try again</h3>";
        header('refresh:4,login.php');

    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.min.js"></script>   
    <script src="js/bootstrap.bundle.min.js"></script>   

</head>
<body>
    <div class="container  w-50 p-5 mt-5">
    
        <h1 class="text-center text-danger mt-5">Login Form</h1>
        <hr class="border border-lg border-white w-30 mx-auto">
        <form method="post">
        <div class="form-group mt-1">
            <input type="text" name="email" placeholder="Email *" required class="form-control">
        </div>
        
        <div class="form-group mt-4">
            <input type="password" name="password" placeholder="Password *" required class="form-control">
        </div>

        
        <div class="form-group mt-4">
            <center>
            <input type="submit" name="log" value="Log In!" class="btn btn-lg btn-dark text-white">
            </center>
            <b><a href="#"> <center>Forget Password</center></a></b>
        </div>

        <div class="form-group mt-4">
            <center>
            <b>Don't have an account ?<a href="#">Create Account ?</a></b>
            </center>
        </div>
        
        </form>
    </div> 
    
</body>
</html>