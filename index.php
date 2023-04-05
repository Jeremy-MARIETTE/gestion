<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<?php include('formulaire.php'); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
    <h5 class="card-title">Vue d'ensemble du mois de  : Nom du mois</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    
  </div>
</div>

<hr>
<!--Card des dépenses-->
<div class="card text-center">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>   
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
          <h4 class="modal-title">Enregistrez une transaction</h4>
        </div>
        <div class="modal-body">

        <form method="POST" action="formulaire.php">

        <div class="mb-3">
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="form-check">
  <input class="form-check-input" type="radio" name="operation" value="credit" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Crédit
  </label>

  <input class="form-check-input" type="radio" name="operation" value="debit" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Débit
  </label>
</div>

<div class="input-group mb-3">
  <select class="form-select" id="inputGroupSelect01" name="categorie">
    <option selected>Catégories</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
</div>

<div class="input-group mb-3">
  <select class="form-select" id="inputGroupSelect01" name="mode">
    <option selected>Mode de paiement</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
</div>

<div class="mb-3">
    <input type="number" name="montant" placeholder="Montant">
</div>

  <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
        </div>
     
      </div>
      
    </div>
  </div>
  
</div>
<!-- modal -->


  </div>
  <footer class="footer">
    <div id="center">
    <button id="add" type="button"  data-toggle="modal" data-target="#myModal">+</button>
    </div>
    
  </footer>
</body>


</html>