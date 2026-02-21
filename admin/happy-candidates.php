<?php
include("header.php");
include("connect.php");
?>

	<body style="padding:10px;">
	<h1  style="padding:10px;">Happy Candidates</h1>



	<div class="row">
	<div class="box col-md-12">
    <div class="box-inner">


    <div class="box-content">
    <div style="overflow:auto"> 
  
	<table class="table table-bordered bootstrap-datatable">
    <thead>
    <tr>
	    <th class="text-center">Sr. No</th>
        <th class="text-center">Name</th>
		<th class="text-center">Details</th>
		<th class="text-center">Position </th>
		<th class="text-center">Status </th>
		<th class="text-center">Actions</th>
    </tr>
    </thead>
    <tbody>
	<?php
	$sel="select * from tbl_happycandidate;";
	$q=mysqli_query($connection,$sel);
	while($row=mysqli_fetch_array($q))
	{
	?>
    <tr>
		<td class="text-center"><?php echo $row['id'];?></td>
        <td class="text-center"><?php echo $row['name'];?></td>
		<td class="text-center"><?php echo $row['text'];?></td>
		<td class="text-center"><?php echo $row['pos'];?></td>
		<td class="text-center"><?php echo $row['status'];?></td>
        <td class="text-center">
		
<a href="app_candidate.php?approve=<?php echo $row['id']; ?>" class="btn_approve"> 
<img src="img/approve.png" height="30px" width="30px" data-toggle="tooltip" title="Approve"></a>

<a href="rej_candidate.php?reject=<?php echo $row['id']; ?>"  class="btn_reject">
<img src="img/cancel.png" height="34px" width="34px" data-toggle="tooltip" title="Reject"></a>

<a href="del_candidate.php?delete=<?php echo $row['id']; ?>"  class="btn_delete">												
<img src="img/delete.png" height="30px" width="30px" data-toggle="tooltip" title="Delete"></a>

	</td>
           
   </tr>
   <?php
	}
	?>
    </tbody>
    </table>
    <a class="btn btn-info" href="add_candidate.php"  style="padding:10px;">Add New</a>
	
	</div>
	
    </div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->
