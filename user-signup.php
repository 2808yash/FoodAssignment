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
	      <a class="navbar-brand" href="index.php" style="font-size: 18px;color:white">OrderNOW</a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav navbar-right">
	      	<li><a href="restaurant-signup.php" style="color:white;">Partner with us</a></li>
	        <li  class="active" style="color:white;"><a href="user-signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
	        <li><a href="user-login.php" style="color:white;"><span class="glyphicon glyphicon-log-in"></span> Sign in</a></li>
	      </ul>
	    </div>
	  </div>
	</nav><br><br><br><br>
	<!-- Customer signup form -->
	<div class="container col-md-6 col-md-offset-3">
		<form action="files/save.php" method="post">
		  <div class="form-group">
		    <label for="first_name" style="color:rgba(230, 126, 34);">First Name<b>*</b></label>
		    <input type="text" class="form-control" id="first_name" name="first_name" required />
		  </div>
		  <div class="form-group">
		    <label for="last_name" style="color:rgba(230, 126, 34);">Last Name<b>*</b></label>
		    <input type="text" class="form-control" id="last_name" name="last_name" required />
		  </div>	
		  <div class="form-group">
		    <label for="email" style="color:rgba(230, 126, 34);">Email<b>*</b></label>
		    <input type="email" class="form-control" id="email" name="email" required/>
		  </div>
		  <div class="form-group">
		    <label for="preference" style="color:rgba(230, 126, 34);">Your Preference<b>*</b>&nbsp;</label>
		    <input type="radio" name="preference" value="non-veg" required> Non-Veg &nbsp;
  			<input type="radio" name="preference" value="veg" required> Veg
		  </div>
		  <div class="form-group">
		    <label for="contact_number" style="color:rgba(230, 126, 34);">Contact Number<b>*</b></label>
		    <input type="text" class="form-control" id="contact_number" name="contact_number" required />
		  </div>
		  <div class="form-group">
		    <label for="password" style="color:rgba(230, 126, 34);">Password<b>*</b></label>
		    <input type="password" class="form-control" id="password" name="password" required/>
		  </div>
		  <button type="submit" name="userSignupBtn" class="btn btn-success">Sign up</button>
		   <span>Already have an account? <a class="text-danger" href="user-login.php">Login</a></span>
		</form>
	</div>	
</body>
</html>
