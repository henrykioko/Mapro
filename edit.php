

<?php include 'session.php'; ?>

<html>

<head>
<head/>
<link rel="stylesheet" type="text/css" href="settings.css">
<body>


<h3>Edit User: <?php echo $_REQUEST['names']; ?></h3>

<form enctype="muiltypart/data" method = "post" action = "change.php">

<table border = "0" width = "80%">
<tr>
<td width = "30%">Name:</td>

<td>
<input type="text" name="newname" value="<?php echo $_REQUEST['names']; ?>" 
</td>
</tr>
<tr>
 <td width = "30%">Email:</td>
 <td><input type = "text" name = "newemail" value = "<?php echo $_REQUEST['email']; ?>" </td>
 </tr>
<tr>
<td width = "30%">Password: </td>
<td> <input type = "password" name = "newpassword" value = "<?php echo $_REQUEST['password']; ?>" </td>
</tr>
</table><p>

<strong>change pictutre:</strong>&nbsp<input type="file" name="newupload"><p>

<input type = "submit" value = "Save And Update">
<input type = "hidden" name = "id" value = "<?php echo $_REQUEST ['ids']; ?>">

</form>
</body>
</html>



