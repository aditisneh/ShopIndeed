<!DOCTYPE html>
<html>
<head>
	<title>E Commerce Store</title>
	<link rel="stylesheet"  href="styles/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <div id="top"><!--top bar start-->
    	<div class="container"><!--container start-->
    		<div class="col-md-6 offer">
    			<a href="#" class="btn btn-success btn-sm">
    			 
    			  Welcome Guest
    			  </a>
    			  <a href="#">Shopping Cart Total Price : INR: 100, Total Items 2</a>
    		</div><!--col-6 start-->

    		<div class="col-md-6">
    			<ul class="menu">
    				<li>
    					<a href="customer_registration.php">Register</a>
    				</li>
    				<li>
    					<a href="checkout.php">My Account</a>
    				</li>
    				<li>
    					<a href="cart.php">Goto Cart</a>
    				</li>
    				<li>
    					<a href="login.php">Login</a>
    				</li>
    			</ul>
    			

    		</div>
    	</div>
    	

    </div>

    <div class="navbar navbar-default" id="navbar">
    	<div class="container">
    		<div class="navbar-header">
    			<a class="navbar-brand home" href="index.php">
    				<img src="images/logo1.jpg" alt="shop indeed" class="hidden-xs">
    				<img src="images/logo.jpg" alt="shop indeed" class="visible-xs">
    			</a>
    			
    			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
    				<span class="sr-only">Toggle Navigation</span>
    				<i class="fa fa-align-justify"></i>
    			</button>

    			<button type="button" class="navbar-toggle" data-toggle = "navbar-toggle" data-target = "#search">
    				<span class="sr-only"></span>
    				<i class="fa fa-search"></i>
    				
    			</button>

    		</div><!--navbar close-->
    		
    		<div class="navbar-collapse collapse" id="navigation">
    			<div class="padding-nav"><!--padding nav start-->
    				<ul class="nav navbar-nav navbar-left">
    					<li class="active">
    						<a href="index.php">Home</a>
    					</li>
    					<li>
    						<a href="shop.php">Shop</a>
    					</li>
    					<li>
    						<a href="checkout.php"> My Account</a>
    					</li>
    					<li>
    						<a href="cart.php">Shopping Cart</a>
    					</li>
    					<li>
    						<a href="about.php">About Us</a>
    					</li>
    					<li>
    						<a href="services.php">Services</a>
    					</li>
    					<li>
    						<a href="contactus.php">Contact Us</a>
    					</li>
    				</ul>
    				

    			</div><!--padding nav end-->
    			<a href="cart.php" class="btn btn-primary navbar-btn right">
    				<i class="fa fa-shopping-cart"></i>
    				<span>4 items In cart</span>

    			</a>
    			<div class="navbar-collapse collapse-right">
    				<button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
    					<span class="sr-only">Toggle Search
    					</span>
    					<i class="fa fa-search"></i>
    					
    				</button>
    				

    			</div>

    		</div><!--navbar-collapse end-->

    	</div>
    	

    </div><!--navbar default end-->
</body>
</html>
