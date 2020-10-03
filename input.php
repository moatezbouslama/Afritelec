<?php
require 'dbconnect.php';
?>

<div class="container">
	<h1 align="center" style="background-color: #1c1c1c; color:white; margin-bottom: 15%;">Copyright Charaf Tchi</h1>
</div>

<div class="container img-thumbnail">
 <form enctype="multipart/form-data" action="insertimage.php" method="post">
 
  <div class="form-group">
    <label for="img"><span class="badge badge-dark">Upload your image:</span></label>
    <input type="file" accept="image/*" class="form-control" name="my_picture" required>
  </div>
  <button type="submit" class="btn btn-outline-dark btn-block">Upload</button>
</form>
</div> 