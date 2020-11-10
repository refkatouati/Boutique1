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
	
       
		
        <div class="col-md-12">
            <div class="col-md-6">
            <div class="panel panel-info">
                <div class="panel-body">
                    
                    
                <form class="form-horizontal">
                 <h4 align="center">Vous Avez Déjà Un Compte E-Boutique ?<br>
                 Connectez-Vous !
                 </h4>
                 <br>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Email</label>
                    <div class="col-md-8">
                      <input type="email" class="form-control" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Mot de passe</label>
                    <div class="col-md-8">
                      <input type="password" class="form-control" placeholder="Password">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-info">Se Connecter</button>
                    </div>
                  </div>
                </form>
                    
                </div>
            </div>
        </div>
        <div class="col-md-6" style="margin-left:-20px;">
            <div class="panel panel-info">
              <div class="panel-body">
                <form class="form-horizontal" method="POST" action="inscrire.php">
                  <h4 align="center">Je Suis Un Nouveau Client </h4>
                  <br />
                  <h5>Créer un nouveau compte client</h5>
                  <br />                
                  <div class="form-group">
                    <label class="col-md-4 control-label">Nom</label>
                    <div class="col-md-8">
                      <input type="text" name="nom" class="form-control" placeholder="Nom">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Prénom</label>
                    <div class="col-md-8">
                      <input type="text" name="prenom" class="form-control" placeholder="Prenom">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Adresse</label>
                    <div class="col-md-8">
                      <input type="text"  name="adresse"class="form-control" placeholder="Adresse">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Email</label>
                    <div class="col-md-8">
                      <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Mot de passe</label>
                    <div class="col-md-8">
                      <input type="password" name="pass" class="form-control" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-info">S'inscrire</button>
                    </div>
                  </div>
                </form>
                    
                </div>
            </div>
        </div>
        
        
   
            

        </div>

    </div>

</div>


</body>
</html>