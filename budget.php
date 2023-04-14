<?php

class Budget{


    
    public function __construct(){
      $db = new PDO('mysql:host=localhost;dbname=gestion;charset=utf8', 'root', '');
    }

    function categories($db){

          
        
    
        $sql = 'SELECT * FROM categorie';
        foreach ($db->query($sql) as $row) {
          ?>
           <option value="<?php echo $row['id_categorie']?>"><?php echo $row['categorie']?></option>
          <?php
        }

    }

    function modesPaiement($db){

        $sql = 'SELECT * FROM modespaiement';
        foreach ($db->query($sql) as $row1) {
          ?>
           <option value="<?php echo $row1['id_modePaiement']?>"><?php echo $row1['mode_Paiement']?></option>
          <?php
        }
    }

    function operations($db){

      
        $sql = 'SELECT * FROM transactions INNER JOIN categorie ON transactions.id_categorie = categorie.id_categorie
        INNER JOIN comptabilite ON transactions.types = comptabilite.id_comptabilite
        INNER JOIN modespaiement ON transactions.id_modePaiement = modespaiement.id_modePaiement 
         ';
        foreach ($db->query($sql) as $row1) {
          ?>
          
           <div> 
           <ol class="list-group list-group-numbered">
           <li class="list-group-item d-flex justify-content-between align-items-start">
           <div class="ms-2 me-auto">

           <div class="fw-bold"><h3><?php echo $row1['categorie']; ?></h3></div>
            <?php 
            $format = strtotime($row1['dates']);
            echo "Le : ".date('d.m.Y', $format);
            ?>


            <span <?php if($row1['id_comptabilite'] ==1){ 
                ?>style="background-color:green"<?php
            }else{
            ?>style="background-color:red"<?php
                }
                
             ?>  class="badge rounded-pill">
            <h4>
                
            <?php  if($row1['id_comptabilite'] ==1){echo "+";}else{echo"-";} echo $row1['montant']." €"; ?></h4></span>
            
            <p><?php echo "Par : ".$row1['mode_Paiement'];?></P>
          </div>
     
            <div class="ms-2 me-auto">
            </li>
            </ol>
            </div>
          <?php
        }

    }

    function solde_debit($db){


        $sql = 'SELECT montant FROM transactions WHERE types = 2';
        $total_debit = array();
        foreach ($db->query($sql) as $row1) {
         array_push($total_debit,$row1['montant']);
        }
        //var_dump($total_debit);
        echo array_sum($total_debit);
    }

    function solde_credit($db){

        $sql = 'SELECT montant FROM transactions WHERE types = 1';
        $total_credit = array();
        foreach ($db->query($sql) as $row1) {
         array_push($total_credit,$row1['montant']);
        }
        //var_dump($total_debit);
        echo array_sum($total_credit);
    }

    function solde($db){

    
        $sql = 'SELECT montant FROM transactions WHERE types = 2';
        $total_debit = array();
        foreach ($db->query($sql) as $row1) {
         array_push($total_debit,$row1['montant']);
        }
        //var_dump($total_debit);
        $sum_debit = array_sum($total_debit);


    
        $sql = 'SELECT montant FROM transactions WHERE types = 1';
        $total_credit = array();
        foreach ($db->query($sql) as $row1) {
         array_push($total_credit,$row1['montant']);
        }
        //var_dump($total_debit);
        $sum_credit = array_sum($total_credit);

        $total =  $sum_credit - $sum_debit;

        echo "Solde : ".$total." €";
    }


}

?>