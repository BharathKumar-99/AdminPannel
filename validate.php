<?php

session_start ();
include("database.php"); 

if(isset($_REQUEST['login']))
{
$a = $_REQUEST['adminname'];
$b = $_REQUEST['password'];
$retval1=mysqli_select_db($conn,'myexampo_Admin');
$res = mysqli_query($conn,"select* from adminlogin where adminname='$a'and password='$b'");
$result=mysqli_fetch_array($res);
if($result)
{
	
	$_SESSION["login"]="1";
	header("location:index.php");
}
else	
{
	//header("location:login.php?err=1");
	echo "Username or Password Incorrect";
}

}
?>