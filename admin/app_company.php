<?php include "header.php";
 include "connect.php"; ?>

 <?php
	$getid=$_GET['approve'];
	$update="update tbl_company set status='1' where id='$getid'";
	$query=mysqli_query($connection,$update) or die('Error in update product->'.mysqli_error($connection));
	
	if($query)
	{
	?>
	<script>alert("Successfully approved company!");
	window.location.href="view_company.php";
	</script>
	<?php
	}
	?>		
       
	   
	   
 
    <?php include "footer.php"; ?>
