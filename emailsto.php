<!DOCTYPE html>
<html>
<head>
<!-- <link rel="stylesheet" type="text/css" href="Navbar.css"> -->
	<title></title>
</head>
<body>


<form method="POST" action="">

<table border="1" width="25%">
<tr>
<td width="10%">TO</td><td><input type="text" name="to" size="20" value="<?php echo $_REQUEST['emails']; ?>"></td>
</tr>
<tr>
<td width="10%">SUBJECT</td><td><input type="text" name="subject" size="20"></td>
</tr>
<tr>
<td width="10%">MESSAGE</td><td><textarea name="message" cols="30" rows="3"></textarea></td>
</tr>

</table>
<p>
<input type="submit" name="submit" value="Send Email">
<p>
	



</form>
</body>
</html>

<?php 

if(isset($_REQUEST['submit'])){

	$to=$_REQUEST['to'];
	$subject=$_REQUEST['subject'];
	$body=$_REQUEST['message'];
	$from="admin@onclicktutorials.com";
	$headers="From: $from";

	if($to && $subject && $body){

		mail($to,$subject,$body,$headers);
		echo "email has been send";
		header ("Refresh: 3; url=home.php");

	}else{

		echo "Fill all the fields boy";
	}


}
// else{
// 	echo "i dont know what o tell you fucker";
// }

 ?>