<?php
session_start();
include("connessione.php"); 
$_SESSION["username"]=$_POST["username"];
$_SESSION["password"]=$_POST["password"];
$query = mysqli_query($link,"SELECT * FROM users WHERE username='".$_POST["username"]."' AND password ='".$_POST["password"]."'")  
or DIE('query non riuscita'.mysqli_error());
if(mysqli_num_rows($query)==true){        
  header("location:loginsuccesso.php"); 
}else{
echo "non ti sei registrato con successo";
}
?>