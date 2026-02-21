<?php
include("header.php");
?>


	<!-- HOME -->
   <!--
<section class="home-section section-hero overlay bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">

  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-12">
        <div class="mb-5 text-center">
          <h1 class="text-white font-weight-bold">The Easiest Way To Get Your Dream Job!!</h1>
          <p>"Where Ambition Meets Opportunity"</p>
        </div>
        <form method="post" class="search-jobs-form">
          <div class="row mb-5">
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
              <input type="text" class="form-control form-control-lg" placeholder="Job title, Company...">
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
              <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select Region">
                <option>Anywhere</option>
                <option>Gujarat</option>
                <option>Delhi</option>
                <option>Banglore</option>
                <option>Rajasthan</option>
                <option>Mumbai</option>
                <option>Pune</option>
                <option>Kerala</option>
                <option>Other</option>
              </select>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
              <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select Job Type">
                <option>Part Time</option>
                <option>Full Time</option>
                <option>Free Lancing</option>
              </select>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
              <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search" style="background-color:rgb(209, 133, 156);><span class="icon-search icon mr-2"></span>Search Job</button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 popular-keywords">
              <h3>Trending Keywords:</h3>
              <ul class="keywords list-unstyled m-0 p-0">
                <li><a href="#" class="">UI Designer</a></li>
                <li><a href="#" class="">Python</a></li>
                <li><a href="#" class="">Developer</a></li>
              </ul>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <a href="#next" class="scroll-button smoothscroll">
    <span class=" icon-keyboard_arrow_down"></span>
  </a>

</section>
-->
<section class="home-section section-hero overlay bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-12">
                <div class="mb-5 text-center">
                    <h1 class="text-white font-weight-bold">Looking for a job?</h1>
                    <p>Sign up now to get one</p>
                </div>

                <form method="post" action="search.php" class="search-jobs-form">
                    <div class="row mb-5">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                            <input type="text" name="search_title" class="form-control form-control-lg" placeholder="Job title..." aria-label="Job title">
                        </div>

                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                            <input type="text" name="search_company" class="form-control form-control-lg" placeholder="Company..." aria-label="Company name">
                        </div>

                 <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
				  <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select type">
        <option value="1">Part Time</option>
        <option value="2">Full Time</option>
      
    </select>
</div>

                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                            <button type="submit" class="btn btn-primary btn-lg btn-block text-white" style="background-color:rgb(209, 133, 156);">
                                <span class="icon-search icon mr-2"></span>Search Job
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 popular-keywords">
                            <h3>Trending Keywords:</h3>
                            <ul class="keywords list-unstyled m-0 p-0">
                                <li><a href="search.php" class="">UI Designer</a></li>
                                <li><a href="search.php" class="">Python</a></li>
                                <li><a href="search.php" class="">Developer</a></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php 
// Database connection
$connection = mysqli_connect("localhost", "root", "", "db_careerhub") or die("Connection Error");

// Query to count the number of users (e.g., candidates)
$candidates_query = "SELECT COUNT(*) AS total_candidates FROM tbl_registration";
$candidates_result = mysqli_query($connection, $candidates_query);
$candidates_count = mysqli_fetch_assoc($candidates_result)['total_candidates'] + 200;  // Start from 1000

// Query to count the number of jobs posted
$jobs_query = "SELECT COUNT(*) AS total_jobs FROM tbl_job";
$jobs_result = mysqli_query($connection, $jobs_query);
$jobs_count = mysqli_fetch_assoc($jobs_result)['total_jobs'] + 50;  // Start from 1000

// Query to count the number of companies
$companies_query = "SELECT COUNT(*) AS total_companies FROM tbl_company";
$companies_result = mysqli_query($connection, $companies_query);
$companies_count = mysqli_fetch_assoc($companies_result)['total_companies'] + 0;  // Start from 1000

// Query to count the number of tasks posted
$tasks_query = "SELECT COUNT(*) AS total_tasks FROM tbl_task";
$tasks_result = mysqli_query($connection, $tasks_query);
$tasks_count = mysqli_fetch_assoc($tasks_result)['total_tasks'] + 20;  // Start from 1000
?>

<section class="py-5 bg-image overlay-primary fixed overlay" id="next" style="background-image: url('images/hero_1.jpg');">
  <div class="container">
    <div class="row mb-5 justify-content-center">
      <div class="col-md-7 text-center">
        <h2 class="section-title mb-2 text-white">CareerHub Site Stats</h2>
        <p class="lead text-white">The number of Learners who got placed by us !!</p>
      </div>
    </div>
    <div class="row pb-0 block__19738 section-counter">
      
      <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
        <div class="d-flex align-items-center justify-content-center mb-2">
          <strong class="number" data-number="<?php echo $candidates_count; ?>"><?php echo $candidates_count; ?></strong>
        </div>
        <span class="caption">Candidates</span>
      </div>
      
      <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
        <div class="d-flex align-items-center justify-content-center mb-2">
          <strong class="number" data-number="<?php echo $jobs_count; ?>"><?php echo $jobs_count; ?></strong>
        </div>
        <span class="caption">Jobs Posted</span>
      </div>
      
      <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
        <div class="d-flex align-items-center justify-content-center mb-2">
          <strong class="number" data-number="<?php echo $companies_count; ?>"><?php echo $companies_count; ?></strong>
        </div>
        <span class="caption">Companies</span>
      </div>

      <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
        <div class="d-flex align-items-center justify-content-center mb-2">
          <strong class="number" data-number="<?php echo $tasks_count; ?>"><?php echo $tasks_count; ?></strong>
        </div>
        <span class="caption">Tasks Posted</span>
      </div>
      
    </div>
  </div>
</section>
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

          <div style="padding: 20px; text-align: center; background-color: white;">
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
                    background-color: #ECF0F1; 
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


