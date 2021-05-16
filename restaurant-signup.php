<!DOCTYPE html>
<html>
<head>
	<title>OrderNOW</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style type="text/css">
		b{
			color: red;
		}
	</style>
</head>
<body>
	<!-- navbar -->
	<nav class="navbar navbar-inverse  navbar-fixed-top" style="font-size: 16px;background-color:rgba(230, 126, 34);border:0 solid white;">
	  <div class="container">
	    <div class="navbar-header">
	    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span> 
		    </button>
	      <a class="navbar-brand" href="index.php" style="font-size: 18px;color:white">OrderNOW for our partners</a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav navbar-right">
	      	<li class="active" style="color:white;"><a href="restaurant-signup.php">Join us today</a></li>
	        <li><a href="restaurant-login.php" style="color:white;"><span class="glyphicon glyphicon-log-in"></span> Sign in</a></li>
	      </ul>
	    </div>
	  </div>
	</nav><br><br><br><br>
	<!-- Customer signup form -->
	<div class="container col-md-6 col-md-offset-3">
		<form action="files/res-save.php" method="post">
		  <div class="form-group">
		    <label for="res_name" style="color:rgba(230, 126, 34);">Restaurant Name<b>*</b></label>
		    <input type="text" class="form-control" id="res_name" name="res_name" required />
		  </div>	
		  <div class="form-group">
		    <label for="res_email" style="color:rgba(230, 126, 34);">Restaurant Email<b>*</b></label>
		    <input type="email" class="form-control" id="res_email" name="res_email" required/>
		  </div>
		  <div class="form-group">
		    <label for="res_number" style="color:rgba(230, 126, 34);">Restaurant Number<b>*</b></label>
		    <input type="text" class="form-control" id="res_number" name="res_number" required />
		  </div>
		  <div class="form-group">
		    <label for="res_city" style="color:rgba(230, 126, 34);">Restaurant City<b>*</b></label>
		    <input type="text" class="form-control" id="res_city" name="res_city" required />
		  </div>
		  <div class="form-group">
		    <label for="password" style="color:rgba(230, 126, 34);">Password<b>*</b></label>
		    <input type="password" class="form-control" id="res_password" name="res_password" required/>
		  </div>
		  <button type="submit" name="resSignupBtn" class="btn btn-success">Sign up</button>
		   <span>Already have an account? <a class="text-danger" href="restaurant-login.php">Sign in</a></span>
		</form>
	</div>	
</body>
</html>
