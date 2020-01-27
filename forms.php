<html>

<head><link rel="stylesheet" type="text/css" href="settings.css">
<title> MY form</title>

</head>

<body>

<form ENCTYPE="multipart/form-data" method = "post" action = "insert.php" />
<table  border = "0" width = "60%">

<tr><td  width = 10%> Name: </td><td> <input type ="text" name = "name" maxlength = "30"/></td></tr><br/>
<tr><td width = 10% > Email: </td><td> <input type ="text" name = "Email" maxlength = "20"/> </td></tr><br/>
<tr>
<td width = 10%> Password:</td>
<td> 
<input type ="password" name ="password" maxlength = "10"/>
</td>
</tr>
<tr>
<td width = "10%">Confirm Password</td>
<td><input type = "password" name = "confirmpassword" maxlength = "10"/>
</td>
</tr>
<!-- <input type="hidden" name="MAX_FILE_SIZE" size="100000"/> -->

</br>
</table>

<p><strong id="ter">Please choose a picture to upload</strong><p>
<p>
<input type="file" name="upload">
</p>

<p>


<input type = "submit" name = "submit" value = "Register" />

<p>

<!-- <?php# include ("links.php"); ?> -->
 

</form>
</body>
</html> 