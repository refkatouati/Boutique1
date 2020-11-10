<?php
require_once("function.php");
$liste=null;
if(isset($_GET["id"]))
{
    $liste=getAllProduitsBaycat($_GET["id"]);

}
else
{$liste=getAllProduits($id);


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
		
        <div class="col-md-9">
            <?php
            foreach($liste as $value){
            ?>

            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="images/1.jpg" >
                    <div class="caption">
                        <h3><?= value["description"] ?></h3>
                        <p><a href="#" class="btn btn-primary" >Ajouter Panier</a>
                            <a href="#" class="btn btn-danger" ><?= value["prix"] ?></a>
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