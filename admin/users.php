<?php
include("header.php");
	include("connect.php");
?>

<?php
if(isset($_GET['aid']))
{
	$id=$_GET['aid'];
	$app="update tbl_registration set reg_status=1 where reg_id='$id';";
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
	$rej="update tbl_registration set reg_status=0 where reg_id='$id';";
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
	$app="delete from tbl_registration where reg_id='$id';";
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
        <a><h2><i class="glyphicon glyphicon-wrench"></i> Manage Employees</h2></a>

       
    </div>

    <div class="box-content">
    <div style="overflow:auto"> 

	<table class="table table-striped table-bordered bootstrap-datatable" style="background-color: #fff">
    <thead>
    <tr>
	   <th class="text-center">Sr. No</th>
		<th class="text-center" nowrap> Name </th>
		<th class="text-center" nowrap> Email </th>
		<th class="text-center" nowrap>Address</th>
		<th class="text-center" nowrap>No</th>
		<th class="text-center" nowrap>Status</th>
		<th class="text-center" nowrap>Actions</th>
	
		
		<!-- <th> Nationality</th>
		<th> Address </th>
		<th class="text-center">Actions</th> -->
    </tr>
    </thead>
    <tbody>
	
	<?php
	$sel="select * from tbl_registration";
		$q=mysqli_query($connection,$sel);
	while($r=mysqli_fetch_array($q))
	{
		?>
		
    <tr>
	   <td class="text-center"><?php echo $r['reg_id'];?></td>
	  <td class="text-center"><?php echo $r['reg_name'];?></td>
	  	  <td class="text-center"><?php echo $r['reg_email'];?></td>
		  	  <td class="text-center"><?php echo $r['reg_password'];?></td>
			   <td class="text-center"><?php echo $r['reg_phone'];?></td>
			  	  <td class="text-center"><?php echo $r['reg_status'];?></td>
				    <td class="text-center" >
<a href="app_users.php?approve=<?php echo $r['reg_id'];?>"  class="btn_approve"> <img src="img/approve.png" height="30px" width="30px" data-toggle="tooltip" title="Approve"></a>


<a href="rej_users.php?reject=<?php echo $r['reg_id'];?>" class="btn_reject">
<img src="img/cancel.png" height="34px" width="34px" data-toggle="tooltip" title="Reject"></a>

<a href="del_users.php?delete=<?php echo $r['reg_id'];?>" class="btn_delete">												
<img src="img/delete.png" height="30px" width="30px" data-toggle="tooltip" title="Delete"></a>


	</td>
   
       
    </tr>
	<?php
	}
       ?>    
   
    </tbody>
    </table>