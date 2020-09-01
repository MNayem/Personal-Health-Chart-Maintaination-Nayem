<?php 
	include("includes/connect.php");
	
	$date = $_GET['delete'];
	
	$delete_query = "DELETE FROM health_chart WHERE  'Date' = '$date'";
	
	if(mysqli_query($con,$delete_query))
	{
		/*echo "<script>window.open('index.php?deleted=A Post has been deleted 
			successfully !!!','_self')</script>";*/
			echo "<script>window.open('index.php?deleted=A Post has been deleted !!!','_self')</script>";
	}
?>