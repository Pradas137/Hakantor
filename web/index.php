<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Hakantor</h1>
	<h2>File</h2>
<?php

	$dbopts = getenv('DATABASE_URL');

	$dbconn = pg_connect($dbopts)
	or die('No se ha podido conectar: ' . pg_last_error());

	echo "Connectado"

	?>

</body>
</html>