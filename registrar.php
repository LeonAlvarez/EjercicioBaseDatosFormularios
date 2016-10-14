<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db1";

$nombre = $_POST["nombre"];
$apellido1 = $_POST["apellido1"];
$apellido2 = $_POST["apellido2"];
$nick = $_POST["nick"];
$password = $_POST["password"];
$fechaAlta = date("Y-m-d H:i:s");
$email = $_POST["email"];
$domicilio = $_POST["direccion"];
$poblacion = $_POST["poblacion"];
$provincia = $_POST["provincia"];
$nif = $_POST["nif"];
$telefono = $_POST["telefono"];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO usuarios (Usuario_nombre, Usuario_apellido1 , Usuario_apellido2, Usuario_nick , Usuario_clave, Usuario_fecha_alta, Usuario_email, Usuario_domicilio, Usuario_poblacion, Usuario_provincia, Usuario_nif, Usuario_numero_telefono )
    VALUES ('$nombre', '$apellido1', '$apellido2', '$nick', '$password', '$fechaAlta', '$email', '$domicilio', '$provincia', '$nif', '$telefono')";
    // use exec() because no results are returned
    $conn->exec($sql);
    //echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>