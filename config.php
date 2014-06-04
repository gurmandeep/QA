<?php 

define ("server","localhost");
define("uname","root");
define("upass", "");
define("dname", "qa");

class connect
{
	function __construct()
	{
		mysql_connect(server,uname,upass);
        mysql_select_db(dname);
	}
}
 ?>