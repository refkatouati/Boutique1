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
            <?php
            foreach($liste as $value){
            ?>

            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="images/<?= $value["id"]?>.jpg" >
                    <div class="caption">
                        <h3><?= $value["description"] ?></h3>
                        <p><a href='addpanier.php?id=<?=$value["id"]?>'  class="btn btn-primary" >Ajouter Panier</a>
                            <a href="#" class="btn btn-danger" ><?= $value["prix"] ?></a>
                        </p>
                    </div>
                </div>
            </div>       
          <?php
      }
          ?>

        </div>

    </div>

</div>


</body>
</html>