<html>
    <head>
    <style>
    table {
        width: 50%;
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 18px;
        text-align: left;
    }
    th, td {
        padding: 12px;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #f2f2f2;
    }
    tr:hover {
        background-color: #f5f5f5;
    }
</style>
</head>

<?php
include("config.php");
?>

<?php

// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_careerhub";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to select data from the table
$sql = "SELECT * FROM tbl_resume"; // Replace "your_table_name" with your actual table name
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
           
                <th>Name</th>
                <th>Email</th>
                <th>phone</th>
                 <th>Address</th>
                <th>graduation</th>
                <th>post graduation</th>
                <th>skills</th>
                 <th>experience</th>
                <th>company</th>
                <th>position</th>
     
            </tr>";

    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
              
                <td>" . $row["name"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["phone"] . "</td>
                <td>" . $row["address"] . "</td>
                <td>" . $row["graduation"] . "</td>
                <td>" . $row["post graduation"] . "</td>
                <td>" . $row["skills"] . "</td>
                <td>" . $row["experience"] . "</td>
                <td>" . $row["company"] . "</td>
                <td>" . $row["position"] . "</td>
                
             </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

// Close the database connection
$conn->close();
?>
</html>