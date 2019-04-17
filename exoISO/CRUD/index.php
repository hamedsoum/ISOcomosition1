<?php 
require'db.php';

$sql = 'SELECT * FROM persons';

$statement = $connexion->prepare($sql);

$statement->execute();

$person = $statement->fetchAll(PDO::FETCH_OBJ);

 ?>


<?php require 'header.php';?>

    <div class="container-fluid">
    		<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">ADMIN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="create.php">ajouter une personne</a>
      </li>
      
    </ul>
    
  </div>
</nav>
    	
    	<div class="card mt-5">
    		
    		<div class="card-header">
    			<h2> LES MEMBRES</h2>
    		</div>
    		<div class="card-body">
    			
    			<table class="table table-bordered">

    				<tr>
    					<th>ID</th>
    					<th>nom</th>
    					<th>prenom</th>
    					<th>birthday</th>
    					<th>contact</th>
                        <th>email</th>
                        <th>ville</th>
                        <th>ecole</th>
                        <th>commune</th>
                        <th>action</th>
    				</tr>

    				<?php foreach ($person as $membres):?>
    				<tr>
    					<td><?= $membres->id; ?></td>
    					<td><?=$membres->nom; ?></td>
    					<td><?=$membres->prenom; ?></td>
    					<td><?=$membres->birthday; ?></td>
                        <td><?= $membres->contact; ?></td>
                        <td><?=$membres->email; ?></td>
                        <td><?=$membres->ville; ?></td>
                        <td><?=$membres->ecole; ?></td>
                        <td><?= $membres->commune; ?></td>
                        
    					<td>
    						<a href="edit.php?id=<?=$membres->id ?>" class="btn btn-info">MODIFIER</a>
    						<a onclick=" return confirm('voulez vous vraiment supprimer cette personne ?')" href="delet.php?id=<?=$membres->id ?>" class="btn btn-danger">SUPRIMER</a>
    					</td>
                    </tr>
    			<?php endforeach; ?>
    				
    			</table>

    		</div>

    	</div>

    </div>

<?php require 'footer.php'; ?>