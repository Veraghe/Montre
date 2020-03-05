<?php
    class DbConnect {
    
        private static $db;
        
        public static function getDb() 
        {
            return DbConnect::$db;
        }
    
        public static function init()
        {
            $host = "localhost";
            $base = "";
            $user = "root";
            $pass = "";
    
            try {
                self::$db = new PDO('mysql:host=' . $host . '; charset=utf8; dbname=' . $base, $user, $pass);
                self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (Exception $e) {
                echo "Erreur : " . $e->getMessage() . "<br />";
                echo "N° : " . $e->getCode();
                die("Fin du script");
            }
        }
    }