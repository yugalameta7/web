<?php
if (isset($_POST['submit'])) {

    $mobile=$_POST['mobile']
 
  } 
 ?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Animated Background Login Screen</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
	<div align="center" id="login-box">
		<div class="logo">
			
			<h1 class="logo-caption"><span class="tweak">S</span>ign up</h1>
		</div><!-- /.logo -->
		<div class="controls">
			<input type="text" name="username" placeholder="Username" class="form-control" />
			<input type="text" name="Password" placeholder="Password" class="form-control" />
			<input type="text" name="email" placeholder="email" class="form-control" />
			<input type="number" class="form-control" id="mobile" placeholder="enter a number" />
			<button type="button" class="btn btn-default btn-block btn-custom">Sign up</button>

		</div>
	</div>
</div> 
<div id="particles-js"></div>
<!-- partial -->
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css'></script>
<script src='https://code.jquery.com/jquery-1.11.1.min.js'></script><script  src="./script.js"></script>

</body>
</html>
