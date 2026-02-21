<?php
include("header.php");
?>

    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-color:#d6cdcc;" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h3 class="text-white font-weight-bold">Contact Us</h3>
            <div class="custom-breadcrumbs">
              <a href="index.php">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Contact Us</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    </div>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14768.626948907708!2d70.76163906141969!3d22.272051815064867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959cbca9acdf025%3A0x3dea2d60788c9343!2sRK%20Prime%202!5e0!3m2!1sen!2sin!4v1731425860223!5m2!1sen!2sin" frameborder="1" allowfullscreen></iframe>
      </div>

      <?php

if(isset($_POST['btn_submit']))
{
	$fnm=$_POST['txt_fname'];
  $lnm=$_POST['txt_lname'];
	$em=$_POST['txt_email'];
	$sub=$_POST['txt_sub'];
	$msg=$_POST['txt_msg'];
  $ins="insert into tbl_contact values('','$fnm','$lnm','$em','$sub','$msg','1')";
	$q=mysqli_query($con,$ins);
	echo"<script>alert('successfully submitted')</script>";
}

?>

    <section class="site-section" id="next-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <form method="post" class="">

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname"> Name</label>
                  <input type="text" id="fname" name="txt_fname" class="form-control">
                </div>

                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" name="txt_lname" class="form-control">
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
                  <label class="text-black" for="subject">Subject</label> 
                  <input type="subject" id="subject" name="txt_sub" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea name="txt_msg" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
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

    
  <?php
include("footer.php");
?>