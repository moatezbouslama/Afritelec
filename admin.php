<?php
include("dbconnect.php");

session_start();
//check if log out
if (isset($_GET['action'])){
    if ($_GET['action']=="logout"){
        unset($_SESSION['admin']);
        $dbconnect->close();
       

    }
}


//check username and password
if (isset($_POST['submit'])){
    $login_sql="select * from user WHERE username='".$_POST['name']."'AND password='".$_POST['password']."'";
    if ($login_query=mysqli_query($dbconnect,$login_sql)){
        $login_rs=mysqli_fetch_assoc($login_query);
        
        $_SESSION['admin']=$login_rs['username'];
    }
}


if(isset($_SESSION['admin'])){
    include("cpanel.php");
}else{
    include("login.php");
}

?>

