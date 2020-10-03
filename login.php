<!DOCTYPE HTML>

<html>

	<head>
		<title>TAZ HQ</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
    </head>
    <body class="homepage is-preload">
		<div id="page-wrapper">
<section id="header">
					<div class="container">

						<!-- Logo -->
							<h1 id="logo"><a href="index.php">TAZ HQ</a></h1>
							<p>The way to the future</p>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li><a class="icon solid fa-home" href="index.php"><span>Introduction</span></a></li>
									
				</section>
<div class="container">
<div class="row">
<div class="col-6 col-12-medium">
<br><br><br>
								<section>
									<form  action="admin.php"  method="post">
										<div class="row gtr-50">
											<div class="col-6 col-12-small">
												<input name="name" placeholder="username" type="text" />
											</div>
											<div class="col-6 col-12-small">
												<input name="password" placeholder="password" type="password" />
												
											</div>
											
											<div class="col-12">
                                                <?php
                                                if (isset($_POST['submit']) && !isset($_SESSION['admin'])){ ?>
                                                <p> incorrect username or password </p>
                                                <?php
                                                }
                                                ?>
												<button name="submit" type="submit"  class="form-button-submit button icon solid fa-envelope">Connect</button>
											</div>
											<h2> <?php $success  ?></h2>
										</div>
									</form>
								</section>
                            </div>
                            </div>
                            </div>

                                            </body>
<?php

?>