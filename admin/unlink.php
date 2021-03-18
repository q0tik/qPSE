<?php
include_once("../vendor/pg/DBHandler.php");
    include "../vendor/check.php";

    if (isset($_GET['shure'])) {
        if($_GET['shure'] === "yes") {
            $str = strpos($_GET['file'], ".");
            $title = substr($_GET['file'], 0, $str);

            pg_query(DBHandler::getCon(), "DELETE FROM blog WHERE title='".$title."'");
            unlink("../content_blog/" . $_GET['file']);
            header('Location: admpBlog.php');
        }
        if ($_GET['shure'] === "no") {
            header('Location: admpBlog.php');
        }
    }
?>
<html>
<body>
    <p>R u shure?</p> <br />
    <a href="unlink.php?file=<?php echo $_GET['file']; ?>&shure=yes">yes</a> <a href="unlink.php?file=<?php echo $_GET['file']; ?>&shure=no">no</a>
</body>
</html>
