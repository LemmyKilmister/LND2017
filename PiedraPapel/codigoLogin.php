<html lang="es">
<head>
<meta charset="utf-8">
</head>

<?php
$sal = 'XyZzy12*_';
$contra = $sal . "php123";
$stored_hash = hash('md5', $contra);
if (isset($_POST["nombreUser"]) && isset($_POST["passUser"])) {
    $nombre = $_POST["nombreUser"];
    $pass = $sal . $_POST["passUser"];
    $md5 = hash('md5', $pass);

    if ($stored_hash == $md5) {

        echo "bien";    
        header("Location: game.php?name=".urlencode($nombre));        
    } else {

        echo "mal";
    }
}

?>
<body>


	<form method="post">
		<label>Nombre: </label> <input type="textbox" name="nombreUser"> <br>
		<label>Contraseña: </label> <input type="password" name="passUser"> <input
			type="submit">

	</form>




</body>
</html>