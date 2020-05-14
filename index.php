<?php
// Make or fetch session data
session_start();

//Check user login request
if (isset($_POST['action']) && $_POST['action'] == 'login') {
	// Get userid and passwd from POST data
	$user_id = $_POST['userid'];
	//TODO sql injectie lek oplossen
	$passwd = $_POST['passwd'];

	// The password in the DB is hashed, so we need to hash this one to compare
	$hash = password_hash($passwd, PASSWORD_DEFAULT);

	// Open the database
	$url = 'db';
	$userid = 'devuser';
	$password = 'devpass';
	$database = 'test_db';
	$mysqli = new mysqli($url, $userid, $password, $database);
	if ($mysqli -> connect_errno) {
		die("Failed to connect to MySQL: (" . $mysqli -> connect_errno . ") " . $mysqli -> connect_error);
	}

	// Build the SQL query
	$sql = "SELECT * FROM user WHERE Userid ='" . $user_id . "' AND Password ='" . $hash . "'";
	
	// Send the query to the database
	if (!$result = $mysqli -> query($sql)) {
		die('There was an error running the query [' . $mysqli -> error . ']');
	}
	while ($row = $result -> fetch_assoc()) {
		$_SESSION['logged_in'] = true;
		$_SESSION['username'] = $row['Name'];
	}

}

if (isset($_POST['action']) && $_POST['action'] == 'logoff') {
	//Destroy the session
	session_unset();
	session_destroy();
}

if (!isset($_SESSION['logged_in'])) {
	// If not logged in, render the login page here
	include ('login.html');
} else {
	include ('secret_page.php');
}
?>
