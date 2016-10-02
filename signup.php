<?php
	require_once("./functions/header.php");
?>

      <link rel="stylesheet" type="text/css" href="tags/bootstrap-tagsinput.css">
	  
	  
      <!-- Sign Up -->
      <div class="container">
	  	<div class="panel panel-default">
			<div class="panel-body">
				<form class="form-horizontal">
				  <fieldset>

					<!-- Form Name -->
					<legend>User Registration</legend>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="user_nice_name">Your First and Last Name</label>  
					  <div class="col-md-4">
						<input id="user_nice_name" name="user_nice_name" type="text" placeholder="Your Name" class="form-control input-md" required="">
						<span class="help-block">We will need a first and last name.</span>  
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="userna,e">Your Email account</label>  
					  <div class="col-md-4">
						<input id="userna,e" name="userna,e" type="text" placeholder="Your Email Address" class="form-control input-md" required="">
						<span class="help-block">We need this.</span>  
					  </div>
					</div>

					<!-- Username input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="username_input">Username</label>
					  <div class="col-md-4">
						<input id="username_input" name="username_input" type="text" placeholder="Your username here" class="form-control input-md">
						<span class="help-block">Please use a unique username.</span>
					  </div>
					</div>

					<!-- Password input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="passwordinput">Password</label>
					  <div class="col-md-4">
						<input id="passwordinput" name="passwordinput" type="password" placeholder="Your password here" class="form-control input-md">
						<span class="help-block">Please use a STRONG password.</span>
					  </div>
					</div>

					<!-- City input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="user_city">Your City</label>  
					  <div class="col-md-4">
						<input id="user_city" name="user_city" type="text" placeholder="Your city" class="form-control input-md">
						<span class="help-block">Your current city.</span>  
					  </div>
					</div>

					<!-- About you -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="summary">About You</label>  
					  <div class="col-md-4">
						<!-- <input id="summary" name="summary" type="text" placeholder="Something about you" class="form-control input-md" required=""> -->
						<textarea class="form-control input-md" id="summary" name="summary" rows="3" placeholder="Something about you" required></textarea>
						<span class="help-block">Tell us about yourself</span>  
					  </div>
					</div>

					<!-- User Pic input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="pic_url">Your Picture URL</label>  
					  <div class="col-md-4">
						<input id="pic_url" name="pic_url" type="text" placeholder="Your profile pic URL" class="form-control input-md">
						<span class="help-block">Your profile picture URL please.</span>  
					  </div>
					</div>

					<!-- Skills input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="skill_input">Your Skills</label>  
					  <div class="col-md-4">
						<input id="skill_input" name="skill_input" type="text" placeholder="" class="form-control input-md" required="" data-role="tagsinput">
						<span class="help-block">What you master in? Press enter after every skill</span>  
					  </div>
					</div>

					<!-- Interest input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="interest_input">Your Interests</label>  
					  <div class="col-md-4">
						<input id="interest_input" name="interest_input" type="text" placeholder="" class="form-control input-md" required="" data-role="tagsinput">
						<span class="help-block">What are your interests? Press enter after every skill</span>  
					  </div>
					</div>

					<!-- Button -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="signup_recruiter"></label>
					  <div class="col-md-4">
						<button id="signup_recruiter" name="signup_recruiter" class="btn btn-primary">Signup</button>
					  </div>
					</div>

				  </fieldset>
				</form>
			</div>
		</div>
      </div>
      <!-- <input type="text" value="Amsterdam,Washington,Sydney,Beijing,Cairo" data-role="tagsinput" /> -->

  		<!-- Footer -->
<?php
	require_once("./functions/footer.php");
?>
      <script src="tags/bootstrap-tagsinput-angular.min.js"></script>
      <script src="tags/bootstrap-tagsinput.min.js"></script>