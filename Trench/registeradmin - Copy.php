<?php
require 'config.php';
$uid=$_POST['uname'];
$pwd=$_POST['pass'];
$mobile=$_POST['mob'];
$fname=$_POST['fullname'];
$addr=$_POST['add'];
$enbl=$_POST['en'];
$qry="insert into lo n_master values('$uid','$pwd',$mobile,'$fname','$addr',$enbl)";
@mysql_query($qry)or die(mysql_error());
        

if(mysql_affected_rows()>0)
{
    header( "location:regadmin.php?message=yes");
}
else
{
    
    header( "location:regadmin.php?message=no");
}

?>