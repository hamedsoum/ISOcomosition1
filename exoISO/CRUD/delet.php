<?php 

require'db.php';

$id = $_GET['id'];

$sql = 'DELETE FROM persons WHERE id = :id';

$statement = $connexion->prepare($sql);

if($statement->execute([':id' => $id])){
	header('Location:index.php');
}

 ?>