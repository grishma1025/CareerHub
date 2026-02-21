<?php
include("header.php");
include("connect.php");

$count = 0;
$err_name = $err_tagline = $err_img = $err_detail = $err_tech = "";

// Handle form submission
if (isset($_POST['btn_submit'])) {
    $nm = trim($_POST['txt_name']);
    $tg = trim($_POST['txt_tagline']);
    $detail = trim($_POST['txt_detail']);
    $tech = trim($_POST['txt_tech']);
    $file_name = $_FILES['txt_file']['name'];

    // Validate name
    if (empty($nm)) {
        $err_name = "Enter name";
        $count++;
    }

    // Validate tagline
    if (empty($tg)) {
        $err_tagline = "Enter tagline";
        $count++;
    }

    // Validate file upload
    if (empty($file_name)) {
        $err_img = "Select file";
        $count++;
    } else {
        $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if (!in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'svg'])) {
            $err_img = "Place image must be in JPG, JPEG, PNG, GIF, or SVG format";
            $count++;
        }
    }

    // Validate details
    if (empty($detail)) {
        $err_detail = "Enter details";
        $count++;
    }

    // Validate technologies
    if (empty($tech)) {
        $err_tech = "Enter languages";
        $count++;
    }

    // If no errors, insert data into the database
    if ($count == 0) {
        // Save the uploaded file
        $target_dir = "img/";
        $target_file = $target_dir . basename($file_name);
        move_uploaded_file($_FILES['txt_file']['tmp_name'], $target_file);

        // Sanitize inputs and execute query
        $nm = mysqli_real_escape_string($connection, $nm);
        $tg = mysqli_real_escape_string($connection, $tg);
        $detail = mysqli_real_escape_string($connection, $detail);
        $tech = mysqli_real_escape_string($connection, $tech);

        $ins = "INSERT INTO tbl_company VALUES ('','$nm', '$tg', '$detail', '$tech','$file_name', '1')";

        if (mysqli_query($connection, $ins)) {
            echo "<script>
                    alert('Company added successfully');
                    window.location.href = 'view_company.php';
                  </script>";
        } else {
            echo "<script>alert('Error: Could not add company');</script>";
        }
    }
}
?>

<style>
/* General styles for the form and its elements */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f7fa;
    padding: 20px;
}

h2 {
    font-size: 24px;
    font-weight: bold;
    color: #333;
    margin-bottom: 20px;
}

.box-content {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 100%;
    margin: 0 auto;
}

.form-group {
    margin-bottom: 15px;
}

label {
    font-size: 14px;
    font-weight: bold;
    color: #333;
}

input[type="text"],
textarea,
input[type="file"] {
    width: 100%;
    padding: 10px;
    border-radius: 4px;
    border: 1px solid #ccc;
    box-sizing: border-box;
    font-size: 14px;
}

input[type="text"]:focus,
textarea:focus,
input[type="file"]:focus {
    border-color: #007bff;
    outline: none;
}

textarea {
    resize: vertical;
    height: 100px;
}

button.btn {
    background-color: #007bff;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    font-size: 14px;
    cursor: pointer;
    margin-top: 10px;
}

button.btn:hover {
    background-color: #0056b3;
}

strong span {
    font-size: 12px;
}

/* Add styling for error messages */
strong span {
    color: #FF0000;
}
</style>

<body>
    <h2><i class="glyphicon glyphicon-edit"></i> Add Companies</h2>
    <div class="box-content">
        <form name="frm_pro" enctype="multipart/form-data" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="txt_name" class="form-control" placeholder="Enter Name">
                <strong><span><?php echo $err_name; ?></span></strong>
            </div>
            <div class="form-group">
                <label>Tagline</label>
                <input type="text" name="txt_tagline" class="form-control" placeholder="Enter Tagline">
                <strong><span><?php echo $err_tagline; ?></span></strong>
            </div>
            <div class="form-group">
                <label>Details</label>
                <textarea class="form-control" name="txt_detail" placeholder="Enter details"></textarea>
                <strong><span><?php echo $err_detail; ?></span></strong>
            </div>
            <div class="form-group">
                <label>Languages</label>
                <input type="text" class="form-control" name="txt_tech" placeholder="Enter Languages">
                <strong><span><?php echo $err_tech; ?></span></strong>
            </div>
            <div class="form-group">
                <label>Photo</label>
                <input type="file" class="form-control" name="txt_file">
                <strong><span><?php echo $err_img; ?></span></strong>
            </div>
            <button class="btn btn-primary btn-sm" type="submit" name="btn_submit">Add</button>
        </form>
    </div>
</body>
