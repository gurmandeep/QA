<?php 

include_once "config.php";
 $con=new connect();

error_reporting(0);
 class clsuser {
  
 
 
    public $usrcod,$usreml,$usrpwd;
     
     function SaveRec() 
     {
      $con=new connect();
         
         $qry="insert into tbusr values('null','$this->usreml','$this->usrpwd')";  
       $res=  mysql_query($qry)or die(mysql_error());
       $d=  mysql_affected_rows();
       if($d==1)
        return true;
           
        

       else {
        return false;
           
       }
       }

       
         function CompareRec()
         {
          $con=new connect();
          $qry="select * from tbusr where usrnam='$this->usreml' && usrpwd='$this->usrpwd'";
$res=mysql_query($qry) or die(mysql_error());
$count=mysql_num_rows($res);

if ($count==1)
 {
  echo "Welcome:";
 }
   else
 {
  echo "Not Login";

}

           }
}
      

     

 
    
     
//class clsusr
//{
//    public $usrcod,$usreml,$usrpwd,$usrexpcod,$usrrol;
//    
//    function save_rec()
//    {
//        $qry="call insusr('$this->usrcod','$this->usreml','$this->usrpwd','$this->usrespcod','$this->usrrol')";  
//        $res=  mysql_query($qry);
//        $d=  mysql_affected_rows();
//        if($d==1)
//            return TRUE;
//        else {
//            return FALSE;
//        }
//        mysql_close();
//    }
//    function update_rec()
//    {
//        $qry="call upusr('$this->usrcod','$this->usreml','$this->usrpwd','$this->usrexpcod','$this->usrrol')";
//        $res=  mysql_query($qry);
//        $d=  mysql_affected_rows();
//        if($d==1)
//            return TRUE;
//        else {
//            return FALSE;
//        }
//        mysql_close();
//    }
//    
//    function del_rec()
//    {
//        $qry="call delusr('$this->usrcod')";
//        $res=  mysql_query($qry);
//        $d=  mysql_affected_rows();
//        if($d==1)
//            return TRUE;
//        else {
//            return FALSE;
//        }
//        mysql_close();
//    }
//    
//    function find_rec()
//    {
//        $qry="call findcod('$this->usrcod')";
//        $res=mysql_qry($qry);
//        if($d==1)
//            return TRUE;
//        else {
//            return FALSE;
//        }
//        mysql_close();
//    }
//    
//    function display_rec()
//    {
//        $qry="call dispusr()";
//        $res=  mysql_query($qry);
//        $objarr=array();
//        $i=0;
//        while ($r=  mysql_fetch_array($res))
//        {
//            $objarr[$i]=$r;
//            $i++;
//        }
//        mysql_close();
//        return $objarr;
//    }


  ?>