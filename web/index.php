<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Hakantor</h1>
	<h2>Conection</h2>
<?php

	$dbopts = getenv('DATABASE_URL');

	$dbconn = pg_connect($dbopts)
	or die('No se ha podido conectar: ' . pg_last_error());

	echo "Connectado"

	$result = pg_query($dbconn, "SELECT nom, password FROM usuari");
	if (!$result) {
		echo "Ocurrió un error.\n";
		exit;
	}

	while ($row = pg_fetch_row($result)) {
  		echo "nom: $row[0]  password: $row[1]";
  		echo "<br />\n";
	}
 

	?>

<form action="index.php" method="POST" id="formLogin">
	<label>User</label><br/>
	<input name="user" type="text" id="user" /><br/>
	<label>Password</label><br/>
	<input name="password" type="password" id="password" /><br/><br/>
	<input type="submit" name="Submit" value="LOGIN" /> 
</form>
</body>
</html>