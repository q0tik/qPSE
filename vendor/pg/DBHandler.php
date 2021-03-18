<?php
    class DBHandler {
        private static $host = "localhost";
        private static $dbname = "q0tik";
        private static $user = "q0tik";
        private static $pass = "You-Stiker-1";

        public static function getCon() {
            $con = pg_connect("host=".DBHandler::$host.
                " port=5432 dbname=".DBHandler::$dbname.
                " user=".DBHandler::$user." password=".DBHandler::$pass)
                or die('Can not connect -_- ' . pg_last_error());

            return $con;
        }
    }
?>
