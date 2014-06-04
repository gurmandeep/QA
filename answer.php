<?php 
session_start();
if (isset($_SESSION["id1"]))
{
  $id=$_SESSION["id1"];
 
  include_once "header2.php";
include_once "config.php";
 $con=new connect;

if ($_REQUEST['qstid']) 

{
  
    $a=$_REQUEST['qstid'];
   
  $qry="select * from tbqst where qstcod='$a'";
  $res=mysql_query($qry)or die(mysql_error());
  while ($r=mysql_fetch_row($res))
   {
    echo "<div class=container>";
    echo "<div class=col-md-2>";
    echo "</div>";
    echo "<div class=col-md-8 style=margin-top:20px><h3><a href=answer.php?qstid=$a>Question&nbsp:&nbsp$r[1]</a></h3><br>";
    echo "Description : $r[2]<hr>";
    echo "</div>";
    echo "</div>";
  }
}
?>



<?php 

$a=$_REQUEST["qstid"];
$qry="select * from tbans where ansquecod='$a' ";
$res=mysql_query($qry)or die(mysql_error());
while($r=mysql_fetch_array($res))
{
    echo "<div class=container>";
    echo "<div class=col-md-2></div>";
    echo"<div class=col-md-8>Answer : $r[2]<hr></div>";
    echo "<div class=row>";
    echo "<div class=col-md-8></div>";
    echo "<div class=col-md-3>";
        echo " $r[3]<hr>";
        echo "</div>";

 
echo "</div>";
echo "</div>";

}
 ?>

<form action="" role="form" method="post" name ="f1">
<div class="container">
<div class="row ">
<div class="col-md-offset-2 col-md-6">

 <script type="text/javascript" src="http://js.nicedit.com//nicEdit.js"></script> 
 <script type="text/javascript">
            //<![CDATA[
            bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
            //]]>
        </script>
            <label for="area"></label>
            <textarea rows="7" class="form-control" name="desc" placeholder="Write Answer Here" value="Write Your Description">
            </textarea><br />
<button type="submit" class="btn btn-primary" name="ans" onclick="return area1()">Post Your Answer</button>
            </div>
            </div>

            </div>
</form>
<?php 
echo "<div style=margin-top:19px>";
 echo "</div>";
include_once "footer.php";

 ?>







<?php  }  else { 

  include_once "header.php"; 

if ($_REQUEST['qstid']) {
  
$a=$_REQUEST['qstid'];
echo "<div class=container>";
  $qry="select * from tbqst where qstcod='$a'";
  $res=mysql_query($qry)or die(mysql_error());
  while ($r=mysql_fetch_row($res))
   {
    echo "<div class=well style=margin-top:10px><b><a href=answer.php?qstid=$a>Question:$r[1]</a></b></div>";
    echo "Description : $r[2]<hr>";
    echo "</div>";
  }
}

?>

<div class="container">
  <div class="row">
    <div class="col-md-offset-4 col-md-4">
      <form action="" method="post" role="form">
        <div class="form-group">
    <label for="e1">Email address</label>
      <input type="email" class="form-control" id="eml" name="signeml" placeholder="Enter email" required >
      <label for="pwd">Password</label>
                <input type="password" class="form-control" id="pwd" name="signpass" placeholder="Password" required>
                         
                            
              <button type="submit" class="btn btn-primary" name="in" style="margin-top: 10px">Sign in</button>
            
    </div>
      </form>
    </div>
  </div>
</div>
<?php } ?>


<?php 

// if (isset($_POST["in"])) 
//   { 
//     //
//     include_once "config.php";

//      $con=new connect();
//     // $obj = new clsuser();
//      $usreml=$_POST["signeml"];
//      $usrpwd=$_POST["signpass"];

//      $qry="select * from tbusr where usreml='$usreml' && usrpwd='$usrpwd'";
// $res=mysql_query($qry) or die(mysql_error());
// $count=mysql_num_rows($res);

// if ($count!=0)
//  {
//   // echo "Welcome:";
//   $r=mysql_fetch_assoc($res);
//   $dbuser=$r["usreml"];
//   $dbpass=$r["usrpwd"];
//   $id=$r["usrid"];
//   if ($usreml==$dbuser && $usrpwd==$dbpass) 
//   {
    
//          $_SESSION["id1"]=$id;
   
//           // header("location:your.php");
//   }
//  }
 
//    else
//  {
//   echo "Usrname and Password doesn't match";

// }
//     // $obj->CompareRec();    
// }

 ?>


























<?php  
// include_once "header.php";
// include_once "config.php";
//  $con=new connect;

// if ($_REQUEST['qstid']) {
	
// $a=$_REQUEST['qstid'];
// echo "<div class=container>";
// 	$qry="select * from tbqst where qstcod='$a'";
// 	$res=mysql_query($qry)or die(mysql_error());
// 	while ($r=mysql_fetch_row($res))
// 	 {
// 		echo "<div class=well style=margin-top:10px><b><a href=answer.php?qstid=$a>Question:$r[1]</a></b></div>";
// 		echo "$r[2]<hr>";
//     echo "</div>";
// 	}
// }



?>



<?php 
// $a=$_REQUEST["qstid"];
// $qry="select * from tbans where ansquecod='$a' ";
// $res=mysql_query($qry)or die(mysql_error());
// while($r=mysql_fetch_array($res))

//   echo "$r[2] <hr>";

  ?>
<!-- <form action="" role="form" method="post" name ="f1">
<div class="container">
<div class="row ">
<div class="col-md-offset-2 col-md-6">

 <script type="text/javascript" src="js/nicEdit-latest.js"></script> <script type="text/javascript">
            //<![CDATA[
            bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
            //]]>
        </script>
            <label for="area"></label>
            <textarea rows="7" class="form-control" name="desc" placeholder="Write Answer Here">
            </textarea><br />
<button type="submit" class="btn btn-primary" name="ans" onclick="return area1()">Post Your Answer</button>
            </div>
            </div>

            </div>
</form>

 -->

 <?php 

$qry="select * from tbusr where usrid='$id'";
$res=mysql_query($qry);
while ($r=mysql_fetch_array($res))
 {

 $u=$r[1];
 


}

 ?>


<?php 

if(isset($_REQUEST["qstid"]))
{
    $a=$_REQUEST["qstid"];
}
$id=$_SESSION['id1'];

if (isset($_POST["ans"]))
 {
 	$desc=$_POST["desc"];
        $a=$_REQUEST["qstid"];
	$qry="insert into tbans values('$id','$a','$desc','$u')";

  $qry1=mysql_query("update tbqst set counter = counter + 1 where qstcod=$a");

	
	$res=mysql_query($qry)or die(mysql_error());
	$r=mysql_affected_rows();
	if ($r==1) {
		return true;
	}
else
	return false;



}

 ?>

 

  <?php

 ?>



 <script>
            function area1(){
            	
        var text = document.getElementsByName('desc').value=="";
              console.log(text);

              // if(text = "null"){
                console.log("Please Enter Your Answer");
                return false;
              }
              else{
              	return true;
            }
            </script>
