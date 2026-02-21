<?php
include("header.php");
	include("connect.php");
?>

<?php
if(isset($_GET['aid']))
{
	$id=$_GET['aid'];
	$app="update tbl_feedback set feed_status=1 where feed_ID='$id';";
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
	$rej="update tbl_feedback set feed_status=0 where feed_ID='$id';";
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
	$app="delete from tbl_feedback where feed_ID='$id';";
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
        <a><h2><i class="glyphicon glyphicon-wrench"></i> Manage Feedback</h2></a>

       
    </div>

    <div class="box-content">
    <div style="overflow:auto"> 
  
	<table class="table table-bordered bootstrap-datatable">
    <thead>
    <tr>
	     <th class="text-center">Sr. No</th>
        <th class="text-center"> Name </th>
		<th class="text-center">Email</th>
			<th class="text-center">Phone</th>
				<th class="text-center">Feedback</th>
        <th class="text-center"> Status </th>
		<th class="text-center">Actions</th>
    </tr>
    </thead>
    <tbody>
	<?php 
	$sel="select * from tbl_feedback";
	$q=mysqli_query($connection,$sel);
	while($row=mysqli_fetch_array($q))
	{
		?>
    <tr>
	     <td class="text-center"><?php echo $row['feed_ID'];?></td>
        <td class="text-center"><?php echo $row['feed_name'];?></td>

		<td class="text-center"><?php echo $row['feed_email'];?></td>
        <td class="text-center"><?php echo $row['feed_phone'];?></td>
           <td class="text-center"><?php echo $row['feed_feedback'];?></td>
		   <td class="text-center"><?php echo $row['feed_status'];?></td>
        <td class="text-center" >
<a href="app_feedback.php?approve=<?php echo $row['feed_ID'];?>"  class="btn_approve"> <img src="img/approve.png" height="30px" width="30px" data-toggle="tooltip" title="Approve"></a>

<a href="rej_feedback.php?reject=<?php echo $row['feed_ID'];?>" class="btn_reject"><img src="img/cancel.png" height="34px" width="34px" data-toggle="tooltip" title="Reject"></a>

<a href="del_feedback.php?delete=<?php echo $row['feed_ID'];?>" class="btn_delete"><img src="img/delete.png" height="30px" width="30px" data-toggle="tooltip" title="Delete"></a>


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