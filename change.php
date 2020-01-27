<?php
include 'session.php';
if(!isset($_SESSION['name'])){

	echo "Access Denied";
	header("Refresh: 2; url='home.php'");
}else{

$id = $_REQUEST['id'];
$newname = $_REQUEST['newname'];
$newemail = $_REQUEST['newemail'];
$newpassword = md5($_REQUEST['newpassword']);

$con = mysqli_connect ("localhost", "root", "") or die ("we failed you fucker");

mysqli_select_db($con, "mapro");

mysqli_query ($con, "UPGRADE users SET (name, email, password) values('$newname','$newemail','$newpassword') WHERE id = '$id' ");
 

 echo "your values have been updated successfully";

  mysqli_close($con);


 include ("links.php");
}

?>