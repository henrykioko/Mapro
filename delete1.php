

<?php 

include 'Navbar.php';

include 'session.php';

if(!isset($_SESSION['name'])){



echo "something went wrong";

}else{

$con = mysqli_connect ("localhost", "root", "") or die ("We failed to connect you fucker");

mysqli_select_db($con, "jancid");




$result = mysqli_query($con,"SELECT * FROM teninsert WHERE room = '".$_REQUEST['room']." '");


echo "<table width =\" 90%\" align = center border =2>";

echo "<tr><td width = \" 40% \"align = center bgcolor = \"FFFF00\">ROOM</td>

<td width = \" 40%\" align = center bgcolor= \" FFFF00\">NAME</td>


while ($row = mysqli_fetch_array($result)){

	$room = $row['room'];
	$name= $row['name'];


	echo "<tr>
	<td align = center>
					$room
	</td>

	<td> $name</td> </tr>" ; 



}


	echo "</table>";

	mysqli_close($con);


?>

<form  method="POST" action = "delete2.php" >

<p> Are you sure you want to delete this user <p>
<center>
<input type = "submit"  name = "submit" value = "ok" />
</center>
<input type= "hidden" name = "room" value = "<?php echo $_REQUEST['room'];?>" />

</form>


<?php

// include ('links.php');
}

?>

