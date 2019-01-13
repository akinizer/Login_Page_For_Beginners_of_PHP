<!DOCTYPE HTML>

<?php
    // Start the session
    ob_start();
    session_start();

    // Check to see if actually logged in. If not, redirect to login page
    if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] == false) {
       header("Location: index.php");
    }
?>

<h1>Welcome</h1>
<form method="post" action="chao.php">
	<label>Table contents</label></br>
	<label>Will be printed</label></br>
	<label>Here</label></br>
	</br>
    <input type="submit" value="Logout">
</form>