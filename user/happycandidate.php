	<?php
	include("header.php");
?>
	
	 <section class="section-hero overlay inner-page bg-image" style="background-color:#d6cdcc;" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h3 class="text-white font-weight-bold">Happy Candidates</h3>
            <div class="custom-breadcrumbs">
              <a href="index.php">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Happy Candidates</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>
<body style="background-color: #ECF0F1">
	 
<?php

$host = "localhost";
$dbname = "db_careerhub";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Query to fetch testimonials
    $stmt = $pdo->query("SELECT text, name, pos FROM tbl_happycandidate");
    $testimonials = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}



?>
<br/>
          <div style="padding: 20px; text-align: center; background-color: #ECF0F1;">
        <!-- Section Title -->
        <h1 style="margin-bottom: 30px; font-size: 35px; font-weight: bold; color: #2C3E50;">
            Happy Candidates Says
        </h1>
   

        <!-- Testimonial List -->
        <div style="
            display: flex; 
            flex-direction: column; 
            align-items: center; 
            gap: 20px; 
            max-width: 800px; 
            margin: 0 auto;
        ">
            <?php foreach ($testimonials as $testimonial): ?>
                <!-- Testimonial Card -->
                <div style="
                    background-color: #fff; 
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
                    border-radius: 8px; 
                    padding: 20px; 
                    width: 100%; 
                    text-align: center;
                ">
                    <p style="font-size: 16px; color: #555; line-height: 1.5; margin-bottom: 15px;">
                        “<?php echo htmlspecialchars($testimonial['text']); ?>”
                    </p>
                    <h3 style="margin: 0; font-size: 18px; font-weight: bold; color: #2C3E50;">
                        <?php echo htmlspecialchars($testimonial['name']); ?>
                    </h3>
                    <p style="margin: 0; font-size: 14px; color: #777;">
                        <?php echo htmlspecialchars($testimonial['pos']); ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
        </div>
      </div>
    </section>
 <?php
include("footer.php");
?>