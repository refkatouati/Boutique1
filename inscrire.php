<?php
session_start();
require_once("function.php");
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];

$adresse=$_POST["adresse"];

$email=$_POST["email"];
$pass=password_hash($_POST["pass"],PASSWORD_BCRYPT);

$cnx=getConnetion();
$req=mysqli_query($cnx,"insert into client values(null,'{$nom}','{$prenom}','{$email}','{$pass}','{$adresse}')");
$id_client=mysqli_insert_id($cnx);// a5er id mta3 client yar7em walden yassin :p

$date=date("Y-m-d");
$rep2=mysqli_query($cnx,"insert into commande values (null,'{$date}',{$id_client})" );
$id_cde=mysqli_insert_id($cnx);
$panier=$_SESSION["panier"];
foreach ($panier as $prod => $qte) {
	$rep2=mysqli_query($cnx,"insert into lignecommande values (null,$qte,$id_cde,$prod)" );
	
}
$_SESSION["iduser"]=$id_client;
header("location:resume_cde.php?id={$id_cde}");

  ?>