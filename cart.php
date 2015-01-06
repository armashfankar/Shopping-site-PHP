<?php
session_start();

$x=$_POST['cartid'];

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

$sql="select * from product where pid=$x";
$result = mysql_query($sql) or die("cannot execute query");

 $count = mysql_num_rows($result);
$row = mysql_fetch_array($result);

	$pname = $row['pname'];
	$cart = $row['pid'];

 $bname = $row['brand'];

 $price = $row['price'];
?>


<?php include "head3.php"?>
<body>
	

	<section id="cart_items">
		<div class="container">
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/mens/<?php echo $x ?>.jpg" alt="" height="200"></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?php echo $pname ?></a></h4>
								<p><?php echo $x?></p>
							</td>
							<td class="cart_price">
								<p><?php echo $price?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href="#"> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href="#"> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php echo $price?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>

							</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
		<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
					<form name="reg" action="mail.php" method="post">
						<h2>Enter Your Email Address For Verification</h2>
							<input type="text"  name="email" placeholder="Enter Your Email Address"/>
							<input type="submit"  name="send" class="btn btn-default">
						</form>
					</div>
				</div>

			<div class="row">
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span><?php echo $price?></span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span><?php echo $price ?></span></li>
						</ul>
							<a class="btn btn-default update" href="">Update</a>
							<a class="btn btn-default check_out" href="">Check Out</a>
					</div>
				</div>
			</div>
			
		</div>
		
	</section><!--/#do_action-->
<?php
include "foot.html";
?>