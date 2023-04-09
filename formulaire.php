<?php

if(isset($_POST['date'])){
  
    $date = $_POST['date'];
    $operation = $_POST['operation'];
    $categorie = $_POST['categorie'];
    $mode = $_POST['mode'];
    $montant = $_POST['montant'];

    $formatDate = date("Y-m-d",strtotime($date));

    try
    {
        $db = new PDO('mysql:host=localhost;dbname=gestion;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
   
    $stmt = $db->prepare("INSERT INTO transactions (dates,montant,valideTransaction,id_categorie,id_modePaiement,types) VALUES (?,?,?,?,?,?)");
    $stmt->execute(array($formatDate,$montant,1,$categorie,$mode,$operation));

    header('Location: http://localhost/gestion/');

}

?>