<?php
	include "../vendor/check.php";
	include_once("../vendor/pg/DBHandler.php");

	$title = "stats";
	include("toppaneltempl.php");
?>
        <div class="wrapper">
            <?php var_dump($_SESSION);?>
        </div>
        <?php
//            $result = pg_query(DBHandler::getCon(), "SELECT * FROM users")
//                or die("rip". pg_last_error());
//
//            echo "meow";
//            while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
//                foreach ($line as $col_value) {
//                    echo "<p style='font-family: Pecita;'>".$col_value."</p><br />";
//                }
//            }
        ?>
	</body>
</html>