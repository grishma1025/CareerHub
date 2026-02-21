<?php include "header.php";
 include "connect.php"; ?>

 <?php
	$getid=$_GET['reject'];
	$update="update tbl_company set status='0' where id='$getid'";
	$query=mysqli_query($connection,$update) or die('Error in update product->'.mysqli_error($connection));
	
	if($query)
	{
	?>
	<script>alert("Successfully rejected company!");
	window.location.href="view_company.php";
	</script>
	<?php
	}
	?>		
       
	   
	   
 
    <?php include "footer.php"; ?>
