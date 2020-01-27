<?php
// we use the variable con to store the access command request to the database
$con = mysqli_connect ("localhost", "root", "") or die ("We are sorry we cant connect you.");

mysqli_select_db($con, "STUDENT");

// declaring the variable per_page to store the number of students to display per every page on the web page
$per_page=6;
$query = mysqli_query($con,"SELECT * FROM users LIMIT 6,6");

$pages_query = mysqli_query($con," SELECT * FROM students ");

$pages = ceil(mysqli_num_rows($pages_query)/$per_page);

$page = (isset($_GET ['page'])) ? (int)$_GET['page']:1;

$start= $page<1? 1:($page -  1)*($per_page);

$query = mysqli_query($con,"SELECT * FROM students LIMIT $start,$per_page");


// creating the table help display the detailsof the students in 
// order

echo "<table width =\" 90%\" align = center border =2>";

echo "<tr><td align = center bgcolor = \"FFFF00\">STUDENTID</td>
<td align = center bgcolor  = \"FFFF00\" >SURNAME</td>
<td  align = center bgcolor  = \"FFFF00\" >OTHERNAMES</td>
<td  align = center bgcolor  = \"FFFF00\" >GENDER</td>
<td  align = center bgcolor = \" FFFF00\" >FEES BALANCE</td></tr>";

// Using a while loop to fetch the contents of the table students
while ($row = mysqli_fetch_assoc($query)){

	$studentid = $row['studentID'];
	$surname= $row['surname'];
	$othernames= $row['othernames'];
	$gender= $row['gender'];
	$fees_balance= $row['fees_balance'];


	echo "<tr>
	<td align = center>
	$studentid
	</td>

	<td> $surname</td> <td>$othernames</td><td>$gender</td><td>$fees_balance</td></tr>" ; 



}


	echo "</table>";


	echo "<br>";

	echo "<center>";

	$prev= $page-1;
$next= $page+1;

if ($page>1){

echo "<a href= 'display.php?page=$prev'>Prev</a>&nbsp";

}

if ($pages >=1){

for ($x=1;$x<=$pages;$x++){

	// making links for other pages

	echo ($x==$page) ? '<b><a href="?page='.$x.'">'.$x. '</a></b>':'<a href="?page='.$x.'">'.$x. '</a>';

	echo "&nbsp";


}

  }
if($page<$pages){
echo "<a href= 'display.php?page=$next'>Next</a>";
}
	echo "</center>";



	mysqli_close($con);
	



?>




