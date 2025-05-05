<?php
$nombre = $_POST['inputNombre'];
$email = $_POST['inputMail'];
$apellido = $_POST['inputApe'];
$tel = $_POST['inputTelefono'];
$dni = $_POST['inputDni'];
$dir = $_POST['inputDireccion'];
$localidad = $_POST['inputLocalidad'];
$entrega = $_POST['entrega'];

if ($nombre && $email && $apellido && $tel && $dni && $dir && $localidad && $entrega) {
    header('Location: index.php?seccion=contacto&mensaje=ok');
    exit;
}
?>