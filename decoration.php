

<?php
include("header.php");
?>
<body class="homepage is-preload">
		<div id="page-wrapper">
<section id="header">
					
                <br><br><br><br><br>
                    <h1 id="logo" >Decoration</h1>

					
				</section>


<article class="box post">
<section id="main">

					<div class="container">
						<div id="content">

							
								<article class="box post">
									
                        <?php
                        $bloc_sql="select * from decoration";
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