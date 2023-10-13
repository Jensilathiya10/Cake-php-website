<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Products</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/business-casual.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php
		$Username = null;
		if(!empty($_SESSION["Username"]))
		{$Username = $_SESSION["Username"];}
		$ProductAction = $_GET["ProductAction"];
		if(empty($_SESSION['Admin'])){echo '<script>window.open("index.php","_self",null,true);</script>';}
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
					<li><a href="Management_Orders.php">Orders</a></li>
					<li><a href="Management_Products.php?ProductAction=Add">Products</a></li>
					<li><a href="Management_ProductsList.php">Product List</a></li>
                    <li><a href="Management_Customers.php">Customers</a></li>
					
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
						<h2 class="intro-text text-center">Products</h2>
						<hr>

					<div class="col-md-12">	
						<div class="col-md-6">	
							<form role="form" action="Management_Products_Action.php?ProductAction=
							<?php echo $ProductAction; if($ProductAction=="Edit"){ echo "&ProductID=" . $_GET['ProdID'];} ?>" 
							method="POST" enctype = "multipart/form-data">
							
							<div class="form-group">
							  <label for="ProductName">Product Name:</label>
							  <input type="text" name="ProductName" class="form-control" id="ProductName" placeholder="Enter Product Name" required>
							</div>
							
							<div class="form-group">
							  <label for="ProductBrand">Product Brand:</label>
							  <input type="text" name="ProductBrand" class="form-control" id="ProductBrand" placeholder="Enter Product Brand" required>
							</div>
							
							<div class="form-group">
							  <label for="ProductPrice">Product Price:</label>
							  <input type="text" name="ProductPrice" class="form-control" id="ProductPrice" placeholder="Enter Product Price" required>
							</div>
						</div>
						<div class="col-md-6">	
							<div class="form-group">
							  <label for="ProductSize">Size Available:</label>
							  <input type="text" name="ProductSize" class="form-control" id="ProductSize" placeholder="Enter Product Size" required>
							</div>
						
							<div class="form-group">
							  <label for="ProductColor">Colors Available:</label>
							  <input type="text" name="ProductColor" class="form-control" id="ProductColor" placeholder="Enter Product Color" required>
							</div>
							
							<div class="form-group">
							  <label for="ProductCategory">Category:</label>
							  <input type="text" name="ProductCategory" class="form-control" id="ProductCategory" placeholder="Enter Product Category" required>
							</div>
							
							<div class="form-group">
								<label for="ProductImage">Product Image:</label>
								<input type="file" name="ProductImage">
							</div>
							
							<div class="form-group">
							<button type="submit" style="float: right;" class="btn btn-default">Submit</button>
							</div>
						</div>
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
                    <p>Copyright &copy;  My Cake Shop 2023</p>
                </div>
            </div>
        </div>
    </footer>	

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
			
		});
	</script>

</body>

</html>
