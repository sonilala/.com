<!-- Last Updated 6th January 2016 - Brawrdon -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="/style.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Websites / Apps &bull; Brawrdon</title>
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
                <li><a class="active" href="/websites/">Websites</a></li>
                <li><a class="menu" href="/about/">About</a></li>
                <li><a class="menu" href="/">Home</a></li>
            </ul>
        </nav>
        <div class="page-wrapper">

            <div class="jumbotron">
                <div class="page-content">
                    <h1>Websites</h1>
                    <p>http://localhost is my favourite URL.</p>
                </div>
            </div>
            <div class="seporator">
                <div class="page-content">
                    <h1>E-Commerce</h1>
                </div>
            </div>
            <div class="tiles">
                <a href="/websites/intarisa-moments/">
                    <div class="left-one">
                        <p class="icon"><img src="/assets/img/buttons/store.png"></p>
                        <p class="box-title">Intarsia Moments</p>
                    </div>
                </a>
                <div class="right-one" style="background-image:url(/assets/img/websites/intarsia.png);background-size:cover;">
                    <p class="icon" style="opacity:0;"><img src="/assets/img/buttons/transparent.png"></p>
                    <p class="box-title" style="opacity:0;">
                        <br />
                    </p>
                </div>
                <div class="ad-leaderboard">
                    <?php include("/scripts/advert-leaderboard.html"); ?>
                </div>
            </div>
        </div>

</body>

</html>