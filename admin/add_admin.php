<?php 
include("header.php"); 
include("connect.php"); 

// Database connection details
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "db_careerhub";  

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);  

// Check connection
if ($conn->connect_error) {     
    die("Connection failed: " . $conn->connect_error); 
}  

$message = ""; // Initialize a message variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO tbl_admin_login (login_name, login_password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);
    
    // Execute the query
    if ($stmt->execute()) {
        $message = "Record successfully inserted!";
    } else {
        $message = "Error inserting record: " . $stmt->error;
    }
    
    $stmt->close();
    $conn->close();
}
?>

<body style="padding: 20px; font-family: Arial, sans-serif; background-color: #f9f9f9; margin: 0;">
    <div style="background-color: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); width: 400px; margin-left: 20px; text-align: left;">
        <h1 style="font-size: 24px; color: #333333; margin-bottom: 20px;">Add User</h1>
        
        <?php if ($message): ?>
            <script>
                alert("<?php echo $message; ?>");
            </script>
        <?php endif; ?>

        <form method="post">
            <label for="username" style="font-size: 16px; color: #555555; display: block; margin-bottom: 5px;">Email:</label>
            <input type="text" id="username" name="username" required style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #dddddd; border-radius: 5px; font-size: 14px;">

            <label for="password" style="font-size: 16px; color: #555555; display: block; margin-bottom: 5px;">Password:</label>
            <input type="password" id="password" name="password" required style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #dddddd; border-radius: 5px; font-size: 14px;">

            <!-- Buttons in a row -->
            <div style="display: flex; gap: 10px; margin-top: 10px;">
                <input type="submit" value="Submit" style="background-color: #4A90E2; color: black; padding: 8px 16px; border: none; border-radius: 5px; font-size: 14px; cursor: pointer;">
                <input type="reset" value="Clear" style="background-color: #4A90E2; color: black; padding: 8px 16px; border: none; border-radius: 5px; font-size: 14px; cursor: pointer;">
            </div>
        </form>
    </div>
</body>

