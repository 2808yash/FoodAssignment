<!DOCTYPE html>
<html>
<head>
	<title>OrderNow</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style type="text/css">
		div.col-sm-3{
			margin-bottom: 20px; 
		}
		div.card-body p{
			font-size: 13px;
			margin-top: -10px;
		}
		div.res-info{
			margin-bottom: 8px;
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
	      <a class="navbar-brand active" href="index.php" style="font-size: 18px;color:white">OrderNOW</a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav navbar-right">
	      	<li><a href="restaurant-signup.php" style="color:white">Join Us Today</a></li>
	        <li><a href="user-signup.php" style="color:white"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
	        <li><a href="user-login.php" style="color:white"><span class="glyphicon glyphicon-log-in"></span> Sign in</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>
	<br><br>
	<br><br>

             <div class="container">

	    <?php 
	    	require 'files/connection.php';
	    	$sql = "select menu_items.*, restaurants.res_name from menu_items, restaurants where menu_items.res_id=restaurants.id";
	    	$result = $conn->query($sql);
	    ?>

	    <div class="content"><br>
	    	<?php 
	    		
	    		while($row = $result->fetch_assoc()){ ?>
	    			<div class="col-sm-3">
            		    <div class="card" style="width:24rem;">
						    <img class="card-img-top" src="<?php echo $row['item_imagepath']; ?>" alt="Card image" style="width:100%; height: 160px;">
						    <div class="card-body">
						        <h4 class="card-title" style="color:rgba(230,126,34);"><?php echo ucwords($row['item_name']); ?></h4>
						        <p class="card-text pull-right"><?php echo ucfirst($row['item_type']); ?></p>
						        <p class="card-text"><?php echo ucfirst($row['item_desc']); ?></p>
						        <div class="card-text res-info">Restaurant Name - <?php echo ucwords($row['res_name']) ?></div>
						        <a href="javascript:void(0);" class="btn btn-sm btn-info pull-right orderBtn">Order</a>
						        <div class="card-text" style="margin-top: 8px;color:rgba(230,126,34);"><?php echo '₹'.$row['item_price']; ?></div>
						    </div>
						</div>
        			</div>
	    	<?php } ?>
		</div>		
	    		    
	</div>
<br>
<footer class="font-small indigo" style="background-color:rgba(230, 126, 34);">
<div class="container">
    <div class="row text-center d-flex justify-content-center pt-5 mb-3">
      <div class="col-md-3 mb-4">
        <h6 class="text-uppercase font-weight-bold">
          <a href="#!" style="color:white;"><b>About us</b></a>
        </h6>
      </div>
      <div class="col-md-3 mb-4">
        <h6 class="text-uppercase font-weight-bold">
          <a href="" style="color:white;"><b>Feedback</b></a>
        </h6>
      </div>
      <div class="col-md-3 mb-4">
        <h6 class="text-uppercase font-weight-bold">
          <a href="#!" style="color:white;"><b>Help</b></a>
        </h6>
      </div>
      <div class="col-md-3 mb-4">
        <h6 class="text-uppercase font-weight-bold">
          <a href="#" style="color:white;"><b>Contact</b></a>
        </h6>
      </div>
    </div>
 <hr   style="margin: 0 8%;background-color:rgba(46,204,113);"><br>
        <p style="line-height: 1.7rem;color:white;text-align:center;">You can put some text herethat you want to show in your footer part of the website</p>
  <div class="footer-copyright text-center py-3" style="color:white;">© 2021 Copyright:
    <span style="color:white"> Website</span>
  </div>
 
</footer>

	<script type="text/javascript">
		$('.orderBtn').on('click', function(){
			alert('To order something, first sign in');
			location.href = "user-login.php";
		});
	</script>

	

</body>
</html>
