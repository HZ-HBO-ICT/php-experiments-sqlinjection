<!DOCTYPE html>
<html>
	<head><title>Secret Page</title></head>
	<body>
		<h1>Welcome to the world Domination Page</h1>
		<p>Welcome <?php echo $_SESSION['username']; ?></p>
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
