<?php
    include_once("../vendor/pg/DBHandler.php");

    $result = pg_query(DBHandler::getCon(), "SELECT * FROM users WHERE name='".$_POST['login']."'")
        or die("rip". pg_last_error());
    $lines = pg_fetch_array($result, null, PGSQL_ASSOC);

    $login = $lines['name'];
    $password = $lines['pass'];

	if ($_POST['login'] === $login && md5(md5($_POST['pass'])) === $password) {
		session_start();

		$_SESSION['login'] = $login;
		$_SESSION['password'] = $password;


		header('Location: ../admin/index.php');

	} else {
		header('Location: ../admin/index.php?error=1');
	}
?>