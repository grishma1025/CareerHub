<?php
include("header.php");
error_reporting(0);
?>

    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-color:#d6cdcc;" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h3 class="text-white font-weight-bold">Find A Task</h3>
            <div class="custom-breadcrumbs">
              <a href="index.php">Home</a> <span class="mx-2 slash">/</span>
             
              <span class="text-white"><strong>Find a Task</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>



<?php

// Connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_careerhub";  // Replace with your actual database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch tasks
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task Listings</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4;">

    <div class="container" style="width: 80%; margin: auto;">
	<br>
        <h1>Available Tasks</h1>
<br/>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM tbl_task");
        $row_cnt = mysqli_num_rows($result);
        
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<div class='job-listing' style='background: white; margin-bottom: 20px; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);'>";
            echo "<div class='job-title' style='font-size: 1.5em; color: #333; font-weight: bold;'>" . $row['title'] . "</div>";
            echo "<div class='salary' style='color: #333; font-weight: bold;'>Salary: $" . $row['salary'] . "</div>";
            echo "<div class='time' style='color: #333;'>Estimated Time: " . $row['time'] . " hours</div>";
            echo "<div class='company-name' style='color: #555; font-weight: bold;'>Company: " . $row['com-name'] . "</div>";
 echo "<a href='task-details.php?id=" . $row['id'] . "' style='display: inline-block; align: right; margin-top: 10px; padding: 10px 20px; background-color: #3498db; color: white; text-decoration: none; border-radius: 5px;'>View Details</a>";
            echo "</div>";
        }

        $conn->close();
        ?>
    </div>

</body>
</html>
