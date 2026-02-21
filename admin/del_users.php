<?php include "header.php";
 include "connect.php"; ?>
 <?php
 if(isset($_POST['btn_submit']))
 {
	 $count=0;
	 $nm=$_POST['txt_name'];
	 if($nm=="")
	 {
		 $err_name="enter name";
		 $count++;
	 }
 }
 ?>

 <?php
 
 if(isset($_POST['btn_submit']) && $count==0)
 {
	$getid=$_GET['delete'];
	$delete="delete from tbl_registration where reg_id='$getid' ";
	
	$query=mysqli_query($connection,$delete) or die('Error in delete product->'.mysqli_error($connection));
	
	if($query)
	{
	?>
	<script>alert("Successfully deleted user!");
	window.location.href="users.php";
	</script>
	<?php
	}
}
?>

        

    
			
	<?php
	$getid=$_GET['delete'];
	$sel="select * from tbl_registration where reg_id='$getid';";
	$q=mysqli_query($connection,$sel);
	$data=mysqli_fetch_assoc($q);
	mysqli_free_result($q);
	?>		
            <div class="box-content">
                <form name="frm_pro" enctype="multipart/form-data" method="post">
                    	
					<div class="form-group">
                        <label for="exampleInputEmail1">UserName</label>
                        <input type="text" max="100" min="1" name="txt_name" class="form-control" id="exampleInputEmail1"  placeholder="User Name" value="<?php echo $data['reg_name'] ?>">
						<strong><span style="color:#FF0000;"></span></strong>
                    </div>
								
<button class="btn btn-primary btn-sm" type="submit" name="btn_submit">delete
</button>
    </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->

    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

    <!-- Ad, you can remove it -->
    
    <!-- Ad ends -->

    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>
<style>
.select
{
	border:#D6D6D6 solid 2px;
	border-radius:3px;
}
</style>

    <?php include "footer.php"; ?>