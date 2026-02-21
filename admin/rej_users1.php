<?php include "header.php";
 include "connect.php"; ?>

 <?php
	$getid=$_GET['reject'];
	$update="update tbl_registration_employers set status='0' where id='$getid'";
	$query=mysqli_query($connection,$update) or die('Error in update product->'.mysqli_error($connection));
	
	if($query)
	{
	?>
	<script>alert("Successfully rejected Employer!");
	window.location.href="users1.php";
	</script>
	<?php
	}
	?>		
       
	   
	   
 
    <?php include "footer.php"; ?>
