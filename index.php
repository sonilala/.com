<!-- Last Updated 6th January  2016 - Brawrdon -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="/style.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Brawrdon &bull; rawr</title>
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
                <li><a class="menu" href="/about/">About</a></li>
                <li><a class="active" href="/">Home</a></li>
            </ul>
        </nav>
        <div class="page-wrapper">
            <div class="jumbotron">
                <div class="page-content">
                    <h1>Hi</h1>
                    <p>My name is Brandon.</p>
                    <p>This is my website.</p>
                    <p>I make things.</p>
                    <p>You see things.</p>
                    <p>This line is simply here to fill up space so that the website looks better.</p>
                </div>
            </div>
            <div class="tiles">
                <a href="http://www.github.com/brawrdon" target="_blank">
                    <div class="left-one">
                        <p class="icon"><img width="96px" src="/assets/img/buttons/github.png"></p>
                        <p class="box-title">Github</p>
                    </div>
                </a>
                <a href="https://github.com/Brawrdon/.com/releases" target="_blank">
                    <div class="right-one">
                        <p class="icon"><img src="/assets/img/buttons/sourcecode.png"></p>
                        <p class="box-title">Website Source Code</p>
                    </div>
                </a>
                <div class="ad-leaderboard">
                    <?php include("scripts/advert-leaderboard.html"); ?>
                </div>
                <a href="/websites/intarisa-moments/">
                    <div class="left-two">
                        <p class="icon">
                            <img src="/assets/img/buttons/website.png"></p>
                        <p class="box-title">Featured Website</p>
                    </div>
                </a>
                <a href="#">
                    <div class="right-two">
                        <p class="icon">
                            <img src="/assets/img/buttons/app.png"></p>
                        <p class="box-title">Featured App</p>
                    </div>
                </a>

                <a href="#">
                    <div class="left-one">
                        <p class="icon">
                            <img src="/assets/img/buttons/contact.png"></p>
                        <p class="box-title">Contact Me</p>
                    </div>
                </a>
                <a href="support/">
                    <div class="right-one">
                        <p class="icon">
                            <img src="/assets/img/buttons/support.png"></p>
                        <p class="box-title">Support Me</p>
                    </div>
                </a>
            </div>
        </div>
</body>

</html>