<?php
function getConnetion(){
$cnx=mysqli_connect("localhost","root","","boutique");
return $cnx;
}

function getAllCategories(){
    $cnx=getConnetion();
    $rst=mysqli_query($cnx,"select * from categorie  ");
    $tab=[];
    while($d=mysqli_fetch_array($rst)){
        $tab[]=$d;

    }
    mysqli_free_result($rst);
    mysqli_close($cnx);
return $tab;
}
function getAllProduits(){
    $cnx=getConnetion();
    $rst=mysqli_query($cnx,"select * from produit ");
    $tab=[];
    while($d=mysqli_fetch_array($rst)){
        $tab[]= $d;

    }
    
return $tab;
}
function getProduitById($id){
    $cnx=getConnetion();
    $rst=mysqli_query($cnx,"select * from produit where id={$id} ");
    $prod=null;
    while($d=mysqli_fetch_array($rst)){
        $prod=$d;

    }
    mysqli_free_result($rst);
    mysqli_close($cnx);
return $prod;
}
function getCategorieById($id){
    $cnx=getConnetion();
    $rst=mysqli_query($cnx,"select * from categorie where id={$id} ");
    $cat=null;
    while($d=mysqli_fetch_array($rst)){
        $cat=$d;

    }
    mysqli_free_result($rst);
    mysqli_close($cnx);
return $cat;
}

function getSession(){
    if(!isset($_SESSION))
    {
    	session_start();
    }
    if(!isset($_SESSION["panier"]))
    {
    	$_SESSION["panier"]= array();

    }
}
function getPanier(){
	 getSession();
	 return $_SESSION["panier"];
}
function addPanier($id){
	 getSession();
	 if(!isset($_SESSION["panier"][$id]))
	 {
	 	$_SESSION["panier"][$id]=1;
	 }
	 else
	 {
	 	$_SESSION["panier"][$id]++;
	 }
}
function getAllProduitsByCat($id){
    $cnx=getConnetion();
    $rst=mysqli_query($cnx,"select * from produit where cat_id={$id}");
    $tab=[];
    while($d=mysqli_fetch_array($rst)){
        $tab[]=$d;

    }
    mysqli_free_result($rst);
    mysqli_close($cnx);
return $tab;}

function getsizePanier(){
    getSession();
    return sizeof($_SESSION["panier"]);

}
function getProduitsPanier()
{
    $panier=getPanier();
    $keys=array_keys($panier);
    if(empty($keys))
    {
   return array(); 
      }
      else
      {
        $liste=implode(",",$keys);
        $tab=[];
        $cnx=getconnetion();
        $req=mysqli_query($cnx,"select * from produit where id in ({$liste})");
        while ($d=mysqli_fetch_array($req))
         {

$tab[]=$d;            
        }
        return $tab;
      }
  }