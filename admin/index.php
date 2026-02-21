<?php
ob_start();
error_reporting(0);
include"connect.php";
session_start();
 

 	$err_msg='';
	$count =0;
	if(isset($_POST['btn_login']))
	{
		$uname= $_POST['txt_uname'];
		if($uname=="")
		{
			$err_uname ="Enter Email-id";
			$count++;
		}
		$pass= $_POST['txt_pass'];
		if($pass=="")
		{
			$err_pass ="Enter Password";
			$count++;
		}
	}

 ?>
 
 <?php
 if(isset($_POST['btn_login']) && $count==0)
	{
		$username =trim($_POST['txt_uname']);
	   	$password =trim($_POST['txt_pass']);
    	
		$select = "select * from tbl_admin_login where login_name = '$username' and login_password = '$password' ";
		$query =mysqli_query($connection,$select);
		$row =mysqli_fetch_array($query);

		if($username==$row['login_name'] && $password==$row['login_password'])
		{

			$_SESSION['login_user_name'] = $row['login_name'];
		
			
			?>
			     
				<script> 
                window.location.href="home.php"; </script>
			<?php
			
		}
		else
		{	
			$err_msg="Please Enter Correct Username and Password";
			
		 }
	}
	
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        /* CSS for styling the login page */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #ffffff;
            width: 350px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        .login-container h2 {
            margin: 0 0 20px;
            color: #333333;
        }
        .login-container input[type="email"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #cccccc;
            border-radius: 4px;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            border-radius: 4px;
            color: #ffffff;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }
        .login-container button:hover {
            background-color: #45a049;
        }
        .error-message {
            color: #ff4d4d;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Admin Login</h2>
    <form method="post">
        <input
            type="email"
            name="txt_uname"
            placeholder="Username"
            required
            style="width: 90%; padding: 12px; margin: 10px 0; border: 1px solid #cccccc; border-radius: 4px; font-size: 16px;"
        >
        <input
            type="password"
            name="txt_pass"
            placeholder="Password"
            required
            style="width: 90%; padding: 12px; margin: 10px 0; border: 1px solid #cccccc; border-radius: 4px; font-size: 16px;"
        >
        <button
            type="submit"
            name="btn_login"
            style="width: 90%; padding: 12px; background-color: #F88379; border: none; border-radius: 4px; color: #ffffff; font-size: 16px; cursor: pointer; margin-top: 10px;"
        >
            Login
        </button>
        <?php
        if (!empty($error)) {
            echo "<p class='error-message'>$error</p>";
        }
        ?>
    </form>
</div>


</body>
</html>
