<?php 
include("dbconnect.php");
$date = date('Y-m-d H:i:s');

$nom=$_POST['nom'];
$mail=$_POST['email'];
$msg=$_POST['msg'];

       if (isset($_POST['submit'])){
        $sql="INSERT INTO contact (nom,email,msg,datem) VALUES ('$nom','$mail','$msg','$date')";
                if($dbconnect->query($sql)===TRUE){
                        //include("index.php");

                }
        }else{
              // include("index.php");
        echo "erreur";
        }
        header('Location: index.php');
$dbconnect->close();
 ?>

 