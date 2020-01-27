
<html>

<title> MY form </title>

</head>

<body>

<form  method = "post" action = "costpricing.php" />
<table  border = "0" width = "60%">

<tr><td  width = 10%> Price per product: </td><td> <input type ="text" name = "price" maxlength = "30"/></td></tr><br/>
<tr><td width = 10% > No of items: </td><td> <input type ="text" name = "number" maxlength = "20"/> </td></tr><br/>
</table>
<p>



<input type = "submit" name = "submit" value = "Total" />


 

</form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {


$price = $_POST ['price'];

$number = $_POST['number'];

$total= $number * $price;

echo "The total price is"."&nbsp";
echo $total;
}



 ?>




