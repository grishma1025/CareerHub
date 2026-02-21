<?php
include("header.php");

// Establish a database connection
$connection = mysqli_connect("localhost", "root", "", "db_careerhub") or die("Connection Error");

// Get the company ID from the query string
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Validate ID and fetch company details
if ($id > 0) {
    $query = "SELECT * FROM tbl_company WHERE id = $id AND status = 1";
    $result = mysqli_query($connection, $query);
    $company = mysqli_fetch_assoc($result);

    if (!$company) {
        die("<p style='text-align: center; color: #666;'>Company not found.</p>");
    }
} else {
    die("<p style='text-align: center; color: #666;'>Invalid company ID.</p>");
}
?>

<section class="section-hero overlay inner-page bg-image" style="background-color:#d6cdcc;" id="home-section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h3 class="text-white font-weight-bold">Company Details</h3>
                <div class="custom-breadcrumbs">
                    <a href="index.php">Home</a> <span class="mx-2 slash">/</span>
                    <a href="view_company.php">View Companies</a> <span class="mx-2 slash">/</span>
                    <span class="text-white"><strong><?php echo htmlspecialchars($company['name']); ?></strong></span>
                </div>
            </div>
        </div>
    </div>
</section>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Details</title>
</head>
<body style="background-color: #ECF0F1;">
    <div style="margin: 40px auto; padding: 20px; max-width: 800px; background-color: #fff; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <h2 style="text-align: center; color: #0073e6;"><?php echo htmlspecialchars($company['name']); ?></h2>
        <p style="text-align: center; color: #555;"><i><?php echo htmlspecialchars($company['tagline']); ?></i></p>
        <div style="text-align: center;">
            <img src="../admin/img/<?php echo htmlspecialchars($company['file']); ?>" 
                 style="max-width: 100%; height: auto; border-radius: 8px;">
        </div>
        <h3 style="margin-top: 20px; color: #333;">Building The Future With Intelligence</h3>
        <p style="color: #555; line-height: 1.6;"><?php echo htmlspecialchars($company['detail']); ?></p>
        <h4 style="margin-top: 20px; color: #0073e6;">Technologies We Work With</h4>
        <p style="color: #555;"><?php echo htmlspecialchars($company['technology']); ?></p>
    </div>
</body>
</html>

<?php
include("footer.php");
?>
