<?php
include ("add_user.php");
if(!isset($_POST['submituser'])){
    header('Location:index.php');
}
include("dbconnect.php");
$nom=$_POST['nom'];
$password=$_POST['password'];

$sql_u = "SELECT * FROM user WHERE username='$nom'";
$res_u = mysqli_query($dbconnect, $sql_u);
if (mysqli_num_rows($res_u) > 0) {
    echo "Sorry... username already taken"; 	
  } else{
$sql ="INSERT INTO `user`(`username`, `password`) VALUES ('$nom', '$password')";

$qry=mysqli_query($dbconnect,$sql);
if($qry){
    echo "user added";
}
  }
?>

