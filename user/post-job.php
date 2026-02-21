<?php
include("header.php");
?>

    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-color:#d6cdcc;" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h3 class="text-white font-weight-bold">Post A Job</h3>
            <div class="custom-breadcrumbs">
              <a href="index.php">Home</a> <span class="mx-2 slash">/</span>
             
              <span class="text-white"><strong>Post a Job</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

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

	$til=$_POST['til'];
	$sal=$_POST['sal'];
	$typ=$_POST['typ'];
	$exp=$_POST['exp'];
	$desc=$_POST['desc'];
	$sk=$_POST['sk'];
	$nm=$_POST['nm'];
	$loc=$_POST['loc'];
	$com_des=$_POST['com_des'];


    $ins="insert into tbl_job values('','$til','$sal','$typ','$exp','$desc','$sk','$nm','$loc','$com_des','1')";
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
                <h2>Post A Job</h2>
              </div>
            </div>
          </div>
          
        </div>
        <div class="row mb-5">
          <div class="col-lg-12">
            <form class="p-4 p-md-5 border rounded" method="post">
              <h3 class="text-black mb-5 border-bottom pb-2">Job Details</h3>
              
             

              
              <div class="form-group">
                <label for="job-title">Job Title</label>
                <input type="text" class="form-control" name="til" id="job-title" placeholder="Product Designer">
              </div>
              <div class="form-group">
                <label for="job-location">Salary Range</label>
                <input type="number" class="form-control" name="sal" id="job-location" placeholder="e.g. New York">
              </div>
				
              <div class="form-group">
                <label for="job-type">Job Type</label>
                <select class="selectpicker border rounded" name="typ" id="job-type" data-style="btn-black" data-width="100%" data-live-search="true" title="Select Job Type">
                  <option>Part Time</option>
                  <option>Full Time</option>
                </select>
              </div>
			  <div class="form-group">
                <label for="job-location">Experience level</label>
                <input type="number" class="form-control" name="exp" id="job-location" placeholder="e.g. New York">
              </div>
				<div class="form-group">
                  <label class="text-black" for="message">Job description</label> 
                  <textarea name="desc" id="add" cols="30" rows="7" class="form-control" placeholder="Write you message here..."></textarea>
                </div>
				<div class="form-group">
                  <label class="text-black" for="message">Skills and Qualification</label> 
                  <textarea name="sk" id="add" cols="30" rows="7" class="form-control" placeholder="Write you message here..."></textarea>
                </div>
				<h3 class="text-black my-5 border-bottom pb-2">Company Details</h3>
              <div class="form-group">
                <label for="company-name">Company Name</label>
                <input type="text" class="form-control" name="nm" id="company-name" placeholder="e.g. New York">
              </div>
				  <div class="form-group">
                <label for="job-title">Location</label>
                <input type="text" class="form-control" name="loc" id="job-title" placeholder="Product Designer">
              </div>
			  <div class="form-group">
                  <label class="text-black" for="message">Company description</label> 
                  <textarea name="com_des" id="add" cols="30" rows="7" class="form-control" placeholder="Write you message here..."></textarea>
                </div>
				
<button type="submit" value="Preview Bill" class="btn btn-primary">Submit</button>
            </form>
          </div>

         
        </div>
        <div class="row align-items-center mb-5">
          
          
        </div>
      </div>
    </section>
 <?php
include("footer.php");
?>
    