	<!-- Footer -->
    <section id="footer">
					<div class="container">
						<header>
							<h2>Questions or comments? <strong>Get in touch:</strong></h2>
						</header>
						<div class="row">
							<div class="col-6 col-12-medium">
								<section>
                                    <!--<?php  
                                    if (isset($_POST['submit'])){
                                        $name=$_POST['nom'];
                                        $mail=$_POST['email'];
                                        $msg=$_POST['msg'];
                                    }
                                    ?>-->
									<form  action="forme_process.php"  method="post">
										<div class="row gtr-50">
											<div class="col-6 col-12-small">
												<input name="nom" placeholder="Name" type="text" required />
											</div>
											<div class="col-6 col-12-small">
												<input name="email" placeholder="Email" type="email" required />
												
											</div>
											<div class="col-12">
												<textarea name="msg" placeholder="Message" required></textarea>
											</div>
											<div class="col-12">
												<button name="submit" type="submit" id="contact-submit"  class="form-button-submit button icon solid fa-envelope">Send Message</button>
											</div>
											
										</div>
									</form>
								</section>
							</div>
							<div class="col-6 col-12-medium">
								<section>
									
									<div class="row">
										<div class="col-6 col-12-small">
											<ul class="icons">
												<li class="icon solid fa-home">
													avenu abou hamed ghazeli <br />													
													sousse
												</li>
												<li class="icon solid fa-phone">
													50441884
												</li>
												
											</ul>
										</div>
										<div class="col-6 col-12-small">
											<ul class="icons">
												
												<li class="icon solid fa-envelope" >
													<a  href="mailto:afritelec@gnet.tn">moatez@gnet.tn</a>
													<br><br>
												</li>
												<li class="icon brands fa-facebook-f">
													<a href="https://www.facebook.com/moatez.bouslama/">facebook.com/moatez bouslama</a>
												</li>
											</ul>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
					
				</section>

		</div>
       
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>
            
            </body>
</html>