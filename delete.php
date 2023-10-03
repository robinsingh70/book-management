<?php
$connection = mysqli_connect("localhost", "root","system", "practice");



	$book_id = $_GET["book_id"];
	$query = "DELETE FROM book WHERE book_id = '$book_id'";
	$query_run = mysqli_query($connection,$query);
	if($query_run)
	{
		 echo '<script> alert("data deleted");</script>';
		 header("location:aceess2.php");
	}
	else{
		echo '<script> alert("data not deleted");</script>';
	}
	?>
