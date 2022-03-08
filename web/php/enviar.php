<?php

/* Definir variables y validación */
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$apellido = isset($_POST['apellido']) ? $_POST['apellido'] : '';
$mail = isset($_POST['mail']) ? $_POST['mail'] : '';
$mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : '';

/* establecer conexión a la base de datos */
try {

    $conexion = new PDO('mysql:host=localhost;port=3306;dbname=delairesomos', 'root', '');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    $pdo = $conexion->prepare('INSERT INTO personas(nombre, apellido, mail, mensaje) VALUES(?,?,?,?)');
    $pdo->bindParam(1, $nombre);
    $pdo->bindParam(2, $apellido);
    $pdo->bindParam(3, $mail);
    $pdo->bindParam(4, $mensaje);
    $pdo->execute() or die(print($pdo->errorInfo()));

    echo json_encode('true');

} catch (PDOException $error) {
    echo $error->getMessage();
    die();
}

?>