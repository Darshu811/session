<?php 
session_start();
unset($_SESSION["email"]);
session_destroy();
   
echo "<h1 align='center' style='color:blue'>You are Logout  Successfully</h1>";
header('refresh:4,login.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.min.js"></script>   
    <script src="js/bootstrap.bundle.min.js"></script>   

</head>
<body>
    
</body>
</html>