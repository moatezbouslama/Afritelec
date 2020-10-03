
<?php
include ("cpanel.php");
include("dbconnect.php");
                        $bloc_sql="show tables";
                        $bloc_query=mysqli_query($dbconnect,$bloc_sql);
                        $bloc_rs=mysqli_fetch_assoc($bloc_query);
                        ?>
 
 
                          	

                            
                         <div class="container">
                        						
						<div class="row">
							<div class="col-6 col-12-medium">
                            
								<section>
									
									<form  action="add_category.php?category=<?php echo $_GET['category'] ;  ?>"  method="post" enctype="multipart/form-data" >
										<div class="row gtr-50">
											<div class="col-6 col-12-small">
                                            
                                            <select id="addproduct" name="category" onChange="change_category()"  >
                                            <?php if (isset($_GET['category']) ){  ?>
                                                    <option value="<?php echo $_GET['category'] ;?>" selected><?php echo $_GET['category']; ?></option>
                                            <?php    
                                            }else{
                                            ?>
                                                <option value="selectproduct">------------select product-----------------</option>
                                                 <?php 
                                            } 
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
                                            <?php 
                                            
                                            ?>
                                            
                    
                                            <div class="col-6 col-12-small">
                                                
												<input name="nom" placeholder="Name" type="text" required />
											</div>
											<br> <br><br> <br>
											<div class="col-12">
												<textarea name="desc" placeholder="Description" required></textarea>
											</div>
                                            <br> <br><br> 
                                            <div class="col-6 col-12-small">
												<input name="my_picture"  accept="images/*" placeholder="Add Image" type="file" required />
											</div>
                                            <br> <br><br>
											<div class="col-12">
												<button name="submit" type="submit" id="contact-submit"  class="form-button-submit button icon solid fa-envelope">Add Product</button>
                                                </div>
                                            </div>	
										</div>
									</form>
								</section>
							</div>
                            
<script type="text/javascript">
function change_category(){
    
    window.location.replace("table.php?category="+document.getElementById("addproduct").value);

   
}

</script>

                    </body>
</html>
                       