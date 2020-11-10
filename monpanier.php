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
            <?php
include_once("left.php");

?>
</div>
		
        <div class="col-md-9">
            
            <div class="col-md-9">
            <div class="panel panel-info">
                <div class="panel-heading">Mon panier </div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr> <th>#</th>
                                <th>D&eacute;signation de vos articles</th>
                                <th>Prix UT</th>
                                <th>Quantit&eacute;</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                             <?php
                        $liste=getProduitsPanier();
                        $i=1;

                        foreach ($liste as $value) {
                            
                        
                        ?>
                            <tr>
                                <th scope="row"><?=$i++?></th>
                                <td>
                                    <img src='images/<?=$value["id"] ?>.jpg' width="10%"> <?=$value["description"] ?>
                                </td>
                                <td><?=$value["prix"] ?>DT</td>
                                <td><?=$_SESSION["panier"][$value["id"]] ?></td>
                                <td><?=$_SESSION["panier"][$value["id"]]*$value["prix"]?></td>
                                <td><a class="btn btn-danger " href="sup.php?id=<?=$value['id'] ?>">Suppimer </a></td>
                            </tr>
                            <?php
                                    }
                            ?>
                        </tbody>  
                                             
                    </table>

                </div>
                <div class="panel-footer">                  
                        <a href="acceuil.php" class="btn btn-warning">POURSUIVRE VOS ACHATS</a>
                        <a href="connexion.php" class="btn btn-info">FINALISER VOTRE COMMANDE</a>               
                </class>
            </div>
        </div>

        </div>

    </div>

</div>


</body>
</html>