<?php
include("dbconnect.php");
$image = addslashes($_FILES['my_picture']['tmp_name']);
$name  = addslashes($_FILES['my_picture']['tmp_name']);
$image = file_get_contents($image);
$image = base64_encode($image);


$sql = "INSERT INTO imgs (ID,picture) VALUES ('1','$image')";
$sql_query=mysqli_query($dbconnect, $sql);
if($sql_query){
$message = "The picture successfully uploaded";
echo $message;
}
else{
    echo "3asba";
}
?>