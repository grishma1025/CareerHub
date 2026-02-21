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
	$delete="delete from tbl_happycandidate where id='$getid' ";
	
	$query=mysqli_query($connection,$delete) or die('Error in delete Candidate->'.mysqli_error($connection));
	
	if($query)
	{
	?>
	<script>alert("Successfully deleted candidate!");
	window.location.href="happy-candidates.php";
	</script>
	<?php
	}
}
?>

        

    
			
	<?php
	$getid=$_GET['delete'];
	$sel="select * from tbl_happycandidate where id='$getid';";
	$q=mysqli_query($connection,$sel);
	$data=mysqli_fetch_assoc($q);
	mysqli_free_result($q);
	?>		
            <div class="box-content">
                <form name="frm_pro" enctype="multipart/form-data" method="post">
                    	
					<div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" max="100" min="1" name="txt_name" class="form-control" id="exampleInputEmail1"  placeholder="User Name" value="<?php echo $data['name'] ?>">
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

    
<style>
.select
{
	border:#D6D6D6 solid 2px;
	border-radius:3px;
}
</style>

    <?php include "footer.php"; ?>