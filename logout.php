<?php 

session_start();

$expire= time()-86400;
setcookie('mapro',$_SESSION['name'],$expire);

session_destroy();

echo "You are logged out";
// include 'Navbar.php';

header("Refresh:1; url=home.php");

?>