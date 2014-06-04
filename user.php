<!-- <!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>QA.com</title>
	<script src="js/jquery-1.11.0.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>



	<script >
	$(document).ready(function(){
		$('.dropdown-toggle').dropdown();
	})
	</script>


</head>
<body>

<div CLASS="col-md-12" style="background-color: #294e94">
<div class="container">

	<script src="js/bootstrap.js"></script>

		<div class="col-md-3">
				<a href="user.php"><img src="images/qanew.png" alt="logo" class="img-responsive" height="" width="" style="margin: 20px 20px"/></a>
		</div>


<div class="col-md-offset-2 col-md-7" style="margin-top: 40px">

	<input type="search" class="form-control" placeholder="Search" style="width: 200px; margin-top: 10px; display: inline"/>


	<div class="btn-group navbar-btn">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="display: inline">
			Categories <span class="caret"></span>
		</button>
		<ul class="dropdown-menu" role="menu">
			<li><a href="www.google.com">PHP</a></li>
			<li><a href="#">HTML</a></li>
			 <li><a href="#">CSS</a></li>
			  <li><a href="#">Javascript</a></li>
			   <li><a href="#">Jquery</a></li>
			    <li><a href="#">MySQL</a></li>

		</ul>
	</div>

<div class="btn-group navbar-btn">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="display: inline">
			My Account <span class="caret"></span>
		</button>
		<ul class="dropdown-menu" role="menu">
			
			<li><a href="profile.php">Profile</a></li>
			 <li><a href="#">Change Password</a></li>
			 <li><a href="#">Javascript</a></li>
			   <li><a href="#">Jquery</a></li> 
			   	<li class="divider"></li>
			    <li><a href="index.php">Log Out</a></li>

		</ul>
	</div>


	popup 

	<button class="btn btn-default" data-toggle="modal" data-target=".modal-sm1" id="up">Sign up</button>


	<div class="modal fade modal-sm1"  role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">

			<div class="modal-content">

				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4>Sign up Here</h4>
				</div>
					<div class="modal-body">
						<form role="form" action="index.php" method="post">
							<div class="form-group">
							<label for="e1">Username</label>
								<input type="text" class="form-control" id="t1" name="usr1" placeholder="Enter Username" required >
								
								<label for="e1">Email address</label>
								<input type="email" class="form-control" id="e1" name="eml1" placeholder="Enter email" required >

								<label for="p1">Password</label>
								<input type="password" class="form-control" id="p1" name="pwd1" placeholder="Password" required>
								<label for="p2">Confirm Password</label>
								<input type="password" class="form-control" id="p2" name="pwd2" placeholder="Password" required>
								
							</div>

							<button type="submit" class="btn btn-primary" name="signup" onclick="return pass()">Sign up</button>
						</form>



				</div>
				  </div>

					</div>
					   </div>



<button class="btn btn-default" data-toggle="modal" data-target=".modal-sm2">Sign in</button>
 
<div class="modal fade modal-sm2" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel1" aria-hidden="true">
		<div class="modal-dialog modal-sm">

			<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4>Sign in Here</h4>
				</div>
					<div class="modal-body">
						<form role="form" method="post" action="" >
							<div class="form-group">
								<label for="e1">Email address</label>
								<input type="email" class="form-control" id="eml" name="signeml" placeholder="Enter email" required >

								<label for="pwd">Password</label>
								<input type="password" class="form-control" id="pwd" name="signpass" placeholder="Password" required>
							   
							</div>

							<button type="submit" class="btn btn-primary" name="signin">Sign in</button>
						</form>



				</div>
				  </div>

					</div>
					   </div>


						 </div>
 							 </div>
 
							  </div>
							 
								  </body>
									 </html> -->

<?php 

include_once "class.php";

include_once "config.php";
 $con=new connect;

session_start();
$id2=$_SESSION["id1"];
// echo "$id2";
if (isset($_SESSION["id1"])) 
{

include_once "header2.php";
include_once "content.php";
include_once "footer.php";

}
else
{
	include_once "header.php";
	echo "<div class=contianer>";
	echo "<div class=col-md-4></div>";
	echo "<div class=col-md-4>";
	echo "<div class='alert alert-danger' style=margin-top:50px>";
	echo "<center>Please Login";
	echo "</div>";
	echo "</div>";
	echo "</div>";
	}
 ?>
	


