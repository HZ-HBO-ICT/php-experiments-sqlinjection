<?php
/**
 * WORLD DOMINATION PAGE. 
 */
	if (!isset($_SESSION['logged_in']))
		die("NOT ALLOWED HERE");

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$action = $_POST['action'];
		if ($action == 'zombie') {
			$msg = 'Zombie virus released. Have a nice day!';
		} else if($action == 'disaster') {
			$msg = 'The Melt-inator worked fine. Have a nice day!';
		} else if($action == 'puppy') {
			$msg = 'You got stuck with a dog for the rest of your life. Well done!';
		}
	}
?>
<!DOCTYPE html>
<html>
	<head><title>Secret Page</title></head>
	<body>
		<h1>Welcome to the world Domination Page</h1>
		<p>
			Status: online
		</p>
		<form method="post" style="width: 450px; margin-left: auto; margin-right: auto">
			<h1>Select your action</h1>
	  		<input type="radio" name="action" value="zombie" checked>Release zombievirus</input>
  			<br>
  			<input type="radio" name="action" value="disaster">Melt polar icecaps with Melt-inator</input>
			<br>
  			<input type="radio" name="action" value="puppy">Save a puppy</input>
  			<br/>
			<input type="submit" value="Confirm">
		</form>
		<p/>
		<form method="post" style="width: 450px; margin-left: auto; margin-right: auto">
	  		<input type="hidden" name="action" value="logoff"></input>
			<input type="submit" value="Logoff">
		</form>
	</body>
</html>
