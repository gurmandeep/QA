
<script type="text/javascript" src="nicEdit.js"></script>
<?php
session_start();
if(isset($_SESSION["id1"]))
{
  $id=$_SESSION['id1'];
include_once "header2.php";
  ?>
  <div class="container">
    <div class="row">
        <ul class="nav nav-tabs nav-justified">
            <li ><a href="user.php">Question</a></li>
            <li><a href="frequently.php">Top Question</a></li>
            <li><a href="unans.php">Unanswered</a></li>
            <li class="active"><a href="your.php">Ask Here</a></li>
        </ul>

    </div>
    <div class="row">
        <form role="form" method="post" action="your.php" name="theForm">
        <div class="col-md-offset-2 col-md-6">
            <label for="title" style="margin-top: 5px">Title</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="What's Your Question"  required style="margin-top: 10px"/>

            
<script type="text/javascript" src="http://js.nicedit.com//nicEdit.js"></script>
<script>

  bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>
            <label for="area"></label>
            <textarea name="area1" rows="7" class="form-control" id="area" required >
            </textarea><br />

            <div class="well">
               <label class="checkbox-inline">
  <input type="checkbox" id="inlineCheckbox1" value="php" name="php[]"> PHP
</label>
<label class="checkbox-inline">
  <input type="checkbox" id="inlineCheckbox2" value="html" name="html[]"> HTML
</label>
<label class="checkbox-inline">
  <input type="checkbox" id="inlineCheckbox3" value="css" name="css[]"> CSS
  </label>
  <label class="checkbox-inline">
  <input type="checkbox" id="inlineCheckbox4" value="javascript" name="javascript[]"> Javascript
  </label>
  <label class="checkbox-inline">
  <input type="checkbox" id="inlineCheckbox5" value="jquery" name="jquery[]"> Jquery
  </label>
  <label class="checkbox-inline">
  <input type="checkbox" id="inlineCheckbox6" value="mysql" name="mysql[]"> Mysql
  </label>

            </div>
            <button type="submit" id="question" class="btn btn-primary" name="pst" onsubmit="return chkbox()">Post Your Question</button>
    </div> 
        </form>
    </div>
</div>

<?php 
}
else{
include_once "header.php";
?>
<div class="container">
<div class="row">
<div class="col-md-offset-4 col-md-4">
  <form action="" method="post" action="your.php" style="margin-top: 20px">
  <div class="form-group">
    <label for="e1">Email address</label>
      <input type="email" class="form-control" id="eml" name="signeml" placeholder="Enter email" required >
      <label for="pwd">Password</label>
                <input type="password" class="form-control" id="pwd" name="signpass" placeholder="Password" required>
                         
                            
              <button type="submit" class="btn btn-primary" name="in" style="margin-top: 10px" onclick="window.location.reload()">Sign in</button>
            
    </div>
    </form> 
  
</div>
</div>
</div>
<?php  }?>

<?php 

if (isset($_POST["in"])) 
  { 
    //
    
     include_once "config.php";
     $con=new connect();
    // $obj = new clsuser();
     $usreml=$_POST["signeml"];
     $usrpwd=$_POST["signpass"];

     $qry="select * from tbusr where usreml='$usreml' && usrpwd='$usrpwd'";
$res=mysql_query($qry) or die(mysql_error());
$count=mysql_num_rows($res);

if ($count!=0)
 {
  // echo "Welcome:";
  $r=mysql_fetch_assoc($res);
  $dbuser=$r["usreml"];
  $dbpass=$r["usrpwd"];
  $id=$r["usrid"];
  if ($usreml==$dbuser && $usrpwd==$dbpass) 
  {
    
         $_SESSION["id1"]=$id;
   
          // header("location:your.php");
  }
 }
 
   else
 {
  echo "Usrname and Password doesn't match";

}
    // $obj->CompareRec();    
}
 ?>

