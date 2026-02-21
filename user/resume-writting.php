<?php
include("header.php");

?>


    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-color:#d6cdcc;" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h3 class="text-white font-weight-bold">Resume Writing</h3>
            <div class="custom-breadcrumbs">
              <a href="index.php">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Resume writing</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>
      </div>
	  <head>
	  <style>
        .btn {
            width: 100px; /* Adjust the width as needed */
            margin-left: 0; /* Align to the left */
        }
    </style>
	</head>
<?php

if(isset($_POST['btn_submit']))
{

	$nm=$_POST['txt_name'];
	$em=$_POST['txt_email'];
	$no=$_POST['txt_phn'];
	$add=$_POST['txt_add'];
	$gd=$_POST['txt_grad'];
	$pg=$_POST['txt_post-grad'];
	$sk=$_POST['txt_skills'];
	$exp=$_POST['txt_exp'];
	$com=$_POST['txt_com'];
	$pos=$_POST['txt_pos'];
    $ins="insert into tbl_resume values('','$nm','$em','$no','$add','$gd','$pg','$sk','$exp','$com','$pos','1')";
	$q=mysqli_query($con,$ins);
	echo"<script>alert('successfully submitted')</script>";
}

?>
    <section class="site-section">
      <div class="container">

        <div class="row align-items-center mb-5">
          <div class="col-lg-8 mb-4 mb-lg-0">
            <div class="d-flex align-items-center">
              <div>
                <h2>Build your resume!!</h2>
              </div>
            </div>
          </div>
   
        </div>
        <div class="row mb-5">
          <div class="col-lg-12">
            <form class="p-4 p-md-5 border rounded"  method="post">
              <h3 class="text-black mb-5 border-bottom pb-2">Personal Details</h3>
       

              <div class="form-group">
                <label for="email">Name</label>
                <input type="text" class="form-control" name="txt_name" id="name" placeholder="e.g. neha">
              </div>
              <div class="form-group">
                <label for="job-title">Email</label>
                <input type="email" class="form-control" name="txt_email" id="email" placeholder="e.g. neha@gmail.com">
              </div>
              <div class="form-group">
                <label for="job-location">Contact</label>
                <input type="number" class="form-control" name="txt_phn" id="contact" placeholder="e.g. 9876543210">
              </div>
               
			   <div class="form-group">
                  <label class="text-black" for="message">Address</label> 
                  <textarea name="txt_add" id="add" cols="30" rows="7" class="form-control" placeholder="Write you message here..."></textarea>
                </div>
            


              <h3 class="text-black my-5 border-bottom pb-2">Educational Qualification</h3>
              <div class="form-group">
                <label for="company-name">Graduation</label>
                <input type="text" class="form-control" name="txt_grad" id="grad" placeholder="e.g. xyz university">
              </div>

              <div class="form-group">
                <label for="company-tagline">Post Graduation</label>
                <input type="text" class="form-control" name="txt_post-grad" id="post-grad" placeholder="e.g. xyz university">
              </div>

            <div class="form-group">
                  <label class="text-black" for="message">Skills</label> 
                  <textarea name="txt_skills" id="skills" cols="30" rows="7" class="form-control" placeholder="Write you skills here..."></textarea>
                </div>
             
				
               <h3 class="text-black my-5 border-bottom pb-2">Job details</h3>
              
              <div class="form-group">
                <label for="company-website">Work Experience</label>
                <input type="text" class="form-control" name="txt_exp" id="exp" placeholder="e.g. 1 year">
              </div>

              <div class="form-group">
                <label for="company-website-fb">Company Name</label>
                <input type="text" class="form-control" name="txt_com" id="company" placeholder="e.g. Goldman Sachs">
              </div>

 
              <div class="form-group">
                <label for="company-website-tw">Position</label>
                <input type="text" class="form-control" name="txt_pos" id="Position" placeholder="e.g. Software developer">
              </div>

<button type="submit" value="Preview Bill" class="btn btn-primary">Submit</button>
            
          </div>
</form>
         
        </div>
        <div class="row align-items-center mb-5">
          
         
        </div>
      </div>
    </section>
 
  
	 <?php
include("footer.php");
?>