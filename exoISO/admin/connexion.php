<?php 
  session_start();

 require 'db.php';

$messageError = $messageError2 = '';

if(!empty($_POST)){

  $username = $_POST['username'];
  $password = $_POST['password'];
  $isSuccess= true;

 if (empty($username) OR empty($password)  ) {
    $messageError = 'tous les champs doivent etre renseigné';
    $isSuccess=false;
  }

    if ($isSuccess) {
      $sql = 'SELECT * FROM admin WHERE username = :username AND password = :password';
    $statement = $connexion -> prepare($sql);
    $statement -> execute(['username' => $username, 'password' => $password]);
    $count = $statement->rowCount();

    if ( $count > 0 ) {
       
       $_SESSION['username'] = $username;
       header('location:espaceadmin.php');


  } else
  {

     header('location:insert.php');
     $messageError2 = 'erreur de mot de passe ou usernane'; 
      $isSuccess=false;
  }  
    }
    
 }
?>



<!DOCTYPE html>
<html>
<head>
  <title>connexion</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

   <form class="box" method="post">
     
      <?php if (!empty($messageError)): ?>

      <div class="alert alert-danger">
        
      <?= $messageError ?>
      </div>
      
     <?php endif ?>
     <?php if (!empty($messageError2)): ?>

      <div class="alert alert-danger">
        
      <?= $messageError2 ?>
      </div>
      
     <?php endif ?>

     <h1>admin</h1>
    <input type="text" name="username" placeholder="username">
    

    
    <input type="text" name="password" placeholder="password">
   
    <input type="submit" name="submit" value="ajouter">
    
     
   </form>
</body>
</html>
