<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


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
          <p>Mon formulaire</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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