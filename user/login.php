<?php
ob_start();
include("header.php");
error_reporting(0);
session_start();
?>

<section class="section-hero overlay inner-page bg-image" style="background-color:#d6cdcc;" id="home-section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h3 class="text-white font-weight-bold">Employee Login</h3>
                <div class="custom-breadcrumbs">
                    <a href="#">Home</a> <span class="mx-2 slash">/</span>
                    <span class="text-white"><strong>Log In</strong></span>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$err_msg = '';
$count = 0;

if (isset($_POST['btn_submit'])) {
    $uname = $_POST['txt_email'];
    if ($uname == "") {
        $err_uname = "Enter Email-id";
        $count++;
    }
    $pass = $_POST['txt_password'];
}

if (isset($_POST['btn_submit']) && $count == 0) {
    $username = trim($_POST['txt_email']);
    $password = trim($_POST['txt_password']);

    $select = "SELECT reg_email, reg_password FROM tbl_registration WHERE reg_email = '$username' AND reg_password = '$password'";
    $query = mysqli_query($con, $select);
    $row = mysqli_fetch_array($query);

    if ($username == $row['reg_email'] && $password == $row['reg_password']) {
        $_SESSION['login_user_name'] = $row['reg_email'];

        // Redirect to index.php
        echo '<script>window.location.href="index.php";</script>';
    } else {
        // Display an alert for incorrect username or password
        echo '<script>alert("Incorrect Username or Password. Please try again!");</script>';
        $err_msg = "Please Enter Correct Username and Password";
    }
}
?>

<br />
<header id="head" class="secondary">
    <div class="container">
        <h1>Sign In</h1>
    </div>
</header>

<!-- container -->
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <form class="form-light mt-20" role="form" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <br />
                            <input type="text" name="txt_email" class="form-control" placeholder="Your Email">
                            <span><?php echo $err_uname; ?></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="txt_password" class="form-control" placeholder="Your Password">
                            <span><?php echo $err_pass; ?></span>
                        </div>
                    </div>
                </div>
                <button type="submit" name="btn_submit" class="btn btn-primary pull-right">Submit</button><br />
            </form>
        </div>
        <div class="col-md-4">

        </div>
    </div>
</div>
<br />
<!-- /container -->
<?php
include("footer.php");
?>
