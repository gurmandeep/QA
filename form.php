<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>form</title><link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
</head>
<body>
<div class="container">
<form role="form" action="">
    <div class="form-group">
        <label for="InputEmail1">Email address</label>
        <input type="email" class="form-control" id="InputEmail1" placeholder="Enter email" style="width: 300px">

        <label for="InputPassword1">Password</label>
        <input type="password" class="form-control" id="InputPassword1" placeholder="Password" style="width: 300px">
    </div>

    <button type="submit" class="btn btn-default" name="b1">Submit</button>
</form>

</div>
</body>
</html>


 <?php
 session_start();

if (isset($_POST["b1"])) {


$n=array();
$n[]="gurman";
$n[]="deep";
$n[]="singh";

 print_r($n);

 $_SESSION["s"]=$n;
header("location:1.php");

}
 ?>