<?php
$bdd = require('connexion.php');
require_once('budget.php'); 
$categories = new Budget();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    

    <link rel="stylesheet" href="css/style.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-bottom/">
<?php include('formulaire.php'); ?>

   
    <title>Gestion</title>


</head>
<body>
<div class="content">




<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" aria-current="true" href="#">Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Graphiques</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h2 class="card-title">Vue d'ensemble du compte</h2>
    <p> Total crédit : <?php $categories->solde_credit($bdd);?> €</p>
    <p> Total débit : <?php $categories->solde_debit($bdd); ?> €</p>

    <?php $categories->solde($bdd); ?>
    
  </div>
</div>

<hr>
<!--Card des dépenses-->
<div class="container-fluid">
<div class="card text-center">
    <h2 class="card-title">Liste des opérations</h2>
    <?php $categories->operations($bdd); ?>  
</div>
</div>



  <!-- Modal -->
  <div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center">Enregistrez une transaction</h4>
        </div>
        <div class="modal-body">

        <form method="POST" action="formulaire.php">

        <div class="mb-3">
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="form-check mb-6" >
  <input class="form-check-input credit"  type="radio" name="operation" value="1" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Crédit
  </label>

  <input class="form-check-input mb-6 debit" type="radio" name="operation" value="2" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Débit
  </label>
</div>

<div class="input-group mb-12">
  <select class="form-control form-control-lg"  id="inputGroupSelect01" name="categorie">
    <option selected >Catégories</option>
    <?php $categories->categories($bdd); ?>
  </select>
</div>

<div class="input-group mb-12">
  <select class="form-control form-control-lg" id="inputGroupSelect01" name="mode">
    <option selected>Mode de paiement</option>
    <?php
  $categories->modesPaiement($bdd);
    ?>
  </select>
</div>

<div class="mb-12">
    <input class="form-control form-control-lg" type="number" name="montant" placeholder="Montant">
</div>

  <button type="submit" style="width:100%; height:40px" class="btn btn-primary">Enregistrer</button>
</form>
        </div>
     
      </div>
      
    </div>
  </div>
  
</div>
<!-- modal -->



</body>


<footer id="footer">
    <div id="center">
    <button id="add" type="button"  data-toggle="modal" data-target="#myModal"><i class="fa-solid fa-plus fa-2xl"></i></button>
    </div>
    
  </footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</html>