<?php
class Budget{


    
    public function __construct(){
       
    }



    function categories(){

            $db = new PDO('mysql:host=localhost;dbname=gestion;charset=utf8', 'root', '');
        
    
        $sql = 'SELECT * FROM categorie';
        foreach ($db->query($sql) as $row) {
          ?>
           <option value="<?php echo $row['id_categorie']?>"><?php echo $row['categorie']?></option>
          <?php
        }

    }

    function modesPaiement(){

        $db = new PDO('mysql:host=localhost;dbname=gestion;charset=utf8', 'root', '');
        $sql = 'SELECT * FROM modespaiement';
        foreach ($db->query($sql) as $row1) {
          ?>
           <option value="<?php echo $row1['id_modePaiement']?>"><?php echo $row1['mode_Paiement']?></option>
          <?php
        }
    }
}

?>