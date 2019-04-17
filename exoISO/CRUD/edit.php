<?php 
require'db.php';

 $id = $_GET['id'];

 $sql = 'SELECT * FROM persons WHERE id=:id';

 $statement = $connexion->prepare($sql);

 $statement->execute([':id' => $id]);

 $person = $statement->fetch(PDO::FETCH_OBJ);

if(!empty($_POST)){

  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $date = $_POST['date'];
  $contact = $_POST['contact'];
  $email = $_POST['email'];
  $ville = $_POST['ville'];
  $ecole = $_POST['ecole'];
  $commune = $_POST['commune'];
  
  $sql = 'UPDATE persons SET nom=:nom, prenom=:prenom, birthday=:birthday, contact=:contact, email=:email, ville=:ville, ecole=:ecole, commune=:commune WHERE id=:id';
  $statement = $connexion->prepare($sql);
  
  if ($statement -> execute([':nom' => $nom, ':prenom' => $prenom, ':birthday' => $date, ':contact' => $contact, ':email' => $email, ':ville' => $ville, ':ecole' => $ecole, ':commune' => $commune, ':id' => $id])) {
  	header("Location:index.php");
  }
} 

 ?>


 <?php require 'header.php'; ?>

<div class="container">

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
			<h2>modification</h2>
		</div>

		<div class="card-body">
			<?php if (!empty($message)): ?>

				<div class="alert alert-success">
					
					<?= $message; ?>

				</div>

			<?php endif; ?>

				
			
			<form method="post">
				<div class="row form-group">
					<div class="col-md-6">
						<input value="<?= $person->nom ?>" type="text" class="form-control" name="nom" name="nom" placeholder="nom">
					</div>
					<div class="col-md-6">
						<input value="<?= $person->prenom ?>" type="text" class="form-control"  name="prenom" placeholder="prenom">
                    </div>
				</div>
				<div class="row form-group">
					<div class="col-md-6">
						<input value="<?= $person->date ?>" type="date" class="form-control" name="date"  placeholder="date de naissance">
					</div>
					<div class="col-md-6">
						<input value="<?= $person->contact ?>" type="contact" class="form-control"  name="contact" placeholder="contact">
                    </div>
				</div>
                <div class="row form-group">
					<div class="col-md-6">
						<input value="<?= $person->email ?>" type="email" class="form-control" name="email" placeholder="email">
					</div>
					<div class="col-md-6">
						<input value="<?= $person->ville ?>" type="text" name="ville" class="form-control" placeholder="entrer votre ville">
                    </div>
				</div>
				 <div class="row form-group">
					<div class="col-md-6">
						<input value="<?= $person->ecole ?>" type="text" class="form-control" name="ecole" placeholder="Etablissement">
					</div>
					<div class="col-md-6">
						 <select value="<?= $person->commune ?>" name="commune" class="custom-select" >
				        <option selected>Abobo</option>
				        <option >Adjame</option>
				        <option >Plateau</option>
				        <option >Marcory</option>
				        <option>Koumassi</option>
				        <option>Treichville</option>
				        <option>Portbouet</option>
				        <option>Cocody</option>
				        <option>Anyama</option>
				      </select>
                    </div>
				</div>


				
				<button type="submit" class="btn btn-info form-control">creation de personne</button>
            </form>
        </div>

	</div>

</div>

<?php require 'footer.php'; ?>
