<?php 
	session_start(); 
	$ActionType = $_GET['ActionType'];
	if($ActionType == "Edit"){
		$ID = $_GET['ID'];
		$Loc = $_GET['Loc'];
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php if($ActionType == "Register"){echo "Register an Accout";}else echo "Edit Account Information"; ?></title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/business-casual.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php
		$Username = null;
		if(!empty($_SESSION["Username"]))
		{
			$Username = $_SESSION["Username"];
		}
	?>
</head>

<body>

  

    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">My Cake Shop</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
					<li><a href="bestseller.php">Best Sellers</a></li>
					<li><a href="shop.php">Shop</a></li>
                    <li><a href="about.php">About</a></li>
					<?php if($Username == null){echo '<li><a href="register.php?ActionType=Register">Register</a></li>';} ?>
					<?php if($Username == null){echo '<li><a href="Login.php?Role=User">Login</a></li>';} else {echo '<li><a href="Logout.php">Logout</a></li>';} ?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="brand">Welcome Our Cake Shop</div>
    <div class="address-bar"> What we have in wait<strong> For You</strong> </div>
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
						<hr>
						<h2 class="intro-text text-center"><?php if($ActionType == "Register"){echo "Register";}else echo "Edit Account Information"; ?></h2>
						<hr>
					<div class="col-md-6">	
							<form role="form" action="RegisterAction.php?ActionType=<?php echo $ActionType; if($ActionType == "Edit"){ echo "&Loc=" . $Loc . "&ID=" .$ID;} ?>" 
							method="POST">
							
							<div class="form-group">
							  <label for="username">Username:</label>
							  <input type="text" name="Username" class="form-control" id="Username" placeholder="Enter Username">
							</div>
							
							<div class="form-group">
							  <label for="Password">Password:</label>
							  <input type="Password" name="Password" class="form-control" id="Password" placeholder="Enter Password">
							</div>

							<div class="form-group">
							  <label for="Firstname">Firstname:</label>
							  <input type="text" name="Firstname" class="form-control" id="Firstname" placeholder="Enter Firstname">
							</div>
							
							<div class="form-group">
							  <label for="Middlename">Middlename:</label>
							  <input type="text" name="Middlename" class="form-control" id="Middlename" placeholder="Enter Middlename">
							</div>
							
							<div class="form-group">
							  <label for="Lastname">Lastname:</label>
							  <input type="text" name="Lastname" class="form-control" id="Lastname" placeholder="Enter Lastname">
							</div>
							
							<div class="form-group">
							  <label for="Address">Address:</label>
							  <input type="text" name="Address" class="form-control" id="Address" placeholder="Enter Address">
							</div>
							
							<div class="form-group">
							  <label for="EmailAddress">Email Address:</label>
							  <input type="email" name="EmailAddress" class="form-control" id="EmailAddress" placeholder="Enter Email Address">
							</div>
							
							<button type="submit" class="btn btn-default">Submit</button><br><br>
						</form>
					</div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy;My Cake Shop 2023</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
