<?php
session_start();
$id=$_GET["id"];
unset($_SESSION["panier"][$id]);


header("location:monpanier.php");
?>