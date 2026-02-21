<?php
include("header.php");
?>

<section class="section-hero overlay inner-page bg-image" style="padding: 50px 0; text-align: left; color: #fff; background: linear-gradient(to bottom, #5a5c69, #373a47); border-bottom: 3px solid #444;">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h3 style="font-weight: bold; color: #fff; margin-bottom: 10px;">Job Details</h3>
        <div class="custom-breadcrumbs">
          <a href="index.php" style="color: #ddd; text-decoration: none;">Home</a>
          <span style="margin: 0 10px; color: #bbb;">/</span>
          <span style="color: #fff; font-weight: bold;">Job Details</span>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
    .job-details {
        background: #fff;
        border: 1px solid #e3e3e3;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
    }

    .job-details h2 {
        text-align: center;
        font-size: 28px;
        margin-bottom: 20px;
        color: #444;
        font-weight: bold;
    }

    .job-details p {
        margin-bottom: 15px;
        line-height: 1.6;
        font-size: 16px;
        color: #555;
    }

    .job-details strong {
        font-weight: bold;
        color: #222;
    }

    .job-info p {
        margin: 8px 0;
    }

    .job-description,
    .company-description {
        margin-top: 25px;
        padding-top: 15px;
        border-top: 1px solid #e3e3e3;
    }

    .job-description p,
    .company-description p {
        font-size: 15px;
        color: #666;
    }
</style>
<body style="background-color: #ECF0F1;">
<?php
// Get the job ID from the URL parameter
$jobId = $_GET['id'];

// Assuming you have a database connection established
$conn = mysqli_connect("localhost", "root", "", "db_careerhub");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch detailed job information based on the job ID
$sql = "SELECT * FROM tbl_job WHERE id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $jobId);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='job-details'>";
    echo "<h2>" . $row['title'] . "</h2>";

    echo "<div class='job-info'>";
        echo "<p><strong>Company:</strong> " . $row['company-name'] . "</p>";
        echo "<p><strong>Location:</strong> " . $row['location'] . "</p>";
        echo "<p><strong>Salary:</strong> " . $row['salary'] . "</p>";
        echo "<p><strong>Job Type:</strong> " . $row['job-type'] . "</p>";
        echo "<p><strong>Experience:</strong> " . $row['experiance'] . "</p>";
        echo "<p><strong>Skills:</strong> " . $row['skills'] . "</p>";
    echo "</div>";

    echo "<div class='job-description'>";
        echo "<h3 style='font-size: 20px; font-weight: bold; color: #444;'>Job Description</h3>";
        echo "<p>" . $row['job-description'] . "</p>";
    echo "</div>";

    echo "<div class='company-description'>";
        echo "<h3 style='font-size: 20px; font-weight: bold; color: #444;'>Company Description</h3>";
        echo "<p>" . $row['company-description'] . "</p>";
    echo "</div>";

    echo "</div>";
} else {
    echo "<div class='job-details'>";
    echo "<h2>Job not found.</h2>";
    echo "</div>";
}

mysqli_close($conn);
?>
<br/>
<?php
include("footer.php");
?>
