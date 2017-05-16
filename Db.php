<?php

/**
 * Created by @author Zbyněk Mlčák
 * Date: 16.05.2017
 */
class Db {
    private static $instance = NULL;

    private function __construct() {
    }

    private function __clone() {
    }

    /**
     * Get SQL connection to database
     * @return PDO
     */
    public static function getInstance() {
        if (!isset(self::$instance)) {
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            $pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND] = "SET NAMES 'utf8'";
            self::$instance = new PDO('mysql:host=localhost;dbname=infs;charset=utf8', 'root', 'root236', $pdo_options);
        }
        return self::$instance;
    }
}