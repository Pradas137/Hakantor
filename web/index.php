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

	if(isset($_POST["Usuari"]))

	?>

 <form action="verifica_usuario.php" method="POST" id="formLogin">
            
            <label>User</label><br/>
            <input name="user" type="text" id="user" /><br/>
            <label>Password</label><br/>
            <input name="password" type="password" id="password" /><br/><br/>
            
            <input type="submit" name="Submit" value="LOGIN" /> 

</form>

</body>
</html>