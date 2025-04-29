<?php
class Cconexion {
    // Método estático para la conexión a la base de datos
    public static function ConexionBD() {
        $host = 'localhost';
        $bdname = 'paciente';  // Aquí debes asegurarte que el nombre de tu base de datos sea correcto
        $username = 'root';
        $password = '';

        try {
            $ccon = new PDO("mysql:host=$host;dbname=$bdname", $username, $password);
            $ccon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Esto asegura que se muestren errores de conexión si ocurre alguno
            return $ccon;
        } catch (PDOException $exception) {
            echo "No se logró conectar: " . $exception->getMessage();
            return null;  // Retornamos null si no se pudo conectar
        }
    }
}
?>
 