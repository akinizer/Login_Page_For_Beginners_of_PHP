<!DOCTYPE HTML>

<?php

    // Start the session
    session_start();

    // Defines username and password. Retrieve however you like,
    $username = "user";
    $password = "pass";

    // Error message
    $error = "";	
	
    // Checks to see if the user is already logged in. If so, redirect to correct page.
    if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
        $error = "success";
        header("Location: advance.php");
    } 
        
    // Checks to see if the username and password have been entered.
    // If so and are equal to the username and password defined above, log them in.
    if (isset($_POST['username']) && isset($_POST['password'])) {
        if ($_POST['username'] == $username && $_POST['password'] == $password) {
            $_SESSION['loggedIn'] = true;
            header("Location: advance.php");
        } else {
            $_SESSION['loggedIn'] = false;
            $error = "Invalid username and password!";
        }
    }
	
?>

<html>
    <head>
        <title>Login</title>
    </head>
    
    <body>
        <!-- Output error message if any -->
        <?php echo $error; ?>
        
        <!-- form for login -->
        <form method="post" action="advance.php" align="center" width="%70">
			<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			<h4>Database Entry</h4>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username"><br/>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password"><br/><br/>
            <input type="submit" value="Push to sign in">
		
        </form>
    </body>
</html>