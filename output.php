<?php

include 'session.php';

if(!isset($_SESSION['name'])){
echo "<p> Acess denied";

}else{
	include 'Navbar.php';

$con = mysqli_connect("localhost", "root", "") or die ("we have failed to connect");

mysqli_select_db ($con, "mapro");

$result = mysqli_query($con, "SELECT * FROM users");

while ($row = mysqli_fetch_array($result)){


	echo "<center>".$row['id']."<br/>".$row['name']." <br/>".$row['email']."<br/> ".$row['password'];

	echo "<p>";







}

mysqli_close($con);

}

?>