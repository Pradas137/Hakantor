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

	$query = 'SELECT * FROM usuari';
$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

echo "<table>\n";
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

pg_free_result($result);

pg_close($dbconn);

	?>

</body>
</html>