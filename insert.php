<?php
if (isset($_POST['submit'])) {


$mypic=$_FILES['upload']['name'];
$temp=$_FILES['upload']['tmp_name'];
$typearr=explode(".", $mypic);
$type=strtolower("image/".$typearr[1]);



$name = $_POST ['name'];

$email = $_POST['Email'];

$password = $_POST['password'];

$cpassword = $_POST['confirmpassword'];


if ($name && $email && $password && $cpassword){

	#if (preg_match("/^[_\.0-9a-zA-z-]+@([0-9a-zA-z-][0-9a-zA-z-]+\.)+[0-9a-zA-z](2,6)$/i",$email)){

	if(filter_var($email,FILTER_VALIDATE_EMAIL)){

	if (strlen($password) > 3){


	if ($password === $cpassword){



	$con= mysqli_connect("localhost", "root", "") or die ("we couldnt connect!");

	mysqli_select_db($con, "mapro");

	$username = mysqli_query ($con, "SELECT name FROM users WHERE name = '$name'");
	$count = mysqli_num_rows($username);

	$remail = mysqli_query ($con, "SELECT Email FROM users WHERE Email = '$email'");
	$checkemail = mysqli_num_rows ($remail);


if ($checkemail !=0){

	echo "<center>";

	// include ('links.php');

	die ("That email already exists");
	echo "</center>";


}else{	
	


if ($count != 0){

	
	
	
	echo "<p>";

	die ("That name already exists baby");


} else {

	if(($type=="image/jpeg") || ($type=="image/jpg") || ($type=="image/bmp")){

		$directory= "./profiles/$name/images/";
		mkdir($directory, 0777, true);

		move_uploaded_file ($temp, "profiles/$name/images/$mypic");
		include ('Navbar.php');
		echo " what a pretty face<br/><img border= '1' width='170' height='170' src='profiles/$name/images/$mypic'><p>";
		

$passwordmd5=md5($password);
mysqli_query ($con, "INSERT INTO users (name, email, password) values ('$name', '$email', '$passwordmd5')");

$registered = mysqli_affected_rows($con);

echo "You have been registered successfully";

// include "home.php";

header("Refresh:3; url=home.php");



mysqli_close($con);

}else{

	echo "this file has to be a picture boy";
}
}
}

}else {


	echo "passwords have to match";
}
}else{

die ("password too short. Type again");

}
}else{

	echo "please type a valid email meen";
}



}
else {

	echo "you have to register fucker";

}


echo "<center>";

// include ('links.php');

echo "</center>";


}else{
	echo "string";
}
?>