<?php
include "../vendor/check.php";
include_once("../vendor/pg/DBHandler.php");
if ($_GET['id'] != 1) {
    pg_query(DBHandler::getCon(), "DELETE FROM " . $_GET['table'] . " WHERE id=" . $_GET['id']);
    header('Location: admpDatabase.php');
} else {
    header('Location: admpDatabase.php');
}