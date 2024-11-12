<?php
    include 'header.php';
    session_start();
    require('db.php');

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Query to fetch user details
		$query = "SELECT * FROM user WHERE username='$username' and password='$password'";
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($result);
		if ($count == 1){
			$_SESSION['username'] = $username;
			header("Location: dashboard.php"); // Redirect to dashboard
          	exit();
			}else{
				$fmsg = "Invalid Login Credentials.";
		}
	}
	//if the user is logged in Greets the user with message
	if (isset($_SESSION['username'])){
		$username = $_SESSION['username'];
		$_SESSION['username'] = $username;
			header("Location: dashboard.php"); // Redirect to dashboard
          	exit();
		}
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Login</title>
    <meta name="robots" content="noindex" />
    <link href="style.css" rel="stylesheet" />
    <style>
        /* Styles are similar to previous registration form */
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: Arial, sans-serif; }
        body { display: flex; align-items: center; justify-content: center; min-height: 100vh; background: linear-gradient(to right, #1d6c64 0%, #1e6072 60%, #244c62 100%); }
       
    </style>
</head>
<body>
    <div class="containers">
        <?php if (isset($fmsg)) { echo "<div class='alerts'>$fmsg</div>"; } ?>
        <h2 class="form-signin-headings">Please Login</h2>
        <form class="form-signin" method="POST">
            <div class="input-groups">

                <input type="text" name="username" class="form-controls" placeholder="Username" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" id="inputPassword" class="form-controls" placeholder="Password" required>
            </div>
            <button class="btn btn-primary" type="submit">Login</button>
            <a class="btn btn-primary" href="register.php">Register</a>
        </form>
    </div>
</body>
</html>
