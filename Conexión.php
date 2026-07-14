<?php
class Conexión {
    private static $instance = null;

    public static function conectar() {
        if (self::$instance === null) {
            $host = 'localhost';
            $db   = 'sistema_seguro';
            $user = 'root';
            $pass = '';
            $charset = 'utf8mb4';

            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
            
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];

            try {
                self::$instance = new PDO($dsn, $user, $pass, $options);
            } catch (\PDOException $e) {
                // El estudiante 3 auditará que aquí NO se filtren datos sensibles de la infraestructura
                throw new \PDOException("Error de comunicación interna de infraestructura.", (int)$e->getCode());
            }
        }
        return self::$instance;
    }
}
