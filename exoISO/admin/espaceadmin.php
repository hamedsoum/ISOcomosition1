<?php 
 session_start();


 if (isset($_SESSION["username"]))
 {
 	echo '<h3>login succes, Welcome - '.$_SESSION["username"].' </h3>';
 	echo '</br></br><a href="connexion.php">logout</a>';
 }
 else
 {
 	header('location:insert.php');
 }


 ?>	

 <!DOCTYPE html>
<html>
<head>
  <title>espace administrateur</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
</body>


</html>