<?php
include("dbconnect.php");
if(isset($_POST['delete'])){
    $bloc_sql="DELETE FROM ". $_GET['category'] ." WHERE ID=" .$_GET['id'];
    echo $bloc_sql;
    $query=mysqli_query($dbconnect,$bloc_sql);
if($query){
    echo "bravoooooooooooooooo";
}
}
?>