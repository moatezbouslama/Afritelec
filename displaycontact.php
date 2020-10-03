
<?php
include("cpanel.php");
include("dbconnect.php");
                        $bloc_sql="select * from contact";
                        $bloc_query=mysqli_query($dbconnect,$bloc_sql);
                        $bloc_rs=mysqli_fetch_assoc($bloc_query);
                        
						do{  ?> 
						<center>
                           <header> 
                           <h3><strong>  <?php echo $bloc_rs['nom']."/".$bloc_rs['email']; ?></strong></h3> 

                           
                           <p style="text-align:center;"><?php echo $bloc_rs['msg']; ?> <br></p>
                            <?php   echo "le   <br> ". $bloc_rs['datem']; ?> <br></p>
                            /*******************************************************************************/

                        </header>
                        <?php }while($bloc_rs=mysqli_fetch_assoc($bloc_query)); ?>
						</center>

                        </body>
</html>