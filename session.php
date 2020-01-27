<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Navbar.css">
	<title></title>
</head>
<body>


<?php 
// $date= time();
date_default_timezone_set('Africa/Nairobi');
$date= date('F d Y, g:i:s a');
echo 'Today is &nbsp '.$date.'<p>';

session_start();

if(isset($_SESSION['name'])|| isset($_COOKIE['jancid'])){

	if(!isset($_SESSION['name']) && isset($_COOKIE['jancid'])){

		$_SESSION['name']= $_COOKIE['jancid'];
	}


if(!isset($_SESSION['name'])){

	echo "Session not available";

}else{

	$dir= "profiles/".$_SESSION['name']."/images";
	if(!file_exists($dir)){
	}else{

	$open= opendir($dir);
	while(($file=readdir($open))!=false){
		if($file!="." && $file!=".." && $file!="Thumbs.db"){


			echo "<img id='img'  src='$dir/$file'>";
		}



	}
}
	echo "<strong>";
	echo "<b>".$_SESSION['name']." <br/><a href='logout.php'>Logout</a>";
	echo "</strong>";
}

}else{

	echo "Access denied";
}


?>

</body>
</html>