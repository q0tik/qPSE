<?php
    include_once("../vendor/pg/DBHandler.php");

    session_start();
    if (isset($_SESSION['login'])) {
        $result = pg_query(DBHandler::getCon(), "SELECT * FROM users WHERE name='" . $_SESSION['login'] . "'")
        or die("rip" . pg_last_error());
        $lines = pg_fetch_array($result, null, PGSQL_ASSOC);

        $login = $lines['name'];
        $password = $lines['pass'];

        if ($_SESSION['login'] !== $login || $_SESSION['password'] !== $password) {
            header('Location: ../admin/');
        }
    } else {
        header('Location: ../admin/');
    }
?>