<?php
include("header.php");
include("connect.php");
?>


<?php
$count=0;

if(isset($_POST['btn_submit']) )
{
$old=$_POST['txt_old_pass'];
if($old=="")
{
$err_old_pass="Enter Old Password";
$count++;
}
$new=$_POST['txt_new_pass'];
if($new=="")
{
$err_new_pass="Enter New Password";
$count++;
}
$conf=$_POST['txt_cpass'];
if($conf=="")
{
$err_cpass="Enter Confirm Password";
$count++;
}
if($new != $conf)
{
	
	$not ="Password And Confirm Password does not Match!!!";
	$count++;
}


}
?>

<?php 
if(isset($_POST['btn_submit'])&& $count==0 )
{
	
	$nm=$_SESSION['login_user_name'];
	$sel="select login_password from tbl_admin_login where login_name='$nm'";
	$q=mysqli_query($connection,$sel);
	$row=mysqli_fetch_array($q);
	
if($row['login_password']==$_POST['txt_old_pass'])
		{
			$update = "update tbl_admin_login set login_password='$conf' where login_name='$nm' ";
			$insert = mysqli_query($connection,$update);
			
			?>
			<script>alert("Password Change Successfully..!!");
				window.location.href="home.php";
			</script>
			<?php
			
		}
		else
		{
			echo "<script>alert('Old Password Does Not Match..!!');</script>";	
		}
}		

?>

	<body style="padding:10;">

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Change Password</h2>

              
                
            </div>
            <div class="box-content">
                <form role="form" method="post" enctype="multipart/form-data">
				  <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text"  class="form-control" id="exampleInputEmail1" >
						<span style="color:#FF0000;"><?php echo $err_old_pass; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Old Password</label>
                        <input type="password" name="txt_old_pass" class="form-control" id="exampleInputEmail1" >
						<span style="color:#FF0000;"><?php echo $err_old_pass; ?></span>
                    </div>
										<div class="form-group">
                        <label for="exampleInputEmail1">New Password</label>
						<input type="password" class="form-control" name="txt_new_pass" id="exampleInputEmail1">
                        					   
					   <span style="color:#FF0000;"><?php echo $err_new_pass; ?></span>
					   
                    </div>
				                        <div class="form-group">
                        <label for="exampleInputEmail1">Confirm Password </label>
                        <input type="password" class="form-control" id="exampleInputEmail1" name="txt_cpass">
						<span style="color:#FF0000;"><?php echo $err_cpass; ?>
						<?php echo $not; ?>
						</span>
                    </div>
				    <button class="btn btn-primary btn-sm" type="submit" name="btn_submit">Change
</button>
<a class="btn btn-primary btn-sm" href="home.php" name="btn_back">Back to List </a>
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