<?php
    include "../vendor/check.php";
    include_once("../vendor/pg/DBHandler.php");

    $title = "db";
    include("toppaneltempl.php");
?>
        <div class="wrapper">
            <style>
                .wrapper * {
                    font-family: "Andale Mono";
                    text-align: center;
                }

                table {
                    background: rgba(0,0,0,0.5);
                    color: #98c300;
                    margin-left: 15%;
                    width: 70%;
                    border: 2px solid black;
                    text-align: center;
                }

                caption {
                    background: rgba(81, 81, 81, 0.5);
                    color: blue;
                    font-size: 20px;
                }

                tr, td, caption {
                    border: 2px solid black;
                }

                .minusik {
                    background: #c0c0ff;
                }
            </style>
            <?php
                $tables = pg_query(DBHandler::getCon(),
                    "SELECT table_name FROM information_schema.tables WHERE table_schema='public'");

                while ($lineT = pg_fetch_array($tables, null, PGSQL_ASSOC)) {
                    foreach ($lineT as $table) {
                        echo "\n<table>\n<caption>".$table."</caption>";
                        $rows = pg_query(DBHandler::getCon(), "SELECT * from " . $table);

                        while ($rowT = pg_fetch_array($rows, null, PGSQL_ASSOC)) {
                            echo "\t<tr>\n<td class='minusik'><a href='deleteLine.php?table=".$table."&id=".$rowT['id']."'><img width='17px' src='../images/minus.png' /></a></td>";
                            foreach ($rowT as $row) {
                                echo "\t\t<td>$row</td>\n";
                            }
                            echo "\t</tr>\n";
                        }

                        echo "</table>\n<br /><br />";
                    }
                }

            ?>
        </div>
    </body>
</html>