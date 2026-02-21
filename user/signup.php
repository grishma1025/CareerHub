<?php
include("header.php");
?>

<!-- HOME -->
<section class="section-hero overlay inner-page bg-image" style="background-color:#d6cdcc;" id="home-section">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h3 class="text-white font-weight-bold">Employee Sign Up</h3>
        <div class="custom-breadcrumbs">
          <a href="index.php">Home</a> <span class="mx-2 slash">/</span>
          <span class="text-white"><strong>Sign Up</strong></span>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
if (isset($_POST['btn_submit'])) {
    $nm = $_POST['txt_name'];
    $em = $_POST['txt_email'];
    $pw = $_POST['txt_pw'];
    $ph = $_POST['txt_phoneno'];

    // Insert data into the database
    $ins = "INSERT INTO tbl_registration VALUES('', '$nm', '$em', '$pw', '$ph', '1')";
    $q = mysqli_query($con, $ins);

    if ($q) {
        // On successful insertion, redirect to login page after a successful alert
        echo "<script>
                alert('Successfully submitted');
                window.location.href = 'login.php'; // Redirect to login page
              </script>";
    } else {
        // If there's an error with the database query, you could handle that here.
        echo "<script>alert('Error: Could not register. Please try again.');</script>";
    }
}
?>

<!-- container -->
<div class="container">
    <div class="row">
        <div class="col-md-8">
        <br/>
            <h3 class="section-title">Sign Up</h3>
            
            <form name="sentMessage" id="contactForm" method="POST" novalidate>
                <div class="control-group">
                    <div class="controls">
                        <p style="color: black;">Name
                        <input type="text" name="txt_name" class="form-control" id="name" required data-validation-required-message="Please enter your name" />
                        <p class="help-block"></p>
                    </div>
                </div>
                
                <div class="control-group">
                    <div class="controls">
                        <p style="color: black;">Email
                        <input type="email" name="txt_email" class="form-control" id="email" required data-validation-required-message="Please enter your email" />
                    </div>
                </div>
                
                <div class="control-group">
                    <div class="controls">
                        <p style="color: black;">Contact
                        <input type="text" name="txt_phoneno" class="form-control" id="phoneno" required data-validation-required-message="Please enter your phone number" />
                        <p class="help-block"></p>
                    </div>
                </div>
                
                <div class="control-group">
                    <div class="controls">
                        <p style="color: black;">Password
                        <input type="text" name="txt_pw" class="form-control" id="pw" required data-validation-required-message="Please Enter password" />
                        <p class="help-block"></p>
                    </div>
                </div>

                <div id="success"></div> <!-- For success/fail messages -->
                <button type="submit" name="btn_submit" class="btn btn-primary pull-right">Submit</button><br />
            </form>

            <br/>
            Already registered? 
            <a href="login.php">Sign In</a>
        </div>
        <br/>
    </div>
</div>

<?php
include("footer.php");
?>
