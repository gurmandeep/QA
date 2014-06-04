<?php 

include_once "class.php";
session_start();
$id= $_SESSION["id1"];

if (isset($_SESSION["id1"]))
 {
	
	include_once "header2.php";

	?>
<div class="container">
<div class="row">
<div class="col-md-offset-4 col-md-4">
<form action="" method="post" style="margin-top:40px" return >
	<label for="old">Old Password</label>
     <input type="password" name="old" id="old" class="form-control" required>
     <label for="new">New Password</label>
     <input type="password" name="new" class="form-control" required>
     <label for="confrm">confirm Password</label>
     <input type="password" name="confrm" class="form-control" required>
     <button type="submit" class="btn btn-primary" style="margin-top: 10px" name="change">Change Password</button>
     </form>
</div>
</div>
</div>
	<?php }else echo "Please Login"; ?>
	<br><br><br><br><br><br><br>

	<?php include_once "footer.php"; ?>

	<?php 

       include_once "config.php";
       $con=new connect();
       $qry="select * from tbusr where usrid='$id'";
       $res=mysql_query($qry);
       while ($r=mysql_fetch_array($res))
        {
       	    $usrpwd=$r[2];
       	    // echo "$usrpwd";
       	    
       }
if (isset($_POST["change"] ))
 {
	$old=$_POST["old"];
	$new=$_POST["new"];
	$confrm=$_POST["confrm"];
			if ($old==$usrpwd && $new==$confrm)
			 {
				$qry="update tbusr set usrpwd='$new' where usrid='$id'";
				$res=mysql_query($qry);
				echo "<div class=container>";
				echo "<div class=col-md-4></div>";
				echo "<div class=col-md-5>";
				echo "<div class='alert alert-success' style=margin-top:10px><center>Password Changed Successfully</div>";
				echo "</div>";
				echo "</div>";
				return true;
			}

			elseif($old!=$usrpwd)
			{   
				echo "<div class=container>";
				echo "<div class=col-md-4></div>";
				echo "<div class=col-md-4>";
				echo "<div class='alert alert-danger' style=margin-top:10px><center>Old Password is not Correct !!</div>";
				echo "</div>";
				echo "</div>";
				return false;
			}
			else{
				echo "<div class=container>";
				echo "<div class=col-md-4></div>";
				echo "<div class=col-md-5>";
			echo "<div class='alert alert-danger' style=margin-top:10px><center>New password and Confirm Password are not same !!</div>";
			echo "</div>";
			echo "</div>";
			     
			          return false;
			     }
	}
	 ?>


	 <?php 
         // include_once "footer.php";    
	  ?>