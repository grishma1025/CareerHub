<?php
include("header.php");
include("connect.php");
?>

	<body style="padding:10px;">
	<h1  style="padding:10px;"> Companies</h1>
<a class="btn btn-info" href="add_company.php"  style="padding:10px;">Add New</a>


	<div class="row">
	<div class="box col-md-12">
    <div class="box-inner">
  <br/>

    <div class="box-content">
    <div style="overflow:auto"> 
  
	<table class="table table-bordered bootstrap-datatable">
    <thead>
    <tr>
	    <th class="text-center">Sr. No</th>
        <th class="text-center">Name</th>
		<th class="text-center">photo</th>
		<th class="text-center">Tagline </th>
		<th class="text-center">Details</th>
		<th class="text-center">Languages</th>
		<th class="text-center">Status </th>
		<th class="text-center">Actions</th>
    </tr>
    </thead>
    <tbody>
	<?php
	$sel="select * from tbl_company;";
	$q=mysqli_query($connection,$sel);
	while($row=mysqli_fetch_array($q))
	{
	?>
    <tr>
		<td class="text-center"><?php echo $row['id'];?></td>
        <td class="text-center"><?php echo $row['name'];?></td>
		<td class="text-center"><?php echo $row['file'];?></td>
		<td class="text-center"><?php echo $row['tagline'];?></td>
		<td class="text-center"><?php echo $row['detail'];?></td>
		<td class="text-center"><?php echo $row['technology'];?></td>
		<td class="text-center"><?php echo $row['status'];?></td>
        <td class="text-center">
		
<a href="app_company.php?approve=<?php echo $row['id']; ?>" class="btn_approve"> 
<img src="img/approve.png" height="30px" width="30px" data-toggle="tooltip" title="Approve"></a>

<a href="rej_company.php?reject=<?php echo $row['id']; ?>"  class="btn_reject">
<img src="img/cancel.png" height="34px" width="34px" data-toggle="tooltip" title="Reject"></a>

<a href="del_company.php?delete=<?php echo $row['id']; ?>"  class="btn_delete">												
<img src="img/delete.png" height="30px" width="30px" data-toggle="tooltip" title="Delete"></a>

	</td>
           
   </tr>
   <?php
	}
	?>
    </tbody>
    </table>
    
	
	</div>
	
    </div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->

