<?php
include("header.php");
?>

    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-color:#d6cdcc;" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h3 class="text-white font-weight-bold">Search Results</h3>
            <div class="custom-breadcrumbs">
              <a href="index.php">Home</a> <span class="mx-2 slash">/</span>
             
              <span class="text-white"><strong>Search Results</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php
// Database connection
$host = 'localhost';
$dbname = 'db_careerhub';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Process the form data
$searchTitle = $_POST['title'] ?? '';
$jobType = $_POST['job-type'] ?? '';

// Build the SQL query with filters
$query = "SELECT * FROM tbl_job WHERE 1=1";

if (!empty($searchTitle)) {
    $query .= " AND (title LIKE :title OR company-name LIKE :title)";
}

if (!empty($jobType)) {
    $query .= " AND job-type = :job-type";
}

$stmt = $pdo->prepare($query);

// Bind parameters
if (!empty($searchTitle)) {
    $stmt->bindValue(':title', '%' . $searchTitle . '%', PDO::PARAM_STR);
}
if (!empty($jobType)) {
    $stmt->bindValue(':job-type', $jobType, PDO::PARAM_STR);
}

$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Search Results</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container" style="padding: 20px;">
        <h1>Search Results</h1>
        
        <?php if (count($results) > 0): ?>
            <table border="1" style="width: 100%; border-collapse: collapse; text-align: left;">
                <thead>
                    <tr style="text-align:center;">
                        <th>Job Title</th>
                        <th>Company</th>
                        <th>Job Type</th>
                        <th>Location</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($results as $job): ?>
                        <tr>
                    <td style="text-align: center;"><?php echo htmlspecialchars($job['title']); ?></td>
<td style="text-align: center;"><?php echo htmlspecialchars($job['company-name']); ?></td>
<td style="text-align: center;"><?php echo htmlspecialchars($job['job-type']); ?></td>
<td style="text-align: center;"><?php echo htmlspecialchars($job['location']); ?></td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No jobs found matching your criteria.</p>
        <?php endif; ?>
    </div>
</body>
</html>
<?php
include("footer.php");
?>