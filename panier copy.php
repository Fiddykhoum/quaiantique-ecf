<?php
require_once('lib/tools.php');
require_once('./lib/cart_tools.php');
require_once('./Class/Cart.php');
require_once('./templates/header.php');

?>
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <h1>Votre panier</h1>
  </div>

  <div class="row">
    <div>

      <?php
        $myCart = getCart($pdo, $_SESSION['username']);  
          foreach($myCart as $cartKey => $value){            
            $id = $myCart[$cartKey]["id"];
             // suppression a implémenter   
            $subBtn = 'delete'.$id;
            ?>
            <form method="post">
              <input type="submit" class="btn btn-primary mt-4"  name="<?=$id; ?>" value="Supprimer"/> 
            </form>
          <?php

          if(isset($_POST[$id])) {              
            $delquery = "DELETE FROM cart WHERE cart.id = " . $id .";";
            $query = $pdo->query($delquery);
            
          ?> 
            <script language="javascript">               
              alert ("la carte a été supprimée")
              location.reload();            
            </script>
          <?php
           
           } ?>

          <?php   

            echo '<ul class="list-group lead border border-primar"></ul>';
            if(is_array($value)){
                foreach($value as $cartKey => $value){
                  if ($cartKey === 'name') {
                     echo '<li class="list-group-item lead">Pâte : '.$value.'</li>';
                  }
                  if ($cartKey === 'description') {
                    echo '<li class="list-group-item lead">Description : '.$value.'</li>';
                  }
                  if ($cartKey === 'quantity') {
                    $unitPrice = $value;
                    echo '<li class="list-group-item lead">Quantité : '.$unitPrice.'</li>';
                  }
                  if ($cartKey === 'price') {
                    $totPrice = $unitPrice*$value;
                    echo '<li class="list-group-item lead">Prix unitaire : '.$value.'</li>
                          <li class="list-group-item lead">Prix du lot : '.$totPrice.'</li>';
                  }
                }
            }

          }
      ?>
    </div>
 
<?php
require_once('./templates/footer.php');
?>