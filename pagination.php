<?php
include 'Navbar.php';
// session_start();
include 'session.php';
if(!isset($_SESSION['name'])){

	echo "Access denied";
}else{

$con = mysqli_connect("localhost", "root" ,"") or die ("We were unable to connect you");

mysqli_select_db($con,"mapro");

$per_page=6;
$query = mysqli_query($con,"SELECT * FROM users LIMIT 6,6");

$pages_query = mysqli_query($con," SELECT * FROM USERS ");

$pages = ceil(mysqli_num_rows($pages_query)/$per_page);

$page = (isset($_GET ['page'])) ? (int)$_GET['page']:1;

$start= $page<1? 1:($page -  1)*($per_page);

$query = mysqli_query($con,"SELECT * FROM users LIMIT $start,$per_page");

while ($query_row = mysqli_fetch_assoc($query)){


	echo $query_row['name']."<br/>";
}

$prev= $page-1;
$next= $page+1;

if ($page>1){

echo "<a href= 'pagination.php?page=$prev'>Prev</a>&nbsp";

}

if ($pages >=1){

for ($x=1;$x<=$pages;$x++){

	echo ($x==$page) ? '<b><a href="?page='.$x.'">'.$x. '</a></b>':'<a href="?page='.$x.'">'.$x. '</a>';

	echo "&nbsp";


}



}/*else{
	echo "<strong>";
	echo "End of the list boy";
	echo "</strong>";*/


if($page<$pages){
echo "<a href= 'pagination.php?page=$next'>Next</a>";
}
}

?>