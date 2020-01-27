<?php
if(!isset($_POST['submit'])){

	header("Refresh:5; url=home.php");

	echo "something went wrong men";
}else{

include 'session.php';

include "Navibar.php";

$con = mysqli_connect("localhost", "root", "") or die ("we failed to connect you fucker");

mysqli_select_db($con,"jancid");

mysqli_query($con, "DELETE FROM teninsert WHERE room ='".$_REQUEST['room']." '" ) or die (mysqli_error($con));


echo $_REQUEST['room'];
echo "<P>";
echo "you have evacuated the room";

mysqli_close($con);

echo "<center>";
}

// include ('links.php'); 


?>
