<?php 
session_start();
if (isset($_SESSION["id1"])) 
{
	include_once "header2.php";

 ?>

 <div class="container">
    <div class="row ">
        <ul class="nav nav-tabs nav-justified">
            <li ><a href="user.php">Question</a></li>
            <li  ><a href="frequently.php">Top Questions</a></li>
            <li><a href="unans.php">Unanswered</a></li>
            <li><a href="your.php">Ask Here</a></li>
        </ul>

    </div>
    

    </div>




 <?php 
 }
 else
 {
 	include_once "header.php";
 
 
  ?>

<div class="container">
    <div class="row ">
        <ul class="nav nav-tabs nav-justified">
            <li ><a href="index.php">Question</a></li>
            <li  ><a href="frequently.php">Top Questions</a></li>
            <li><a href="unans.php">Unanswered</a></li>
            <li><a href="your.php">Ask Here</a></li>
        </ul>

    </div>
    
    </div>

</div>

  <?php } ?>

<div class="container">
  <div class="col-md-offset-2 col-md-8">
  <div class="jumbotron" style="margin-top: 50px">

        <p><li>In this User can ask any question regarding categories and they will get answer of that which they want</p></li><br>
        <p><li>The question which have highest comments that will come on the top of the Question</p></li>
        </div>
    </div>
    </div>

    <?php include_once "footer.php"; ?>

    