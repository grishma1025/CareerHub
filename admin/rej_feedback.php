<?php include "header.php";
 include "connect.php"; ?>

 <?php
	$getid=$_GET['reject'];
	$update="update tbl_feedback set feed_status='0' where feed_ID='$getid'";
	$query=mysqli_query($connection,$update) or die('Error in update product->'.mysqli_error($connection));
	
	if($query)
	{
	?>
	<script>alert("Successfully rejected feedback!");
	window.location.href="feedback.php";
	</script>
	<?php
	}
	?>		
       
	