<!--another contianer-->
<!-- <div class="container">
    <div class="row">
        <ul class="nav nav-tabs nav-justified">
            <li ><a href="index.php">Question</a></li>
            <li><a href="frequently.php">Top Question</a></li>
            <li class="active"><a href="your.php">Ask Here</a></li>
        </ul>

    </div>
    <div class="row">
        <form role="form" method="post" action="" name="theForm">
        <div class="col-md-offset-2 col-md-6">
            <label for="title" style="margin-top: 5px">Title</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="What's Your Question"  required style="margin-top: 10px"/>

            <script type="text/javascript" src="js/nicEdit-latest.js"></script> <script type="text/javascript">
            //<![CDATA[
            bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
            //]]>
        </script>
            <label for="area"></label>
            <textarea name="area1" rows="7" class="form-control" id="area" required >
            </textarea><br />
            <div class="well">
               <label class="checkbox-inline">
  <input type="checkbox" id="inlineCheckbox1" value="option1" name="chk[]"> PHP
</label>
<label class="checkbox-inline">
  <input type="checkbox" id="inlineCheckbox2" value="option2" name="chk[]"> HTML
</label>
<label class="checkbox-inline">
  <input type="checkbox" id="inlineCheckbox3" value="option3" name="chk[]"> CSS
  </label>
  <label class="checkbox-inline">
  <input type="checkbox" id="inlineCheckbox4" value="option4" name="chk[]"> Javascript
  </label>
  <label class="checkbox-inline">
  <input type="checkbox" id="inlineCheckbox5" value="option5" name="chk[]"> Jquery
  </label>
  <label class="checkbox-inline">
  <input type="checkbox" id="inlineCheckbox6" value="option5" name="chk[]"> Mysql
  </label>

            </div>
            <button type="submit" id="question" class="btn btn-primary" name="pst" onsubmit="return chkbox()">Post Your Question</button>
    </div> 
        </form>
    </div>

</div> -->


<?php   

if (isset($_POST["pst"])) 
{
  include_once "config.php";
  $con=new connect();
  $title=$_POST["title"];
  $area=$_POST["area1"];
  $p=$_POST["php"];
  $counter =0;

  foreach ($p as $php) {
    
  
  $qry="insert into tbqst values('null','$title','$area','null','null','$php','$counter')";

  $qry1=mysql_query("update tbusr set anscount = anscount + 1 where usrid = $id");

  $res=mysql_query($qry)or die(mysql_error());




//   if (mysql_affected_rows()==1)
//    {
//     echo "inserted";
//   }
// else
//   echo "not inserted";

}}
if (isset($_POST["pst"])) 
{
  $j=$_POST["javascript"];
  foreach ($j as $javascript)
   {
    $qry="insert into tbqst values('null','$title','$area','null','null','$javascript','$counter')";
    $qry1=mysql_query("update tbusr set anscount = anscount + 1 where usrid = $id");
  $res=mysql_query($qry)or die(mysql_error());
  }
}

if (isset($_POST["pst"])) 
{
  $h=$_POST["html"];
  foreach ($h as $html)
   {
    $qry="insert into tbqst values('null','$title','$area','null','null','$html','$counter')";
    $qry1=mysql_query("update tbusr set anscount = anscount + 1 where usrid = $id");
  $res=mysql_query($qry)or die(mysql_error());
  }
}

if (isset($_POST["pst"])) 
{
  $c=$_POST["css"];
  foreach ($c as $css)
   {
    $qry="insert into tbqst values('null','$title','$area','null','null','$css','$counter')";
    $qry1=mysql_query("update tbusr set anscount = anscount + 1 where usrid = $id");
  $res=mysql_query($qry)or die(mysql_error());
  }
}


if (isset($_POST["pst"])) 
{
  $jq=$_POST["jquery"];
  foreach ($jq as $jquery)
   {
    $qry="insert into tbqst values('null','$title','$area','null','null','$jquery','$counter')";
    $qry1=mysql_query("update tbusr set anscount = anscount + 1 where usrid = $id");
  $res=mysql_query($qry)or die(mysql_error());
  }
}

if (isset($_POST["pst"])) 
{
  $m=$_POST["mysql"];
  foreach ($m as $mysql)
   {
    $qry="insert into tbqst values('null','$title','$area','null','null','$mysql','$counter')";
    $qry1=mysql_query("update tbusr set anscount = anscount + 1 where usrid = $id");
  $res=mysql_query($qry)or die(mysql_error());
  }
}
 ?>

<?php 
echo "<div style=margin-top:19px>";
 echo "</div>";
include_once "footer.php";
 ?>


 <script type="text/javascript">
$("#question").click(function(){
    if($('input[type=checkbox]:checked').length == 0)
    {
        alert('Please select atleast one checkbox');
        return false;
    }
});
 </script>

