<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Product List</title>

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
		if(!empty($_SESSION["Username"])){$Username = $_SESSION["Username"];}
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
					<h2 class="intro-text text-center">Product List</h2>
					<hr>
					<div class="col-lg-12">
						<div class="table-responsive">
							<table border="5px" class="table">
								<tr style="text-align: center; color: Black; font-weight: bold;">
									<td>Image</td>
									<td>Product ID</td>
									<td>Product Name</td>
									<td>Product Brand</td>
									<td>Product Size</td>
									<td>Product Color</td>
									<td>Product Price</td>
									<td>Product Category</td>
									<td>Action</td>
								</tr>
								
								<?php 
									require 'Connection.php';
									$sql = "select * from tbl_products";
									$Resulta = mysqli_query($Conn,$sql);
									while($Rows = mysqli_fetch_array($Resulta)):; 
								?>
								<tr style="color: black">
									<td><img style="width: 50px; height: 50px;" src="data:image;base64,<?php echo $Rows[8];?>"></td>
									<td><?php $cid = $Rows[0]; echo $cid; ?></td>
									<td><?php echo $Rows[1]; ?></td>
									<td><?php echo $Rows[2]; ?></td>
									<td><?php echo $Rows[3]; ?></td>
									<td><?php echo $Rows[4]; ?></td>
									<td><?php echo $Rows[5]; ?></td>
									<td><?php echo $Rows[6]; ?></td>
									<td>
									<a href="#" onclick="ProductOnlick('Edit',<?php echo $Rows[0]; ?>)">Edit</a> | 
									<a href="#" onclick="ProductOnlick('Delete',<?php echo $Rows[0]; ?>)">Delete</a>
									</td>
									<?php endwhile; ?>
								</tr>
							</table>
						</div>
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
                    <p>Copyright &copy; My Cake Shop 2023</p>
                </div>
            </div>
        </div>
    </footer>
	

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script>
		function ProductOnlick(action,pid)
		{
			if(action == "Edit")
			{
				if(confirm("Are you sure you want to edit this product?")==true)
				{
					window.open("Management_Products.php?ProdID="+pid+"&ProductAction="+action,"_self",null,true);
				}
			}else if(action == "Delete")
			{
				if(confirm("Are you sure you want to Delete this product?")==true)
				{
					window.open("Management_Products_Action.php?ProdID="+pid+"&ProductAction="+action,"_self",null,true);
				}
			}
		}
	</script>

</body>

</html>
