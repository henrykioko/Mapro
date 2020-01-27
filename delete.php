 
<?php
include 'session.php';


if(!isset($_SESSION['name'])){

	echo "Access Denied";
}else{

include "Navbar.php";

echo "choose an ID to delete";

$con = mysqli_connect ("localhost", "root", "") or die ("We failed to connect you fucker");

mysqli_select_db($con, "jancid");


$per_page=6;
$query = mysqli_query($con,"SELECT * FROM teninsert LIMIT 6,6");

$pages_query = mysqli_query($con," SELECT * FROM teninsert ");

$pages = ceil(mysqli_num_rows($pages_query)/$per_page);

$page = (isset($_GET ['page'])) ? (int)$_GET['page']:1;

$start= $page<1? 1:($page -  1)*($per_page);

$query = mysqli_query($con,"SELECT * FROM teinsert LIMIT $start,$per_page");




echo "<table width =\" 90%\" align = center border =2>";

echo "<tr><td width = \" 40% \"align = center bgcolor = \"FFFF00\">ROOM</td>

<td width = \" 40%\" align = center bgcolor= \" FFFF00\">NAME</td>

while ($row = mysqli_fetch_assoc($query)){

	$room = $row['room'];
	$name= $row['name'];
	


	echo "<tr>
	<td align = center>
					<a href = \"delete1.php?room=$room&names=$name\">$id</a>
	</td>

	<td> $name</td> <td>$room</td></tr>" ; 



}


	echo "</table>";


	echo "<br>";

	echo "<center>";

	$prev= $page-1;
$next= $page+1;

if ($page>1){

echo "<a href= 'delete.php?page=$prev'>Prev</a>&nbsp";

}

if ($pages >=1){

for ($x=1;$x<=$pages;$x++){

	echo ($x==$page) ? '<b><a href="?page='.$x.'">'.$x. '</a></b>':'<a href="?page='.$x.'">'.$x. '</a>';

	echo "&nbsp";


}

  }
if($page<$pages){
echo "<a href= 'delete.php?page=$next'>Next</a>";
}
	echo "</center>";



	mysqli_close($con);
	echo "<center>";


	// include ('links.php');

	echo "</center>";

}

?>



