<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Hakantor</h1>
	<h2>Conection</h2>

	 <form class="" action="index.php" method="post">
      <input type="text" name="nom">Usuario <br>
      <input type="password" name="password">Contraseña <br>
      <input type="submit" name="" value="ENTRAR"> <br>
    </form>


    <?php
    $dbopts = getenv('DATABASE_URL');
    $dbconn = pg_connect($dbopts)
        or die('No se ha podido conectar: ' . pg_last_error());


    if ( isset($_POST['nom']) and isset($_POST['password']) ){
        $user = $_POST['nom'];
        $pass = $_POST['nom'];

        $sql = pg_query( "select * from usuaris where nom='{$nom}' and password='{$password}' ;" );

        if ( pg_num_rows($sql) > 0 ) {
            echo 'Estas dentro';
        }
        else {
            echo 'Error!!';
        }
    }




    ?>

</body>
</html>