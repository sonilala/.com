<!-- Last Updated 6th January  2016 - Brawrdon -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="/style.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Random Facts &bull; Brawrdon</title>
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
                    <h1>Random Facts</h1>
                    <p>Here you'll find some facts, some about me and some other general ones. Either way they've all been taken from a fancy MySQL database and displayed onto the page with a fancy PHP script. Fancy right? Refresh the page for another one if you fancy!</p>
                </div>
            </div>
            <div class="seporator">
                <div class="page-content">
                    <h1>The random fact is:</h1>
                </div>
            </div>
            <div class="fact-text">
                <div class="page-content">
                    <?php
                        require_once("../scripts/connection.php");
                        $rand_id = rand(1, 20);
                        $sql = "SELECT * FROM ### WHERE ### = $rand_id";
                        $query = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($query) > 0) {
                            $fact_record = mysqli_fetch_assoc($query);
                            $fact_text = $fact_record["###"];  
                            echo "<p>" . $fact_text . "</p>";
                        }
                        else {
                            echo "<p>There was an error... Woops</p>";
                        }

                        mysqli_close($conn);
                    ?>
                </div>
            </div>
            <div class="tiles">
                <div class="ad-leaderboard">
                    <?php include("../scripts/advert-leaderboard.html"); ?>
                </div>
                <a href="/about/quotes/">
                    <div class="left-two">
                        <p class="icon"><img src="/assets/img/buttons/quote.png"></p>
                        <p class="box-title">Random Quotes</p>
                    </div>
                </a>
                <a href="/about/facts/">
                    <div class="right-two">
                        <p class="icon"><img src="/assets/img/buttons/refresh.png"></p>
                        <p class="box-title">Another Fact</p>
                    </div>
                </a>
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