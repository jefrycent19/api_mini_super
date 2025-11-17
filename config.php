<?php
$DB_HOST = getenv("DB_HOST");
$DB_USER = getenv("DB_USER");
$DB_PASS = getenv("DB_PASS");
$DB_NAME = getenv("DB_NAME");
$DB_PORT = getenv("DB_PORT");

$CEDULA_PROGRAMADOR = getenv("CEDULA_PROGRAMADOR");
$CLAVE_AES = getenv("CLAVE_AES");

$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME, $DB_PORT);

if ($conn->connect_error) {
    die(json_encode([
        "exito" => false,
        "mensaje" => "Error de conexión: " . $conn->connect_error,
        "datos" => null
    ]));
}
?>
