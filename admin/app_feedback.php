<?php include "header.php";
 include "connect.php"; ?> 
 <?php
	$getid=$_GET['approve'];
	$update="update tbl_feedback set feed_status='1' where feed_ID='$getid'";
	$query=mysqli_query($connection,$update) or die('Error in update product->'.mysqli_error($connection));
	
	if($query)
	{
	?>
	<script>alert("Successfully approved feedback!");
	window.location.href="feedback.php";
	</script>
	<?php
	}
	?>		
       
	   
