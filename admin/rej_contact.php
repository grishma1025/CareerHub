<?php include "header.php";
 include "connect.php";
?>

 <?php
	$getid=$_GET['reject'];
	$update="update tbl_contact set con_status='0' where con_id='$getid'";
	$query=mysqli_query($connection,$update) or die('Error in update product->'.mysqli_error($connection));
	
	if($query)
	{
	?>
	<script>alert("Successfully rejected contact!");
	window.location.href="contacts.php";
	</script>
	<?php
	}
	?>		
