<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>City Connected</title>

		<!-- JQuery -->
		<!-- Bootstrap -->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="./theme.css">
	</head>

	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">CityConnected</a>
				</div>
				<div class="collapse navbar-collapse" id="home-navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Profile <span class="sr-only">(current)</span></a></li>
						<li><a href="#">City</a></li>
						<li><a href="#">Problem</a></li>
						<li><a href="#">Discussion</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<form class="navbar-form navbar-right">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search">
								</div>
								<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
							</form>
						</li>
					<?php 
						if(isset($_SESSION['CITYCONNECTIONSESSION'])){?><li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">USERNAME_HERE<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Account</a></li>
								<li><a href="#">Settings</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">Logout</a></li>
							</ul>
						</li>
						<?php }else{ ?>
						
						<?php } ?>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav>

<?php