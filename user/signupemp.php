<?php
include("header.php");
?>
    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-color:#d6cdcc;" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h3 class="text-white font-weight-bold">Sign Up as Employer</h3>
            <div class="custom-breadcrumbs">
              <a href="index.php">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Sign Up</strong></span>
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
	$pw=$_POST['txt_pw'];
	$ph=$_POST['txt_phoneno'];
	$com=$_POST['txt_com'];
	
	
	$ins="insert into tbl_registration_employers values('','$nm','$em','$pw','$ph','$com','1')";
	$q=mysqli_query($con,$ins);
	echo"<script>alert('successfully submitted');window.location.href = 'loginemp.php'; // Redirect to login page</script>";
}

?>


<!-- container -->
	<div class="container">
				<div class="row">
					<div class="col-md-8">
					<br/>
						<h3 class="section-title">Sign Up</h3>
						
						
					  
		<!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->
		<form name="sentMessage" id="contactForm" method="POST" novalidate> 
		
		<div class="control-group">
		<div class="controls">
		<p style="color: black;">Name
		<input type="text" name="txt_name" class="form-control" 
		 id="name" required
		data-validation-required-message="Please enter your name" />
		<p class="help-block"></p>
		</div>
		</div> 	
		<div class="control-group">
		<div class="controls">
		<p style="color: black;">Email
		<input type="email" name="txt_email" class="form-control"  
		id="email" required
		data-validation-required-message="Please enter your email" />
		</div>
		</div> 
			
		<div class="control-group">
		<div class="controls">
		<p style="color: black;">Company Name
		<input type="text" name="txt_com" class="form-control"  
		id="email" required
		data-validation-required-message="Please enter your email" />
		</div>
		</div> 
		<div class="control-group">
		<div class="controls">
		<p style="color: black;">Contact
		<input type="text" name="txt_phoneno" class="form-control" 
		 id="phoneno" required
		data-validation-required-message="Please enter your phone number" />
		<p class="help-block"></p>
		</div>
		</div> 	
		
		<div class="control-group">
		<div class="controls">
		<p style="color: black;">Password
		<input type="text" name="txt_pw" class="form-control" 
		 id="pw" required
		data-validation-required-message="Please Enter password" />
		<p class="help-block"></p>
		</div>
		</div> 	
			
		
		<div id="success"> </div> <!-- For success/fail messages -->
		<button type="submit" name="btn_submit" class="btn btn-primary pull-right">Submit</button><br />
		</form>
		
		
		
		
		<br/> 
		
		
		Already registered? 
		<a href="loginemp.php">Sign In</a>
					</div>
					<br/>
					
				</div>
			</div>
	 <?php
include("footer.php");
?>