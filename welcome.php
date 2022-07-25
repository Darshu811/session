<?php
session_start();
if(!isset($_SESSION["email"]))
{
    header("location:login.php");
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
    
        <h3 class="text-left text-danger mt-5"> <b>Welcome : <?php  echo $_SESSION["email"]; ?>  </b>  
      
        <b><a href="logout.php" onclick="return confirm('Are You sure to logout user ?')" class="btn btn-sm btn-danger text-white">Logout Here </a> </b>
    
      </h3>
        <hr class="border border-lg border-white w-100 mx-auto">
        
        <p> Welcome is an Indian 2022 Hindi-language comedy film directed and co-written by Anees Bazmee with production by Firoz Nadiadwala</p>
          
    </div> 
    
</body>
</html>
