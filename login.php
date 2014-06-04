<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
</head>
<body>
    <form action="login.php" method="post">
    <table border="5">
        <tr>
       <td>Username : <input type="text" name="t1">
        </td>
        <tr>
        <td>
         Password:   <input type="password" name="p1">
        </td></tr>
        <td colspan="2">
        <input type="submit" name="b1">
        <input type="submit" name="b2" value="login">
        </td>
        </tr>
        
    </table>
    </form>
</body>
</html>


<?php 

$host="localhost";
$name="root";
$pwd="";

$link=mysql_connect($host,$name,$pwd);
mysql_select_db("hello",$link);

if(isset($_POST["b1"]))
{
    $u=$_POST["t1"];
    $p=$_POST["p1"];
    $qry="insert into tbuser values('$u','$p')";
    $res=  mysql_query($qry)or die (mysql_error());
    if( mysql_affected_rows()==1)
    {
        echo "connected";
    }
}

session_start();
if(isset($_POST["b2"]))
{
    $u=$_POST["t1"];
    $_SESSION["ss"]=$u;    
    header("location:email.php");
    
 }
 
  

   
    ?>

 