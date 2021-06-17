<?php
session_start();
define('CONECTOR', 'mysql');
define('HOST', 'localhost');
define('PORT', '3306');
define('DBNAME', 'testepraticogilmar');
define('CHARSET', 'utf8');
define('USER', 'root');
define('PASSWORD', '');


class ConexaoPDO
{
    private static $pdo;
    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (!isset(self::$pdo)) {
            try {
                self::$pdo = new PDO(CONECTOR . ":host=" . HOST . ";port=" . PORT . ";dbname=" . DBNAME . ";charset=" . CHARSET . ";", USER, PASSWORD);
            } catch (PDOException $e) {
                echo "Erro: " . $e->getMessage();
            }
        }
        return self::$pdo;
    }
}
?>