<?php include "header.php";
 include "connect.php"; ?>

 <?php
	$getid=$_GET['approve'];
	$update="update tbl_registration set reg_status='1' where reg_id='$getid'";
	$query=mysqli_query($connection,$update) or die('Error in update product->'.mysqli_error($connection));
	
	if($query)
	{
	?>
	<script>alert("Successfully approved user!");
	window.location.href="users.php";
	</script>
	<?php
	}
	?>		
       
	   
	   
 
    <?php include "footer.php"; ?>
