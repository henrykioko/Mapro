
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php
include 'session.php';


if(!isset($_SESSION['name'])){


	echo  "<p> Access denied";
}else{

include('Navbar.php');

// echo "<b>";

echo "CHOOSE A SUPERMARKET OF YOUR CHOICE";


$con = mysqli_connect ("localhost", "root", "") or die ("We failed to connect you fucker");

mysqli_select_db($con, "mapro");


$per_page=6;
$query = mysqli_query($con,"SELECT * FROM users LIMIT 6,6");

$pages_query = mysqli_query($con," SELECT * FROM USERS ");

$pages = ceil(mysqli_num_rows($pages_query)/$per_page);

$page = (isset($_GET ['page'])) ? (int)$_GET['page']:1;

$start= $page<1? 1:($page -  1)*($per_page);

$query = mysqli_query($con,"SELECT * FROM users LIMIT $start,$per_page");




echo "<table width =\" 90%\" align = center border =2>";

echo "<tr><td width = \" 40% \"align = center bgcolor = \"FFFF00\">ID</td>

<td width = \" 40%\" align = center bgcolor= \" FFFF00\">NAME</td>
<td width = \"40%\" align = center bgcolor  = \"FFFF00\" >EMAIL</td>
<td width = \" 40%\" align = center bgcolor = \" FFFF00\" >PASWORD</td></tr>";


while ($row = mysqli_fetch_assoc($query)){

	$id = $row['id'];
	$name= $row['name'];
	$email= $row['email'];
	$password= $row['password'];


	echo "<tr>
	<td align = center>
					<a href = \"edit.php?id=$id&names=$name&email=$email&password=$password\">$id</a>
	</td>

	<td> $name</td> <td><a href=\"emailsto.php?emails=$email\">$email</td><td>$password</td></tr>" ; 



}



	echo "</table>";

	echo "<br>";
	echo "<center>";

	$prev= $page-1;
 	$next= $page+1;

if ($page>1){

echo "<a href= 'update.php?page=$prev'>Prev</a>&nbsp";

}

if ($pages >=1){

for ($x=1;$x<=$pages;$x++){

	echo ($x==$page) ? '<b><a href="?page='.$x.'">'.$x. '</a></b>':'<a href="?page='.$x.'">'.$x. '</a>';

	echo "&nbsp";


}
}
if($page<$pages){
echo "<a href= 'update.php?page=$next'>Next</a>";
}

echo "</center>";
	mysqli_close($con);


	echo "<br/>";
	echo "<center>";
	
	echo "</center>";
}

?>
</body>
</html>