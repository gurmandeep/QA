<?php 
include_once "config.php";
$con=new connect();
session_start();
if(isset($_SESSION['id1']))
{
	include_once "header2.php";
	?>

    <div class="container">
    <div class="row ">
        <ul class="nav nav-tabs nav-justified">
            <li><a href="user.php">Question</a></li>
            <li  ><a href="frequently.php">Top Questions</a></li>
            <li  ><a href="unans.php">Unanswered</a></li>
            <li><a href="your.php">Ask Here</a></li>
        </ul>

    </div>
    
    </div>

</div>
<?php } else  {include_once "header.php"  ?>
<div class="container">
    <div class="row ">
        <ul class="nav nav-tabs nav-justified">
            <li><a href="index.php">Question</a></li>
            <li  ><a href="frequently.php">Top Questions</a></li>
            <li  ><a href="unans.php">Unanswered</a></li>
            <li><a href="your.php">Ask Here</a></li>
        </ul>

    </div>
    
    </div>

</div>
<?php } ?>

<?php  
$qry="select * from tbqst where qstcat='javascript'";
$res=mysql_query($qry)or die(mysql_error());
while ($r=mysql_fetch_row($res)) {
	echo "<div class=container>";
	echo "<div class=col-md-8>";
	echo "<div style=margin-top:50px;margin-left:200px>";
    echo "<h5><b><a href=answer.php?qstid=$r[0]>Question:$r[1]</a></b></h5><br><hr> ";    
     $_SESSION['id']=$r[0];
    echo "</div>";
    echo "</div>";
    echo "</div>";

}

 ?>

