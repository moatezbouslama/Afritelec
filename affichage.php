

<?php
if (isset($_GET['category'])){
include("header.php");
?>
<body class="homepage is-preload">
		<div id="page-wrapper">
<section id="header">
					
                <br><br><br><br><br>
                    <h1 id="logo" ><?php echo $_GET['category']?> </h1>

					
				</section>


<article class="box post">
<section id="main">

					<div class="container">
						<div id="content">

							<!-- Post -->
								<article class="box post">
									<!--<header>
										<h2>Behold! This is the <strong>no sidebar</strong> layout<br />
										with no sidebar at all!</h2>
									</header>
									<span class="image featured"><img src="images/pic04.jpg" alt="" /></span>
									
								</article> -->
                        <?php
                        $bloc_sql="select * from ".$_GET['category'];
                        $bloc_query=mysqli_query($dbconnect,$bloc_sql);
                        $bloc_rs=mysqli_fetch_assoc($bloc_query);
                        
                        do{  ?> 
                           <header> <h2><strong>  <?php echo $bloc_rs['nom']; ?></strong></h2>
                           <br> 
                             
                           <br>
                           <p><?php echo $bloc_rs['descrip']; ?> <br></p>
                             <?php   echo '<img src="data:image/jpeg;base64,'.base64_encode($bloc_rs['img'] ).'"/>';   ?> 
                             
                        </header>
                        <?php }while($bloc_rs=mysqli_fetch_assoc($bloc_query)); ?>
                        

						</div>
					</div>
                </section>
                        </article>
<?php
include("footer.php");
?>

</body>
</html>

<?php
}
else{
    header('Location: index.php');
}