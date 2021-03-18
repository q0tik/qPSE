<?php
include_once("pg/DBHandler.php");

$que = pg_query(DBHandler::getCon(), "SELECT * FROM blog ORDER BY id DESC LIMIT 4 OFFSET ".$_GET['startFrom'])
    or die(pg_last_error());

$articles = array();
while ($row = pg_fetch_assoc($que)) {
    $articles[] = $row;
}

echo json_encode($articles);
?>