
<?php
include ("cpanel.php");
include("dbconnect.php");
                        
                        ?>
 
 
                          	

                            
                         <div class="container">
                        						
						<div class="row">
							<div class="col-6 col-12-medium">
                            
								<section>
									
									<form  action=" user_add.php"  method="post"  >
										<div class="row gtr-50">		
                                            <div class="col-6 col-12-small">       
												<input name="nom" placeholder="Enter Username" type="text"  />
											</div>
											<br> <br><br> <br>
											<div class="col-6 col-12-small">
												<input name="password" placeholder="Enter Password" type="text" />
											</div>
                                            
                                            
                                            <br> <br><br>
											<div class="col-12">
												<button name="submituser" type="submit" id="contact-submit"  class="form-button-submit button icon solid fa-envelope">Add User</button>
                                                </div>
                                            </div>	
										</div>
                                    </form>
                                    
                               
								</section>
							</div>
                            


                    </body>
</html>
                       