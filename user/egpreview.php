<?php
include("header.php");

?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$nm=$_POST['txt_name'];
	$em=$_POST['txt_email'];
	$no=$_POST['txt_phn'];
	$add=$_POST['txt_add'];
	$gd=$_POST['txt_grad'];
	$pg=$_POST['txt_post-grad'];
	$sk=$_POST['txt_skills'];
	$exp=$_POST['txt_exp'];
	$com=$_POST['txt_com'];
	$pos=$_POST['txt_pos'];
 
    
    echo "
    <html>
    <head>
        <title>Resume Preview</title>
  
    </head>
    <body>
        <div class='bill-container'>
            <h2>Bill Preview</h2>
			 <h4>Personal Details</h4>
            <p><strong>Name:</strong> $txt_name</p>
			<p><strong>Email:</strong>
			<p><strong>Mobile:</strong>
			<p><strong>Address:</strong>
			 <h4>Educational Qualification</h4>
			<p><strong>Graduation:</strong>
			<p><strong>Post Graduation:</strong>
			<p><strong>Skills:</strong>
			<h4>Job Experiance</h4>
			<p><strong>Experiance:</strong>
			<p><strong>Company:</strong>
			<p><strong>Position:</strong>
           
        </div>
    </body>
    </html>";
}
?>
	 <?php
include("footer.php");
?>



 <table>
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Quantity</th>
                        <th>Price (per item)</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>$item</td>
                        <td>$quantity</td>
                        <td>$$price</td>
                        <td>$$total</td>
                    </tr>
                </tbody>
            </table>