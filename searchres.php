<?php
session_start();

//$x=$_POST['pid'];

$host="localhost";
$user="root";
$pass="root";
$con = mysql_connect("$host","$user","$pass");

mysql_select_db("eshopper", $con);
if (!$con)
  {

echo "Error in DBConnect() = " . mssql_get_last_message();
  die('Could not connect: ' . mysql_error());

  }

$term = $_POST['term'];
 
$sql ="select * from product where pname='$term'";
$result = mysql_query($sql) or die("cannot execute query");

 $count = mysql_num_rows($result);
$row = mysql_fetch_array($result);
    
	$pname = $row['pname'];
	$cart = $row['pid'];

 $bname = $row['brand'];

 $price = $row['price'];
?>


<?php
include "head2.php";

?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Mens
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Armani</a></li>
											<li><a href="#">Prada</a></li>
											<li><a href="#">Dolce and Gabbana</a></li>
									
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Womens
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Fendi</a></li>
											<li><a href="#">Guess</a></li>
											<li><a href="#">Valentino</a></li>
										</ul>
									</div>
								</div>
							</div>
							
						</div><!--/category-products-->
					
						
						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
						
					</div>
				</div>
				
				




<div class="col-sm-9 padding-right">
					
                                        <!--SEARCH OUTPUT-->
            <div class="features_items">
						<h2 class="title text-center"> <?php echo $term ?></h2>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/mens/<?php echo $cart ?>.jpg" alt="" />
										<h2<?php echo $price ?></h2>
										<p><?php echo $pname ?></p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2><?php echo $price ?></h2>
											<p><?php echo $pname  ?></p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
									</div>
								</div>
								
							</div>
						</div>
						
                        <!-- SEACRH OUTPUT ENDS-->

			</div>
		</div>
	</section>
	<?php
	include "foot.html";
	?>
