<?php
include("header.php");
?>
  <section class="section-hero overlay inner-page bg-image" style="background-color:#d6cdcc;" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h3 class="text-white font-weight-bold">Feedback</h3>
            <div class="custom-breadcrumbs">
              <a href="index.php">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Feedback</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php

if(isset($_POST['btn_submit']))
{
	$nm=$_POST['txt_name'];
	$em=$_POST['txt_email'];
	$no=$_POST['txt_phn'];
	$msg=$_POST['txt_msg'];
    $ins="insert into tbl_feedback values('','$nm','$em','$no','$msg','1')";
	$q=mysqli_query($con,$ins);
	echo"<script>alert('successfully submitted')</script>";
}

?>

	<!-- container -->
	
    <section class="site-section" id="next-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <form method="post" class="">

              <div class="row form-group">
                 <div class="col-md-12">
                  <label class="text-black" for="fname"> Name</label>
                  <input type="text" id="fname" name="txt_name" class="form-control">
                </div>
                </div>
				
				<div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" name="txt_email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject">Phone</label> 
                  <input type="subject" id="subject" name="txt_phn" class="form-control">
                </div>
				</div>

             

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea name="txt_msg" id="message" cols="30" rows="7" class="form-control" placeholder="Write your Feedback here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" name="btn_submit" value="Send Message" class="btn btn-primary btn-md text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-lg-5 ml-auto">
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">507, RK Prime 2 150ft Rind road, Rajkot, Gujarat.</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+91 9876543210</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">careerhub@gmail.com</a></p>

            </div>
          </div>
        </div>
      </div>
    </section>

	<!-- /container -->
	
<?php
include("footer.php");
?>
