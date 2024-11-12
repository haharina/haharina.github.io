    <?php
    require('db.php');

    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "INSERT INTO user (username, password, email) VALUES ('$username', '$password', '$email')";

        if (mysqli_query($conn, $sql)) {
            $smsg = "New record created successfully! Click here to <a href='login.php'>Login</a> ";
        } else {
            $fmsg = "Error: Could not register. Please try again.";
        }

        mysqli_close($conn);
    }
?>

<html>
<head>
    <?php include 'header.php'; ?>
    <meta name="robots" content="noindex" />
    <link href="style.css" rel="stylesheet" />
    <script>
        // Function to show alerts with animation
        function showAlert(alertClass) {
            const alertBox = document.querySelector(`.${alertClass}`);
            alertBox.classList.add("alert-visible");

            // Auto-hide alert after 5 seconds
            setTimeout(() => {
                alertBox.classList.remove("alert-visible");
            }, 5000);
        }

        // Close alert when close button is clicked
        function closeAlert(event) {
            event.target.parentElement.classList.remove("alert-visible");
        }

        // Show alerts on page load if there are messages
        window.onload = function() {
            <?php if (isset($smsg)) { ?>
                showAlert('alert-success');
            <?php } ?>
            <?php if (isset($fmsg)) { ?>
                showAlert('alert-danger');
            <?php } ?>
        };
    </script>
</head>
<body>
    <div class="container">
        <!-- Alert for Success -->
        <?php if (isset($smsg)) { ?>
            <div class="alert alert-success">
                <span><?php echo $smsg; ?></span>
                <span class="close-btn" onclick="closeAlert(event)">&times;</span>
            </div>
        <?php } ?>

        <!-- Alert for Error -->
        <?php if (isset($fmsg)) { ?>
            <div class="alert alert-danger">
                <span><?php echo $fmsg; ?></span>
                <span class="close-btn" onclick="closeAlert(event)">&times;</span>
            </div>
        <?php } ?>

        <form class="form-signin" method="POST">
            <h2 class="form-signin-heading">Please Register</h2>
            
            <div class="input-group">
                <input type="text" name="username" class="form-control" placeholder="Username" required>
            </div>
            
            <div class="input-group">
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            </div>
            
            <div class="input-group">
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
            </div>
            
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            
            <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        </form>
    </div>
</body>
</html>
