

<?php
include("cpanel.php");
if(!isset($_POST['submit'])){
    header('Location:index.php');
}
include("dbconnect.php");
$nom_cat=$_POST['nom'];
$db=$_POST['category'];

$desc_cat=$_POST['desc'];

/*$filename=$_FILES['submit']['img'];
$filetmpname=$_FILES['submit']['tmp_name'];
$folder='imageuploaded\'';
move_uploaded_file($filetmpname,$folder.$filename);*/

//$sql ="INSERT INTO `$db`(`nom`, `descrip`,`img`) VALUES ('$nom_cat', '$desc_cat','$filename')";
$image = addslashes($_FILES['my_picture']['tmp_name']);
$name  = addslashes($_FILES['my_picture']['tmp_name']);
$image = file_get_contents($image);
$image = base64_encode($image);

$sql ="INSERT INTO `$db` (`ID`,`nom`, `descrip`, `img`) VALUES (NULL,'$nom_cat', '$desc_cat','$image')";
$qry=mysqli_query($dbconnect,$sql);
if($qry){
    ?> <h1 style="color:red;">  Produit ajoutee avec success</h1><?php
}

?>
<center>
<a href="affichage.php?category=<?php echo $db?>"><button   name="sb" value="displaycontact">Check Product Page </button></a>

</center>

</body>
           
           </html>