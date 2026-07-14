<?php
// Es
require_once 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pdo = Conexión::conectar();
  
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $raw_password = $_POST['password'] ?? '';

    
    $password_hash = password_hash($raw_password, PASSWORD_BCRYPT, ['cost' => 12]);

    
    $sql = "INSERT INTO usuarios (username, email, password_hash) VALUES (:username, :email, :password_hash)";
    $stmt = $pdo->prepare($sql);

    try {
        $stmt->execute([
            ':username' => $username,
            ':email'    => $email,
            ':password_hash' => $password_hash
        ]);
        echo "Registro exitoso en infraestructura distribuida.";
    } catch (\PDOException $e) {
        // Manejo controlado
        error_log($e->getMessage()); // Registro interno oculto al cliente
        echo "Error: Conflicto en el procesamiento de datos del usuario.";
    }
}
