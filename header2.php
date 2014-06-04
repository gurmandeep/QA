<?php 
 error_reporting(E_ERROR | E_PARSE);
include_once "config.php";
 $con=new connect;

session_start();
$id2=$_SESSION["id1"];
// echo "$id2";
if (isset($_SESSION["id1"])) 


$qry="select * from tbusr where usrid='$id2'";
$res=mysql_query($qry);
while ($r=mysql_fetch_array($res))
 {
// echo "<div class=well>Username : $r[1]</div>";




 ?>
<!doctype html>
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
			<li><a href="php.php">PHP</a></li>
			<li><a href="html.php">HTML</a></li>
			 <li><a href="css.php">CSS</a></li>
			  <li><a href="javascript.php">Javascript</a></li>
			   <li><a href="jquery.php">Jquery</a></li>
			    <li><a href="mysql.php">MySQL</a></li>

		</ul>
	</div>

<div class="btn-group navbar-btn">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="display: inline">
			My Account <span class="caret"></span>
		</button>
		<ul class="dropdown-menu" role="menu">
			
			<li><a href="profile.php"><?php echo "$r[1]"; ?></a></li>
			 <li><a href="changepass.php">Change Password</a></li>
			 <!--  <li><a href="#">Javascript</a></li>
			   <li><a href="#">Jquery</a></li> -->
			   	<li class="divider"></li>
			    <li><a href="index.php">Log Out</a></li>

		</ul>
	</div>

</div>
 							 </div>
 
							  </div>
							 
								  </body>
									 </html>
 <?php } ?>