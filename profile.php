
<?php 

include_once "class.php";
session_start();
$id= $_SESSION["id1"];

if (isset($_SESSION["id1"]))
 
	
	include_once "header2.php";


	$qry="select * from tbusr where usrid='$id'";

     $res=mysql_query($qry);

 ($r=mysql_fetch_array($res)); 

	// echo "<div class=container>";
	// echo "<div class=col-md-2>";
	// echo "</div>";
	// echo "<div class=col-md-2>";
	// // echo "<div class=jumbotron>";
	// echo "<img src=$r[4] width=150px height=150px style=margin-top:10px>";
	// echo "<input type=file name=img style=margin-top:3px>";
	// echo "<input type=submit name=upload value=upload image>";

	// echo "</div>";
	// echo "<div class=col-md-3 style=margin-top:20px;margin-left:50px>";
	// echo "<p>Name  : $r[1]<br></p>";
	// echo "<p>Email : $r[3]<br></p>";
	// echo "Submitted Answers :$c[0] ";
	// echo "</div>";
	// echo "</div>";

	
?>

<form action="" method="post" enctype="multipart/form-data">
<div class="container">

	<div class="col-md-2">
	
	</div>
	<div class="col-md-2">
		<img src=<?php echo "$r[4]"; ?> alt="" width="150px" height="150px" style="margin-top:30px">
		<input type="file" name="upload">
		<input type="submit" value="upload image" class="btn btn-primary" style="margin: 10px 8px" required>
	</div>
	<?php 
	if (!isset($_REQUEST['url'])) 
	{
		?>
	<div class="col-md-1"></div>
	<div class="col-md-3" style="margin-top : 30px"> 
     <p>Name &nbsp &nbsp &nbsp &nbsp &nbsp <?php echo "$r[1]"; ?></p>
     <p>Email &nbsp &nbsp &nbsp &nbsp &nbsp <?php echo "$r[3]"; ?>  </p>
     <p>Website &nbsp &nbsp &nbsp <?php echo "$r[5]"; ?> </p>
      <p>Location &nbsp &nbsp &nbsp<?php echo "$r[6]"; ?> </p>
       <p>Age &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<?php echo "$r[7]"; ?> </p>
      <?php echo "<a href='profile.php?url=$r[0]' style=margin-left:150px>Edit</a>" ;?>

	</div>
	</div> <hr>

	<!--Submitted -->
<?php 
$qry=mysql_query("select count(anscod) from tbans where anscod = '$id' ");
while ($r=mysql_fetch_array($qry)) 
{
	

 ?>
	<div class="container">
		<div class="col-md-3"></div>
		<div class="col-md-2">
			<h4 style="margin-top: -10px">Submitted</h4><br>
			<h2 style="font-family:open sans;margin-left: 20px; margin-top: -20px">  <?php echo "$r[0]"; ?></h2>

		</div>
		<?php } ?>

		<?php 

         $qry1=mysql_query("select anscount from tbusr where usrid = '$id' ");
       while ($s=mysql_fetch_array($qry1)) 
      {

	 
     
               
		 ?>
		
        <div class="col-md-1"></div>
        <div class="col-md-3">
        	<h4 style="margin-top: -10px">Asked</h4>
        	<h2 style="font-family:open sans;margin-left: 12px; margin-top: -2px">  <?php echo "$s[0]"; ?></h2>

        </div>
	</div><br><br><br>

<?php  }?>
<?php   include_once 'footer.php'; ?>
	<?php } ?>


<?php if (isset($_REQUEST['url']))
 {
?>
<div class="col-md-1" ></div>
	<div class="col-md-3" style="margin-top : 30px"> 
	Name<input type="text" name="nm" class="form-control" required><br>
	Email <input type="email" name="email" class="form-control" required><br>
	Website <input type="url" name="web" class="form-control"><br>
	Location <input type="text" name="loc" class="form-control"><br>
	Age <input type="text" name="age" class="form-control"><br>
	<input type="submit" name="save" value="Save Profile " class="btn btn-primary" style="margin-left: 150px">
	
	</div>
	</form>

<?php } ?>
<?php 
if (isset($_POST["save"]))
 {
	$name = $_POST['nm'];
	$email = $_POST['email'];
	$web = $_POST['web'];
	$loc = $_POST['loc'];
	$age = $_POST['age'];
   
     $qry = mysql_query("update tbusr set usrnam = '$name' , usreml = '$email' , website = '$web' , location = '$loc' , birthday = '$age' where usrid = '$id'")or die(mysql_error());
     header("location:profile.php");


}

 ?>















<!--Submitted -->
<?php 
// $qry=mysql_query("select count(anscod) from tbans where anscod = '$id' ");
// while ($r=mysql_fetch_array($qry)) 
// {
	

 ?>
	<!-- <div class="container">
		<div class="col-md-3"></div>
		<div class="col-md-2">
			<h4 style="margin-top: -10px">Submitted</h4><br>
			<h2 style="font-family:digits;margin-left: 20px; margin-top: -20px">  <?php echo "$r[0]"; ?></h2>

		</div> -->
		  <?php  ?>

		<?php 

       //   $qry1=mysql_query("select anscount from tbusr where usrid = '$id' ");
       // while ($s=mysql_fetch_array($qry1)) 
      // {

	 
     
               
		 ?>
		
       <!--  <div class="col-md-1"></div>
        <div class="col-md-3">
        	<h4 style="margin-top: -10px">Asked</h4>
        	<h2 style="font-family:digits;margin-left: 12px; margin-top: -2px">  <?php echo "$s[0]"; ?></h2>

        </div>
	</div> -->

<?php  ?>

<?php 

$name = $_FILES["upload"] ["name"];
$size = $_FILES["upload"] ["size"];
$type = $_FILES["upload"] ["type"];
$tmp_name = $_FILES["upload"] ["tmp_name"];
$extension = strtolower(substr($name, strpos($name, '.') + 1));

if (isset($name))
{
 if(!empty($name))

{
if($extension=='jpg' || $extension=="jpeg" || $extension=="png")
 {	
 	$location='images/';
 	$a = $location.$name;
    
 if(move_uploaded_file($tmp_name,$location.$name))
 {
 
 }

$qry="UPDATE tbusr SET img =  '$a' WHERE usrid =  $id ";
    $res=mysql_query($qry);

}
 else
 {
 	echo " <center><div class='alert alert-danger'><center>Please Choose Image</div> ";
 }
}
}


 ?>

<?php 

  $qry="UPDATE tbusr SET img =  '$a' WHERE usrid =  '$id1'";
    $res=mysql_query($qry);                                        

 ?>

 <?php 
  include_once 'config.php';
  $con=new connect();
$qry="select * from tbans where anscod='$id'";
$res=mysql_query($qry)or die(mysql_error());
$r=mysql_fetch_row($res);
 {
 // echo "$r[1]";
}
  ?>

