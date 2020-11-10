<?php
require_once("function.php");
$liste=null;
if(isset($_GET["id"]))
{
    $liste= getAllProduitsByCat($_GET["id"]);

}
else
{$liste=getAllProduits();


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="bootstrap/css/bootstrap.min.css"  rel="stylesheet" >
</head>
<body>


<?php
include_once("header.php");

?>


<div class="container">
 
   
    <div class="row" style="margin-top: 80px;">
        <div class="col-md-3">
            <div class="list-group">
                <a href="#" class="list-group-item active"> Tous les Produits </a>
                <a href="#" class="list-group-item">PC-Protable</a>            
            </div>
        </div>



        <div class="col-md-9">
            <div class="panel panel-warning">
                <div class="panel-heading"><b>1. Adresse</b></div>
                <div class="panel-body">
                   <h5> 
                  bb
                   </h5>
                   
                </div>
                
            </div>
            
             <div class="panel panel-info">
                <div class="panel-heading"><b>2. Mode de livraison </b></div>
                <div class="panel-body">
                    <table class="table table table-striped">
                      <tr>                              
                        <td>Sous Total Commande</td>
                        <td> 1500 Dt</td>                               
                      </tr>
                      <tr>                              
                        <td>Montant de livraison</td>
                        <td> 10 Dt</td>                             
                      </tr>
                      <tbody>
                      <tr class="success">                              
                        <td><b>Total</b></td>
                        <td><b> 1510 DT </b></td>                               
                      </tr>
                      </tbody>                     
                    </table>

                </div>
                
            </div>
            
            <div class="panel panel-primary">
                <div class="panel-heading"><b>3. Mode de paiement</b></div>
                <div class="panel-body">
                   <h5> 
                   </h5>
                   
                </div>
                
            </div>
            
            <a href="#" class="btn btn-danger">Annuler</a>
            <a href="#" class="btn btn-success">Valider la commande</a>
            
        
        </div>
    </div>



</div>


</body>
</html>