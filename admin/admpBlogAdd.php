<?php
    include "../vendor/check.php";
    include_once("../vendor/pg/DBHandler.php");

    $title = "blog";
    include("toppaneltempl.php");
?>

    <style>
        form * {
            font-family: "Andale Mono";
        }
        textarea {
            height: calc(100vh - 400px);
            width: 70%;
            margin: 20px 15%;
            overflow-y: scroll;
            resize: none;
        }

        input[type=text] {
            margin: 30px 0 0 40%;
            width: 20%;
            font-size: 12px;
            text-align: center;
            border-radius: 5px;
            border: 2px solid green;
        }

        input[type=submit] {
            width: 40%;
            border-radius: 25px;
            margin-left: 30%;
            font-size: 19px;
            padding: 10px;
            color: #8a8cff;
            background: #1e4822;
            border: 2px solid #8a8cff;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
        }
        input[type=submit]:hover {
            color: #1e4822;
            background: #8a8cff;
            border: 2px solid #1e4822;
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
        }

    </style>
        <div class="wrapper">
            <nav class="menu">
                <a href="admpBlog.php" class="smallbtn">LIST</a>
                <a href="#" class="smallbtn">ADD</a>
            </nav>
            <form method="post" action="addNewBlogPage.php">
                <input type="text" id="titleBlog" name="titleBlog" value="<?php if (isset($_GET['file'])) { echo substr($_GET['file'], 0, strpos($_GET['file'], ".")); } ?>"/><br />
                <textarea id="contentBlog" name="contentBlog"><?php
                        if (isset($_GET['file'])) {
                            echo file_get_contents("../content_blog/".$_GET['file']);
                        }
                    ?></textarea><br />
                <input type="submit" name="submit" value="PUBLISH" id="submit" />
            </form>
        </div>
    </body>
</html>