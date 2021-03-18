<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<link rel="stylesheet" type="text/css" href="css/index.css" />
		<link rel="stylesheet" type="text/css" href="css/enjoyhint.css" />
		<link rel="shortcut icon" href="images/siteicon.png" type="image/png">
		<title>main</title>

		<style>
			@font-face {
				font-family: Pecita;
				src: url(fonts/20180.otf);
			}
            @font-face {
                font-family: Alpha;
                src: url(fonts/alphabetized.ttf);
            }
		</style>

        <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	</head>
	<body>
		<div class="Hwrapper">
			<div class="wrapper">
				<?php include "header.php"; ?>

				<div class="content">
                    <div class="contentWrapper">
                        <div id="hi">
                            Hi, my name is M<img src="images/acrown.png" style="width:10px;padding-right: 3px;">x <span class="smile">:3</span><br />
                            <span id="thx">Thanks to <b><a href="https://en.wikipedia.org/wiki/Color_blindness">John Dalton</a></b> for finding my feature</span>
                        </div>

                        <div id="intro">
                            <p>
                                This page is about-page. I recommend u listen to
                                <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjfxsSkz6fvAhUaCBAIHbf9CDcQyCkwAHoECAIQAw&url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DlUMYai1XHXs&usg=AOvVaw3aF9xAWhtSCzxkjygG451d">this</a>
                                (don't try to figure it out <span class="smile_small">:D</span>).
                                If you do not understand what the two buttons at the top right mean (due to my drawing skills), then click on <a id="me">me</a>!
                            </p><br />
                        </div>

                        <div id="mainPart">
                            <img id="jpb" src="images/javaProgressBar.png" />
                            <p class="java">
                                I'm a novice programmer, who loves to use emoticons instead of punctuation marks; <b><i>JAVA</i></b> is my
                                favorite language<img src="/images/heart.png" width="30px"/> I'm good at fx framework and core
                                <span class="smile">: )</span> I have practiced this craft in some small companies, but mostly on my own mini projects.
                            </p>
                            <br />
                            <p>
                                Moreover, as far as u can see this web site is made on <b><i>php+js</i></b>,
                                <img id="phpcoffin" src="images/phpCoffin.png" />
                                so this project became my first (and may become my last) web-app made on these machine languages
                                (because I do not like frontend).
                                Come to visit me and see the admin-panel <span class="smile">:O</span> <br />
                            </p>
                            <p>
                                The blood of Unix has always flowed in the veins of all my computers, it increased my skills
                                and now I have become a real little expert in gsc, permissions, data excursion, <b><i>vim</i></b>, etc.<span id="chel" class="smile">o<-<</span> <span style="font-size: 25px; color: green;"><- human</span>
                                <style>
                                    #chel {
                                        margin-bottom: -20px;
                                        font-family: Pecita;
                                        letter-spacing: 0;
                                        font-weight: bold;
                                        font-size: 25px;
                                    }
                                </style>
                            </p>
                        </div>
                    </div>
                </div>
			</div>

			<?php include "footer.php"; ?>
		</div>

        <script type="text/javascript" src="js/kinetic-v5.1.0/kinetic-v5.1.0.min.js"></script>
        <script type="text/javascript" src="js/enjoyhint-master/enjoyhint.js"></script>
        <script type="text/javascript" src="js/hints.js"></script>
    </body>
</html>