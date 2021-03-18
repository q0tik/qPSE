<?php
include_once("./vendor/pg/DBHandler.php");

$que = pg_query(DBHandler::getCon(), "SELECT * FROM blog ORDER BY id DESC LIMIT 4 OFFSET 0")
or die(pg_last_error());

$articles = array();
while ($row = pg_fetch_assoc($que)) {
    $articles[] = $row;
}
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/blog.css" />
    <link rel="shortcut icon" href="images/siteicon.png" type="image/png">
    <title>main</title>

    <style>
        .btnMore {
            text-align: center;
            margin: 20px 0px;
        }

        #more img {
            content: url("images/more.png");
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            width: 100px;
        }

        #more:hover {
            content: url("images/moreSelected.png");
            width: 100px;
        }

        .title {
            letter-spacing: 3px;
            font-family: Alpha;
            font-size: 25px;
        }

        @font-face {
            font-family: Pecita;
            src: url(fonts/20180.otf);
        }
        @font-face {
            font-family: Alpha;
            src: url(fonts/alphabetized.ttf);
        }

        #articleDate {
            font-size: calc(1vw + 7px);
            color: #797979;
            position: relative;
            left: 0;
            text-align: center;
            margin-top: -25px;
        }
    </style>

    <script src='http://www.maths.nottingham.ac.uk/personal/drw/LaTeXMathML.js' type='text/javascript'></script>
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/podgruz.js"></script>
</head>Ј
<body>
<div class="Hwrapper">
    <div class="wrapper">
        <?php include "header.php"; ?>

        <div class="content" id="content">
                <?php
                    include_once("vendor/toLoad.php?startFrom=0");

                    foreach ($articles as $article) {
                        echo "
                        <div class='article'>
                            <p id='articleDate'>~".$article['date']."~</p>
                            <a class='title' >".$article['title']."</a>
                        ";
                        $file = file_get_contents("content_blog/".$article['title'].".php");
                        $descO = stripos($file, "<desc>") + 6;
                        $descC = stripos($file, "</desc>");

                        echo "<br /><p class='articleP'>".substr($file, $descO, $descC)."</p></div>";
                    }
                ?>
        </div>
    </div>
    
    <div class="btnMore"><a id="more"><img /></a></div>

    <?php include "footer.php"; ?>
</div>
</body>
</html>
