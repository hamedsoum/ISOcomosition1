<?php 

$dsn = 'mysql:host=localhost;dbname=crud1';

$username = 'root';

$password = '';

try
{

  $connexion = new PDO($dsn, $username, $password);
  

}

catch(PDOException $e)

{

 die($e->getmessag());

}
?>
