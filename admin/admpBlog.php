<?php
    include "../vendor/check.php";
    include_once("../vendor/pg/DBHandler.php");

    $title = "blog";
    include("toppaneltempl.php");
?>

        <style>
            a {
                text-decoration: none;
            }
            a:hover {
                text-decoration: underline;
            }
        </style>

        <div class="wrapper">
            <nav class="menu">
                <a href="#" class="smallbtn">LIST</a>
                <a href="admpBlogAdd.php" class="smallbtn">ADD</a>
            </nav>

            <div class="list">
                <div class="listcont">
                    <?php
                        $i = 0;
                        $dir = scandir("../content_blog");

                        foreach ($dir as $filename) {
                            if ($filename === ".." || $filename === ".") continue;

                            if ($i % 2 == 0) {
                                $color = "background: rgba(0, 0, 0, 0.3);";
                            } else {
                                $color = "background: rgba(255, 255, 255, 0.3);";
                            }

                            echo "
                                <div class='listcontline' style='".$color."'>
                                    <a href='../content_blog/".$filename."'><p>".substr($filename, 0, strpos($filename, "."))."</p></a>
                                    <a href='admpBlogAdd.php?file=".$filename."'><img src='../images/plus.png' /></a>
                                    <a href='unlink.php?file=".$filename."'><img src='../images/minus.png' /></a>
                                </div>
                                ";
                            $i++;
                        }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>