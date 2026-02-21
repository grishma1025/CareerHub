<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $name = $_POST['txt_name'];
    $email = $_POST['txt_email'];
    $phone = $_POST['txt_phn'];
    $address = $_POST['txt_add'];
    $graduation = $_POST['txt_grad'];
    $post_graduation = $_POST['txt_post-grad'];
    $skills = $_POST['txt_skills'];
    $experience = $_POST['txt_exp'];
    $company = $_POST['txt_com'];
    $position = $_POST['txt_pos'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview Resume</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .resume { border: 1px solid #ddd; padding: 20px; border-radius: 10px; background: #f9f9f9; }
        .section { margin-bottom: 20px; }
        .section h3 { border-bottom: 1px solid #ddd; padding-bottom: 5px; }
    </style>
</head>
<body>
    <div class="resume">
        <h2>Resume Preview</h2>
        <div class="section">
            <h3>Personal Details</h3>
            <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
            <p><strong>Phone:</strong> <?php echo htmlspecialchars($phone); ?></p>
            <p><strong>Address:</strong> <?php echo nl2br(htmlspecialchars($address)); ?></p>
        </div>
        <div class="section">
            <h3>Educational Qualification</h3>
            <p><strong>Graduation:</strong> <?php echo htmlspecialchars($graduation); ?></p>
            <p><strong>Post Graduation:</strong> <?php echo htmlspecialchars($post_graduation); ?></p>
        </div>
        <div class="section">
            <h3>Skills</h3>
            <p><?php echo nl2br(htmlspecialchars($skills)); ?></p>
        </div>
        <div class="section">
            <h3>Job Details</h3>
            <p><strong>Experience:</strong> <?php echo htmlspecialchars($experience); ?></p>
            <p><strong>Company:</strong> <?php echo htmlspecialchars($company); ?></p>
            <p><strong>Position:</strong> <?php echo htmlspecialchars($position); ?></p>
        </div>
    </div>
</body>
</html>



