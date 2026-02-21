<?php include "header.php";
 include "connect.php"; ?>

 <?php
	$getid=$_GET['reject'];
	$update="update tbl_registration set reg_status='0' where reg_id='$getid'";
	$query=mysqli_query($connection,$update) or die('Error in update product->'.mysqli_error($connection));
	
	if($query)
	{
	?>
	<script>alert("Successfully rejected user!");
	window.location.href="users.php";
	</script>
	<?php
	}
	?>		
       
	   
	   
 
    <?php include "footer.php"; ?>
