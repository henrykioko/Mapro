<?php 

include 'session.php';
session_start();

if(!isset($_SESSION['name'])){

	echo "Access Denied";
}else{
if (isset($_REQUEST['submit'])){

	$search = $_GET['search'];

	$terms = explode(" ", $search);

	$query ="SELECT * FROM users WHERE ";

   $i=0;
	foreach($terms as $each){
	       
			$i++;

		if($i==1){
			$query .= "name LIKE '%$each%' ";
				
		}else {

			$query .="OR name LIKE '%$each%' ";

		}



	}

	$con = mysqli_connect("localhost", "root", "") or die ("we failed to connect you");

	mysqli_select_db($con, "mapro");

	$query = mysqli_query($con, $query);

	$num = mysqli_num_rows($query);


	if ($num>0 && $search != ""){

		echo "<i>";
		echo "$num results found for $search";
		echo "</i>";

		while($row = mysqli_fetch_assoc($query)){

			$id = $row['id'];
			$name = $row['name'];
			$email = $row['email'];
			$password = $row['password'];
			echo "<center>";
			echo "<br/><h3>name: $name(id:$id)</h3> Email: $email";

		}


	}else{


		echo "No results found";
	}

	mysqli_close($con);


}else{


	echo "please type any word";


}

echo "<center>";
}


	?> 
