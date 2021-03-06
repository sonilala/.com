<!-- Last Updated 6th January  2016 - Brawrdon -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="/style.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>About &bull; Brawrdon</title>
</head>

<body>
    <?php include("/scripts/advert-loader.html"); ?>
        <nav>
            <ul>
                <ul style="float:left;margin-left:90px; margin-right:0;">
                    <li><a class="menu" href="/">&copy; Brawrdon 2016</a></li>
                </ul>
                <li><a class="menu" href="#">Media</a></li>
                <li><a class="menu" href="#">Apps</a></li>
                <li><a class="menu" href="/websites/">Websites</a></li>
                <li><a class="active" href="/about/">About</a></li>
                <li><a class="menu" href="/">Home</a></li>
            </ul>
        </nav>
        <div class="page-wrapper">

            <div class="jumbotron">
                <div class="page-content">
                    <h1>About Me</h1>
                    <p>In an attempt to keep this website as minimal as possible, I'm going to try to tell you about me through tiless. How fun is that?</p>
                </div>
            </div>
            <div class="seporator">
                <div class="page-content">
                    <h1>Brandon Okeke</h1>
                </div>
            </div>
            <div class="tiles">
                <a href="#">
                    <div class="left-one">
                        <p class="icon"><img src="/assets/img/buttons/me.png"></p>
                        <p class="box-title">Me</p>
                    </div>
                </a>
                <div class="right-one" style="background-image:url(/assets/img/about/display.jpg);background-size:cover;">
                    <p class="icon" style="opacity:0;"><img src="/assets/img/buttons/transparent.png"></p>
                    <p class="box-title" style="opacity:0;">
                        <br />
                    </p>
                </div>
                <div class="ad-leaderboard">
                    <?php include("/scripts/advert-leaderboard.html"); ?>
                </div>
                <a href="quotes/">
                    <div class="left-two">
                        <p class="icon"><img src="/assets/img/buttons/quote.png"></p>
                        <p class="box-title">Random Quotes</p>
                    </div>
                </a>
                <a href="facts/">
                    <div class="right-two">
                        <p class="icon"><img width="96px" src="/assets/img/buttons/fact.png"></p>
                        <p class="box-title">Random Facts</p>
                    </div>
                </a>
                <div class="left-one" style="background-image:url(/assets/img/about/desk.jpg);background-size:cover;">
                    <p class="icon" style="opactiy:0;"><img width="96px" src="/assets/img/buttons/transparent.png"></p>
                    <p class="box-title">
                        <br />
                    </p>
                </div>
                <a href="#">
                    <div class="right-one">
                        <p class="icon"><img src="/assets/img/buttons/cv.png"></p>
                        <p class="box-title">CV</p>
                    </div>
                </a>
                <a href="coding/">
                    <div class="left-two">
                        <p class="icon"><img src="/assets/img/buttons/coding.png"></p>
                        <p class="box-title">Coding Skills</p>
                    </div>
                </a>

                <a href="#">
                    <div class="right-two">
                        <p class="icon"><img src="/assets/img/buttons/media.png"></p>
                        <p class="box-title">Creative Content</p>
                    </div>
                </a>
                <a href="system/">
                    <div class="left-one">
                        <p class="icon"><img src="/assets/img/buttons/hardware.png"></p>
                        <p class="box-title">System Setup</p>
                    </div>
                </a>
                <a href="#">
                    <div class="right-one">
                        <p class="icon"><img src="/assets/img/buttons/other.png"></p>
                        <p class="box-title">Other</p>
                    </div>
                </a>
            </div>
        </div>

</body>

</html>