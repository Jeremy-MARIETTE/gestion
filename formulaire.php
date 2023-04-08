<?php

if(isset($_POST['date'])){
  
    $date = $_POST['date'];
    $operation = $_POST['operation'];
    $categorie = $_POST['categorie'];
    $mode = $_POST['mode'];
    $montant = $_POST['montant'];

    $formatDate = date("Y-m-d",strtotime($date));

   // var_dump('Date formatée : '.$formatDate);
   // var_dump('Formulaire.php'.$date.' '.$operation.' '.$categorie.' '.$mode.' '.$montant);

    try
    {
        $db = new PDO('mysql:host=localhost;dbname=gestion;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
   
    //faire une classe

    //Faire un select des données dans comptabilite, modespaiement et categories
    //Faire un foreach dans le formulaire pour afficher les données

    $stmt = $db->prepare("INSERT INTO transactions (dates,montant,valideTransaction,id_categorie,id_modePaiement,types) VALUES (?,?,?,?,?,?)");
    $stmt->execute(array($formatDate,$montant,1,$categorie,$mode,$operation));


}








?>