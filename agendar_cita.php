<?php
include_once("conexion.php");
$ccon = Cconexion::ConexionBD();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $plan = $_POST['plan'];

    // Verificar si ya existe ese nombre en la tabla
    $verificar = $ccon->prepare("SELECT COUNT(*) FROM citas WHERE nombre = :nombre OR email = :email OR telefono = :telefono");
    $verificar->bindParam(':nombre', $nombre);
    $verificar->bindParam(':email', $email);
    $verificar->bindParam(':telefono', $telefono);
    $verificar->execute();

    if ($verificar->fetchColumn() > 0) {
        // Si ya existe, redirigimos a una página de error bonita
        header("Location: cita_duplicada.html");
        exit();
    }

    // Si no existe, insertamos
    $sql = "INSERT INTO citas (nombre, email, telefono, plan) VALUES (:nombre, :email, :telefono, :plan)";
    $stmt = $ccon->prepare($sql);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':telefono', $telefono);
    $stmt->bindParam(':plan', $plan);

    if ($stmt->execute()) {
        header("Location: exito.html");
        exit();
    } else {
        echo "Error al agendar la cita.";
    }
}
?>
