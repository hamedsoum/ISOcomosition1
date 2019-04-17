<?php 
 
 require 'db.php';

 $messageSuccess = $messageError = '';

if(!empty($_POST)){

	$username = $_POST['username'];
	$email = $_POST['email'];
  $password = $_POST['password'];
	$isSuccess= true;

if (empty($username) OR empty($email) OR empty($password)  ) {
    $messageError = 'tous les champs doivent etre renseigné';
    $isSuccess=false;
  }

    if ($isSuccess) {
       $sql = 'INSERT INTO admin(username,email,password) VALUES(:username, :email, :password)';
    $statement = $connexion -> prepare($sql);
    if ($statement -> execute([':username' => $username, ':email' => $email, ':password' => $password ])
) {
     $messageSuccess = "inscrition reussie avec succés <a href='connexion.php'>connectez-vous a votre espace admin </a>";	
  }
    }
    
 }
?>



<!DOCTYPE html>
<html>
<head>
	<title>inscription admin</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

   <form class="box" method="post" >
   	 
   	  <?php if (!empty($messageSuccess)): ?>

   	 	<div class="alert alert-success">
   	 		
   	 	<?= $messageSuccess ?>
   	 	</div>
   	 	
   	 <?php endif ?>
     <?php if (!empty($messageError)): ?>

       <div class="alert alert-danger">

        <?= $messageError ?>
       </div>

    <?php endif ?>

   	 <h1>inscrpition admin</h1>
   	<input type="text" name="username" placeholder="username">
   	
   	<input type="email" name="email" placeholder="email">
   	
    <input type="text" name="password" placeholder="password">
    
   	<input type="submit" name="submit" value="ajouter">
    
     
   </form>
</body>
</html>
