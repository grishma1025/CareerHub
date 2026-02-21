<?php
include("header.php");
?>

<section class="section-hero overlay inner-page bg-image" style="background-color:#d6cdcc;" id="home-section">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h3 class="text-white font-weight-bold">Company Details</h3>
        <div class="custom-breadcrumbs">
          <a href="index.php">Home</a> <span class="mx-2 slash">/</span>
          <span class="text-white"><strong>view company</strong></span>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
// error_reporting(0);
$connection=mysqli_connect("localhost","root","","db_careerhub") or die("Connection Error b");
//$db=mysql_select_db("db_gsa") or die("Database Error");
$query = "SELECT * FROM tbl_company WHERE status = 1";
$result = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Company</title>
</head>
<body >
 
    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            // Extract data from each row
            $name = $row['name'];
            $tagline = $row['tagline'];
         
            $details = $row['detail'];
            $tech = $row['technology'];
            ?>
            <div style="margin: 20px auto; padding: 20px; max-width: 800px; background-color: #fff; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <h2 style="text-align: center; color: #0073e6;"><?php echo $name; ?></h2>
                <p style="text-align: center; color: #555;"><i><?php echo $tagline; ?></i></p>
                <div style="text-align: center;">
                    <img src="uploads/<?php echo $row['file'];?>"  style="max-width: 100%; height: auto; border-radius: 8px;">
                </div>
                <h3 style="margin-top: 20px; color: #333;">Building The Future With Intelligence</h3>
                <p style="color: #555; line-height: 1.6;"><?php echo $details; ?></p>
                <h4 style="margin-top: 20px; color: #0073e6;">Technologies We Work With</h4>
                <p style="color: #555;"><?php echo $tech; ?></p>
            </div>
            <?php
        }
    } else {
        echo "<p style='text-align: center; color: #666;'>No companies found.</p>";
    }
    ?>
</body>
</html>
<?php
include("footer.php");
?>
