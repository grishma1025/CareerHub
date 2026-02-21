

<?php

// Connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "job";  // Replace with your actual database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
error_reporting(0);
// Collecting form data
$job_title = $_POST['job_title'];
$company_name = $_POST['company_name'];
$job_description = $_POST['job_description'];
$location = $_POST['location'];

// Insert into database
$sql = "INSERT INTO jobs (job_title, company_name, job_description, location) VALUES ('$job_title', '$company_name', '$job_description', '$location')";

if ($conn->query($sql) === TRUE) {
    echo "New job posted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Post a Job</title>
</head>
<body>
    <h2>Post a Job</h2>
    <form action="post_job.php" method="POST">
        <label for="job_title">Job Title:</label><br>
        <input type="text" id="job_title" name="job_title" required><br><br>

        <label for="company_name">Company Name:</label><br>
        <input type="text" id="company_name" name="company_name" required><br><br>

        <label for="job_description">Job Description:</label><br>
        <textarea id="job_description" name="job_description" rows="4" cols="50" required></textarea><br><br>

        <label for="location">Location:</label><br>
        <input type="text" id="location" name="location" required><br><br>

        <input type="submit" value="Post Job">
    </form>
</body>
</html>
