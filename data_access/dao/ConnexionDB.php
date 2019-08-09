<?php

class ConnexionDB
{
    private static $_host = 'localhost';
    private static $_user = 'root';
    private static $_password = '';
    private static $_database = 'gestion_joueurs';
    private static $instance;

    private function __construct()
    {

    }

    public static function getInstance() {
        if (is_null(self::$instance)) {
            try {
                self::$instance = new PDO('mysql:host='.self::$_host.';dbname='.self::$_database.';charset=utf8', self::$_user, self::$_password, array(
                PDO::ATTR_PERSISTENT => true
                ));
            } catch (Exception $e) {
                die("Erreur de connexion à la base de données : ".$e);
            }
        }
        return self::$instance;
    }
}
?>
