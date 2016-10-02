	<script>
		pageclass = "Profile";
	</script>
	
<?php
	require_once("./functions/header.php");
	
	if(isset($_POST['ProfileID'])){
		
		$myfile = fopen("./functions/users.txt", "r") or die("Unable to open file!");
		$readUsers = fread($myfile,filesize("./functions/users.txt"));
		fclose($myfile);
?>
	
	<script>
	var profileObject = <?php echo $readUsers; ?>
	</script>
      <div class="container theme-showcase">
	  	<div class="panel panel-default">
			<div class="panel-body">
				<div class="row">
				  <div class="col-xs-6 col-md-4">
					<div class="thumbnail">
					  <img style="width: 200px; height: 200px;" src="images/user.jpeg" alt="user" >
					  <div class="caption">
						<h3>Eric Cartman</h3>
						<h5 style="padding-left: 5px;">
						  <span class="glyphicon glyphicon-user" aria-hidden="true"></span> eric_cartman
						</h5>
						<h5 style="padding-left: 5px;">
						  <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Individual
						</h5>
						<p><a href="#" class="btn btn-primary" role="button">Message</a></p>
						<p style="padding-left: 5px;"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> <a href="#">City</a></p>
						<p style="padding-left: 5px;"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> <a href="#">Email ID</a></p>
						<!-- <a href="#" class="btn btn-default" role="button">Button</a></p> -->
					  </div>
					</div>
				  </div>
				  <div class="col-xs-12 col-md-8">
					<!-- <div class="page-header"> -->
					  <h2>Summary</h2>
					<!-- </div> -->
					<div class="well">
					  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
					  </div>
				  </div>
				  <div class="col-xs-6 col-md-4">
					<!-- <div class="page-header"> -->
					  <h2>Skills</h2>
					<!-- </div> -->
					<div class="list-group">
					  <button type="button" class="list-group-item">Water Treatment</button>
					  <button type="button" class="list-group-item">Transportation</button>
					  <button type="button" class="list-group-item">Waste Management</button>
					  <button type="button" class="list-group-item">Water Treatment</button>
					  <button type="button" class="list-group-item">Transportation</button>
					  <button type="button" class="list-group-item">Waste Management</button>
					  <button type="button" class="list-group-item">Water Treatment</button>
					  <button type="button" class="list-group-item">Transportation</button>
					  <button type="button" class="list-group-item">Waste Management</button>
					  <button type="button" class="list-group-item">Water Treatment</button>
					  <button type="button" class="list-group-item">Transportation</button>
					  <button type="button" class="list-group-item">Waste Management</button>
					</div>
				  </div>
				  <div class="col-xs-6 col-md-4">
					<!-- <div class="page-header"> -->
					  <h2>Interests</h2>
					<!-- </div> -->
					<div class="list-group">
					  <button type="button" class="list-group-item">Water Treatment</button>
					  <button type="button" class="list-group-item">Transportation</button>
					  <button type="button" class="list-group-item">Waste Management</button>
					  <button type="button" class="list-group-item">Water Treatment</button>
					  <button type="button" class="list-group-item">Transportation</button>
					  <button type="button" class="list-group-item">Waste Management</button>
					  <button type="button" class="list-group-item">Water Treatment</button>
					  <button type="button" class="list-group-item">Transportation</button>
					  <button type="button" class="list-group-item">Waste Management</button>
					  <button type="button" class="list-group-item">Water Treatment</button>
					  <button type="button" class="list-group-item">Transportation</button>
					  <button type="button" class="list-group-item">Waste Management</button>
					</div>
				  </div>
				</div>
				<div class="row">
					<div class="col-md-12">
					  <div class="page-header">
						<h1>Posts</h1>
						
						<ul class="media-list">
							<li class="media">
								<div class="media-left">
									<a href="#">
										<img alt="64x64" class="media-object" data-src="holder.js/64x64" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTc4MjY2OGU4ZSB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1NzgyNjY4ZThlIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMy44MjAzMTI1IiB5PSIzNi4zNjQwNjI1Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="width: 64px; height: 64px;">
									</a>
								</div>
								<div class="media-body">
									<h4 class="media-heading">Media heading</h4>
									<p>
										Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
										</p>
									<div class="media">
										<div class="media-left">
											<a href="#">
												<img alt="64x64" class="media-object" data-src="holder.js/64x64" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTc4MjY2N2I5ZSB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1NzgyNjY3YjllIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMy44MjAzMTI1IiB5PSIzNi4zNjQwNjI1Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="width: 64px; height: 64px;">
											</a>
										</div>
										<div class="media-body">
											<h4 class="media-heading">Nested media heading</h4>
											 Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. 
											<div class="media">
												<div class="media-left">
													<a href="#">
													<img alt="64x64" class="media-object" data-src="holder.js/64x64" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTc4MjY2OGRjZiB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1NzgyNjY4ZGNmIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMy44MjAzMTI1IiB5PSIzNi4zNjQwNjI1Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="width: 64px; height: 64px;">
													</a>
												</div>
												<div class="media-body">
													<h4 class="media-heading">Nested media heading</h4>
													Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. 
												</div>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-left">
											<a href="#">
												<img alt="64x64" class="media-object" data-src="holder.js/64x64" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTc4MjY2NjhkOSB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1NzgyNjY2OGQ5Ij48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMy44MjAzMTI1IiB5PSIzNi4zNjQwNjI1Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="width: 64px; height: 64px;">
											</a>
										</div>
										<div class="media-body">
										<h4 class="media-heading">Nested media heading</h4>
											Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. 
										</div>
									</div>
								</div>
							</li>
						</ul>
						
					  </div>
					</div>
				</div>
			</div>
		</div>
      </div>
	<?php } else {?>
	<div class="container theme-showcase">
	  	<div class="panel panel-default">
			<div class="panel-body">
				General list of stuff added here.
				<form method='post'>
					<input type='text' name='ProfileID' placeholder='place an id here'>
					<input class='btn btn-primary' type='submit'>
				</form>
			</div>
		</div>
	</div>
	
	<?php }?>
<?php
	require_once("./functions/footer.php");
?>