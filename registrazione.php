<?php
session_start(); 
include("connessione.php");
if($_POST["username_reg"] != "" && $_POST["password_reg"]!= "" && $_POST["email_reg"] != ""){
$query_registrazione = mysqli_query($link,"INSERT INTO users (username,password,email)
VALUES ('".$_POST["username_reg"]."','".$_POST["password_reg"]."','".$_POST["email_reg"]."')") 
or die ("query di registrazione non riuscita".mysql_error()); 
}else{
header('location:index.php?action=registration&errore=Non hai compilato tutti i campi obbligatori'); 
}
if(isset($query_registrazione)){ 
$_SESSION["logged"]=true; 
header("location:index.php");
}else{
echo "non ti sei registrato con successo"; 
}
?>