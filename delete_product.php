
<?php

include("dbconnect.php");
if(isset($_POST['delete'])){
    $bloc_sql="DELETE FROM ". $_GET['category'] ." WHERE ID=" .$_GET['id'];
    echo $bloc_sql;
    $query=mysqli_query($dbconnect,$bloc_sql);

}
include ("cpanel.php");

                        $bloc_sql="show tables";
                        $bloc_query=mysqli_query($dbconnect,$bloc_sql);
                        $bloc_rs=mysqli_fetch_assoc($bloc_query);
                        if (isset($_GET['category']) ){
                        $bloc_sql2="SELECT nom,ID FROM ".$_GET['category'];
                        $result = $dbconnect->query($bloc_sql2);
                        }

                        ?>
 
 
                          	

                            
                         <div class="container">
                        						
						<div class="row">
							<div class="col-6 col-12-medium">
                            
								<section>
									
									<form  action="delete_product.php<?php echo "?category=".$_GET['category']."&id=".$_GET['id']."&nom=".$_GET['nom'];?>"  method="post" enctype="multipart/form-data" >
										
                                        <!-- ----------------------------------------------- -->
                                        <div class="row gtr-50">
											<div class="col-6 col-12-small">
                                            
                                            <select id="addproduct" name="category" onChange="change_category()"  >
                                            
                                                    <option value="<?php echo $_GET['category'] ;?>" selected><?php echo $_GET['category']; ?></option>
                                            <?php
                                                    do{  ?>                                                           
                                                       <?php
                                                    if($bloc_rs['Tables_in_moatez']!= 'user' && $bloc_rs['Tables_in_moatez']!= 'contact' && $bloc_rs['Tables_in_moatez']!= $_GET['category'] ){       ?>                                                       
                                                     <option value="<?php echo $bloc_rs['Tables_in_moatez'] ?>"><?php echo $bloc_rs['Tables_in_moatez'] ?></option>
                                                     <?php                        
                                                    }
                                                    ?>                       
                                                    <?php }while($bloc_rs=mysqli_fetch_assoc($bloc_query));                                                                        
                                                    ?>
                                             </select>
                                            </div>
                                                    <!----------------------------------------------------------------------------->
                                                    
											<div class="col-6 col-12-small">
                                            
                                            <select id="deleteproduct" name="product" onChange="change_product()"  >
                                            <?php if (isset($_GET['id']) ){  ?>
                                                    <option value="<?php echo $_GET['id'] ;?>" selected><?php echo $_GET['nom']; ?></option>
                                            <?php    
                                            }else{
                                            ?>
                                                <option value="selectproduct" selected>------------select product-----------------</option>
                                                 <?php 
                                            } 
                                            while($row = $result->fetch_assoc()){ ?>                                                           
                                                              <?php if ($row['nom'] != $_GET['nom']){ ?>                                             
                                                     <option value="<?php echo $row['ID']?>"  ><?php echo $row['nom'] ?></option>
                                                     <?php 
                                                                }                       
                                                   }                                                                       
                                                    ?>
                                             </select>
                                            </div>

                                           
                                            
                                                  <!---------------------------------------------------------------------------------->  
                                                <?php if (isset($_GET['nom']) ){?>
                                                <div class="col-12">
                                                <button name="delete" type="submit" id="contact-submit"  class="form-button-submit button icon solid fa-envelope">Delete Product</button>
                                                </div>
                                                <?php 
                                                                }
                                                                if(isset($_POST['delete'])){
                                                                if($query){?>

                                                                    <h1 style="color:red;"> Product has been deleted </h1>
                                                                    <?php
                                                                }    
                                                            }
                                                                ?>
                                            </div>	
										</div>
									</form>
								</section>
							</div>
                            
<script type="text/javascript">
function change_category(){   
    window.location.replace("delete_product.php?category="+document.getElementById("addproduct").value); 
    
}
function change_product(){
    test=document.getElementById("deleteproduct");
    $cat=document.getElementById("addproduct").value;
    $num=test.value;
    $name=test.options[test.selectedIndex].text;
    window.location.replace("delete_product.php?category="+$cat+"&id="+$num+"&nom="+$name);  
}

</script>

                    </body>
</html>

                       