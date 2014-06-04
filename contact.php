<?php
include_once "config.php";
$con=new connect();
session_start();
if (isset($_SESSION["id1"]))
 { 
  
  include_once "header2.php";
    ?>

    <div class="container">
    <div class="row">
        <ul class="nav nav-tabs nav-justified">
            <li ><a href="user.php">Question</a></li>
            <li  class="active"><a href="frequently.php">Top Question</a></li>
            <li><a href="unans.php">Unanswered</a></li>
            <li><a href="your.php">Ask Here</a></li>
        </ul>

    </div>
    
    </div>
<?php } else 
{
  include_once "header.php";?>

  <div class="container">
    <div class="row">
        <ul class="nav nav-tabs nav-justified">
            <li ><a href="index.php">Question</a></li>
            <li><a href="frequently.php">Top Question</a></li>
            <li><a href="unans.php">Unanswered</a></li>
            <li><a href="your.php">Ask Here</a></li>
        </ul>

    </div>
    
    </div>

<?php } ?>

 



<div class="container">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>" style="margin-top : 20px">
  Name: <input type="text" name="from" class="form-control" required><br>
  Subject: <input type="text" name="subject" class="form-control" required><br>
  Message: <textarea rows="10" cols="40" name="message" class="form-control" required></textarea><br>
  <input type="submit" name="submit" value="Submit Feedback" class="btn btn-primary">
  </form>
  </div>
</div>


  
  <?php 
   // the user has submitted the form
  // Check if the "from" input field is filled out
  if (isset($_POST["from"])) {
    $from = $_POST["from"]; // sender
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    // message lines should not exceed 70 characters (PHP rule), so wrap it
    $message = wordwrap($message, 70);
    // send mail
    mail("singh.gurmandeep@live.com",$subject,$message,"From: $from\n");
    echo "<center>Thank you for sending us feedback";
  }

?>

<?php 
echo "<div style=margin-top:19px>";
 echo "</div>";include_once "footer.php" ?>