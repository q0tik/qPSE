<?php
include "../vendor/check.php";
include_once("../vendor/pg/DBHandler.php");


$file = fopen("../content_blog/".$_POST['titleBlog'].".php", "w+");
fwrite($file, $_POST['contentBlog']);
fclose($file);

$date = date_create()->format('Y-m-d');
$sth = pg_query(DBHandler::getCon(), "SELECT * FROM blog where title='".$_POST['titleBlog']."'");
$n = count(pg_fetch_row($sth)) - 1;
$str = './admpBlog.php?';

if ($n == 0) {
    pg_query(DBHandler::getCon(), "INSERT INTO blog(title, date) values('" . $_POST['titleBlog'] . "', '" . $date . "')")
    or die("ne poluchilos ;( ");
    header('Location: '.$str);
} else {
    header('Location: '.$str);
}


?>