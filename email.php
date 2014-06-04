<?php 
$host="localhost";
$name="root";
$pwd="";

$link=mysql_connect($host,$name,$pwd);
mysql_select_db("hello",$link);
session_start();

$a=$_SESSION['ss'];
echo "$a";


	$qry="select * from tbuser where uname='$a' ";

	$res=mysql_query($qry) or die(mysql_error());
	$r=mysql_num_rows($res);
	if ($r!=0) {

		$rows=mysql_fetch_assoc($res) ;
		$dbuser=$rows["uname"];
		$dbpwd=$rows["upass"];
		if ($a==$dbuser) 
		{
		  echo "login successful";
		}
		else
			echo 'check username and password';
	}
	// if ($r==1) {
	// 	echo "hello";

	// }
	// else
	// 	echo "bye";

 ?>