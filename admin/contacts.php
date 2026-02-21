
	<?php
	include("header.php");
	include("connect.php");
if(isset($_GET['aid']))
{
	$id=$_GET['aid'];
	$app="update tbl_contact set con_status=1 where con_id='$id';";
	$q=mysqli_query($connection,$app);
	?>
	<script>
	alert("approve successfully");
	</script>
	<?php
}
?>		
<!-- reject-------->
<?php
if(isset($_GET['rid']))
{
	$id=$_GET['rid'];
	$rej="update tbl_contact set con_status=0 where con_id='$id';";
	$q=mysqli_query($connection,$rej);
	?>
	<script>
	alert("reject successfully");
	</script>
	<?php
}
?>
<!-- delete------------>
<?php
if(isset($_GET['did']))
{
	$id=$_GET['did'];
	$app="delete from tbl_contact where con_id='$id';";
	$q=mysqli_query($connection,$app);
	?>
	<script>
	alert("delete successfully");
	</script>
	<?php
}
?>      
	
	

	<body style="padding:10px;">


	
	<div class="row">
	<div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <a><h2><i class="glyphicon glyphicon-wrench"></i> Manage contact</h2></a>

       
    </div>

    <div class="box-content">
    <div style="overflow:auto"> 
  
	<table class="table table-bordered bootstrap-datatable">
    <thead>
    <tr>
	     <th class="text-center">Sr. No</th>
        <th class="text-center">First Name </th>
		<th class="text-center">Last Name</th>
				<th class="text-center">Email</th>
			<th class="text-center">subject</th>
				<th class="text-center">Message</th>
        <th class="text-center"> Status </th>
		<th class="text-center">Actions</th>
    </tr>
    </thead>
    <tbody>
	<?php 
	$sel="select * from tbl_contact";
	$q=mysqli_query($connection,$sel);
	while($row=mysqli_fetch_array($q))
	{
		?>
    <tr>
	     <td class="text-center"><?php echo $row['con_id'];?></td>
        <td class="text-center"><?php echo $row['con_fname'];?></td>
		 <td class="text-center"><?php echo $row['con_lname'];?></td>
		<td class="text-center"><?php echo $row['con_email'];?></td>
        <td class="text-center"><?php echo $row['con_subject'];?></td>
           <td class="text-center"><?php echo $row['con_message'];?></td>
		   <td class="text-center"><?php echo $row['con_status'];?></td>
        <td class="text-center" >
<a href="app_contact.php?approve=<?php echo $row['con_id'];?>"  class="btn_approve"> <img src="img/approve.png" height="30px" width="30px" data-toggle="tooltip" title="Approve"></a>


<a href="rej_contact.php?reject=<?php echo $row['con_id'];?>" class="btn_reject">
<img src="img/cancel.png" height="34px" width="34px" data-toggle="tooltip" title="Reject"></a>

<a href="del_contact.php?delete=<?php echo $row['con_id'];?>" class="btn_delete">												
<img src="img/delete.png" height="30px" width="30px" data-toggle="tooltip" title="Delete"></a>


	</td>
      </tr>
	<?php
	}
	?>
	
   
    </tbody>
    </table>
    

    <!-- Ad ends -->
</main>
    </div>
</body>
	
	
	
	</html>