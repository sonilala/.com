<!-- Last Updated 6th January  2016 - Brawrdon -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="/style.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Coding Skills &bull; Brawrdon</title>
</head>

<body>
    <?php include("../scripts/advert-loader.html"); ?>

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
                    <h1>Coding Skills</h1>
                    <p>One of the main reasons for this website is to show off what I can do, so here's a list of programming languages I feel comfortable working with.</p>
                </div>
            </div>
            <div class="seporator">
                <div class="page-content">
                    <h1>Bash</h1>
                </div>
            </div>

            <div class="content">
                <img src="/assets/img/about/coding/bash.png">
                <div class="page-content">
                    <p style="padding-bottom:40px;">Since I've been using different Linux flavours to do programming during Sixth Form, I've picked up some knowledge on using a terminal emulator and Bash commands. I've been using Arch Linux to do my Year 13 Computing coursework, having had to install pretty much all of the operating system through Bash commands; which is pretty hard if you haven't tried it. I making constant use of the terminal emulator for things such as sudo commands (the pacman package manager's command is my favourite) and pushing commits to GitHub.</p>
                </div>

            </div>
            <div class="ad-leaderboard">
                <?php include("../scripts/advert-leaderboard.html"); ?>
            </div>
            <div class="seporator">
                <div class="page-content">
                    <h1>HTML, CSS, PHP and MySQL</h1>
                </div>
            </div>
            <div class="content">
                <img src="/assets/img/about/coding/html-css-php-mysql-header.png">
                <div class="page-content">
                    <p style="padding-bottom:40px;">Okay... That's a lot to talk about in one go but those are pretty much all the languages I use to make websites like this one. HTML and CSS being the standard for creating static webpages and designing them which in itself, isn't hard to do. All of the PHP I've learned is procedural since I haven't tackled object oriented programming probably yet. Most of the websites I create use some sort of MySQL database (I use phpMyAdmin to manage those), requiring me to implement a mix between PHP and MySQL to create awesome, random fact generating pages!</p>
                </div>

            </div>
            <div class="tiles">
                <a href="/about/">
                    <div class="full-tile">
                        <p class="icon"><img src="/assets/img/buttons/back.png"></p>
                        <p class="box-title">Back</p>
                    </div>
                </a>
            </div>
        </div>

</body>

</html>