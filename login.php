<?php
include "head.html";
?>	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="log.php" name="login" method="post">
							<input type="text" placeholder="Name" name="username"/>
							<input type="password" placeholder="Password" name="password" />
							
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
					<form name="reg" action="reg.php" method="post">
						<h2>New User Signup!</h2>
							<input type="text"  name="username" placeholder="Name"/>
							<input type="password"  name="password" placeholder="Password"/>
							<input type="email" name="email" placeholder="Email Address"/>
							<input type="text" placeholder="Mobile Number" name="mobile"/>
							<input type="textarea" placeholder="Your Address" name="address"/>
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	<?php
	
	include "foot.html";
	?>
