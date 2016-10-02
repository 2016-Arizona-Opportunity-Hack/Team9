	<script>
		pageclass = "Login";
	</script>
	
	<?php
	require_once("./functions/header.php");
?>
      <link rel="stylesheet" type="text/css" href="login.css">

      <!-- Login page -->
      <div class="container">
		<div class="panel panel-default">
			<div >
					<div class="row">
					  <div class="col-md-12">
						<div class="pr-wrap">
						  <div class="pass-reset">
							<label>
							  Enter the email you signed up with</label>
							  <input type="email" placeholder="Email" />
							  <input type="submit" value="Submit" class="pass-reset-submit btn btn-success btn-sm" />
							</div>
						  </div>
						  <div class="wrap">
							<p class="form-title">
							  Sign In</p>
							  <form class="login">
								<input type="text" placeholder="Username" />
								<input type="password" placeholder="Password" />
								<input type="submit" value="Sign In" class="btn btn-success btn-sm" />
								<div class="remember-forgot">
								  <div class="row">
									<div class="col-md-6">
									  <div class="checkbox">
										<label>
										  <input type="checkbox" />
										  Remember Me
										</label>
									  </div>
									</div>
									<div class="col-md-6 forgot-pass-content">
									  <a href="javascription:void(0)" class="forgot-pass">Forgot Password</a>
									</div>
								  </div>
								</div>
							  </form>
							</div>
						  </div>
						</div>
					</div>
				</div>
			</div>
          </div> 

  		<!-- Footer -->
<?php
	require_once("./functions/footer.php");
?>
		<script src="login.js"></script>